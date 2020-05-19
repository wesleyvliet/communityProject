<?php
require_once 'model/DataHandler.php';

class ContactsLogic {

	public function __construct() {
		$this->DataHandler = new Datahandler('localhost','mysql' ,'g69' ,'root' ,'');
	}

	public function createCompetitor($name, $logo) {
		$sql = "INSERT INTO `competitors` (`id`, `name`, `logo`) VALUES (NULL, '$name', '$logo')";
		$result = $this->DataHandler->createData($sql);
		return $result;
	}

	public function uploadFile($file) {
		if($file['size'] !== 0) {
			$name = $file['name'];
			$target_dir = "view/assets/img/compLogo/";
			$target_file = $target_dir . basename($file["name"]);
			// Select file type
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Valid file extensions
			$extensions_arr = array("jpg","jpeg","png","gif");
			// Check extension
			if( in_array($imageFileType,$extensions_arr) ){
				// Upload file
				if(file_exists($target_file)) {
					$result = array('upload' => 'false', 'message' => 'er is al een logo met deze naam, noem het bestand anders en proebeer het opnieuw');
					return $result;
				} else {
					if(!move_uploaded_file($file['tmp_name'],$target_dir.$name)) {
						$result = array('upload' => 'false', 'message' => 'er is een error opgetreden probeer het opnieuw');
						return $result;
					} else {
						$result = array('upload' => 'true', 'message' => $target_file);
						return $result;
					}
				}
			} else {
				$result = array('upload' => 'false', 'message' => 'ongeldige bestand type alleen jpg, jprg, png, gif zijn toegestaan');
				return $result;
			}
		} else {
			$result = array('upload' => 'false', 'message' => 'geen logo binnengekregen controleer het formulier, en proebeer het opnieuw');
			return $result;
		}
	}

	public function readCompetition() {
		$sql = "SELECT * FROM competition";
		$results = $this->DataHandler->readsData($sql);
		$resultArray = array();
		while($row = $results->fetch(PDO::FETCH_ASSOC)) {
			$competitorNameA = array();
			$competitorA = unserialize($row['competitorsA']);
			$endA = count($competitorA);
			for ($i=0; $i < $endA; $i++) {
				$id = $competitorA[$i];
				$sql = "SELECT * FROM competitors WHERE id = $id";
				$resultsCompA = $this->DataHandler->readsData($sql);
				while($rowCompA = $resultsCompA->fetch(PDO::FETCH_ASSOC)) {
					//echo var_dump($row);
					array_push($competitorNameA, array("id" => $rowCompA['id'], "name" => $rowCompA['name'], "logo" => $rowCompA['logo']));
				}
			}
			$competitorNameB = array();
			$competitorB = unserialize($row['competitorsB']);
			$endB = count($competitorB);
			for ($i=0; $i < $endB; $i++) {
				$id = $competitorB[$i];
				$sql = "SELECT * FROM competitors WHERE id = $id";
				$resultsCompB = $this->DataHandler->readsData($sql);
				while($rowCompB = $resultsCompB->fetch(PDO::FETCH_ASSOC)) {
					//echo var_dump($row);
					array_push($competitorNameB, array("id" => $rowCompB['id'], "name" => $rowCompB['name'], "logo" => $rowCompB['logo']));
				}
			}
			//echo var_dump($competitorNameA);
			array_push($resultArray, array(
				"id" => $row['id'],
				'title' => $row['title'],
				'game' => $row['game'],
				'description' => $row['description'],
				'competitorsA' => $competitorNameA,
				'competitorsB' => $competitorNameB,
				'time' => $row['time'],
				'date' => $row['date']
			));
		}
		//echo var_dump($resultArray);
		return($resultArray);

	}

	public function createCompetition($title, $game, $description, $time, $date, $contestCompetitorsA, $contestCompetitorsB) {
		$contestCompetitorsA = serialize($contestCompetitorsA);
		$contestCompetitorsB = serialize($contestCompetitorsB);
		$sql = "INSERT INTO `competition` (`id`, `title`, `game`, `description`, `competitorsA`, `competitorsB`, `time`, `date`) VALUES (NULL, '$title', '$game', '$description', '$contestCompetitorsA', '$contestCompetitorsB', '$time', '$date')";
		$result = $this->DataHandler->createData($sql);
		return $result;
	}

	public function checkDataContest($title, $game, $description, $competitorsAmount, $time, $date) {
		$error = false;
		if(empty($title) || empty($game) || empty($description) || empty($competitorsAmount) || empty($time) || empty($date)) {
			$error = true;
		}
		if(strlen($title) > 60 || strlen($game) > 60 || strlen($description) > 240 || strlen($competitorsAmount) > 60 || strlen($time) > 60 || strlen($date) > 60) {
			$error = true;
		}
		return $error;
	}

	public function checkData($userName, $userPass) {
		$error = false;
		if(empty($userName) || empty($userPass)) {
			$error = true;
		}
		if(strlen($userName) > 60 || strlen($userPass) > 60) {
			$error = true;
		}
		return $error;
	}
	public function fetchCompetitors() {
		$sql = "SELECT * FROM competitors";
		$results = $this->DataHandler->readsData($sql);
		$resultTest = array();
		while($row = $results->fetch(PDO::FETCH_ASSOC)) {
			array_push($resultTest, array("id" => $row['id'], 'name' => $row['name']));
		}
		return($resultTest);
	}

	public function readAdmin($userName, $userPass){
		$sql = "SELECT * FROM admin WHERE username = '$userName' AND password = '$userPass'";
		$results = $this->DataHandler->readsData($sql);
		while($row = $results->fetch(PDO::FETCH_ASSOC)) {
		    return($row);
		}
	}

	public function readContact($id){

	}

	public function updateContact($name, $phone, $email, $address, $id){

	}

	public function deleteContact($id){

	}

	public function archiveGame($id) {
		$sql = "UPDATE competition SET archived=1 WHERE id=$id";
		$this->DataHandler->updateData($sql);
		$message = "Wedstrijd succesvol verwijderd! Weer terug zetten <a href='?op=undo-delete&id=" . $id . "'>klik hier!</a>";
		return $message;
	}

	public function undoDelete($id) {
		$sql = "UPDATE competition SET archived=0 WHERE id=$id";
		$this->DataHandler->updateData($sql);
		$message = "Actie ongedaan gemaakt";
		return $message;
	}

	public function fetchAllGames($message) {
		if ((isset($message)) && ($message != "")) {
			$message = $message;
		} else {
			$message = "";
		}
		$sql = "SELECT * FROM competition";
		$results = $this->DataHandler->readsData($sql);
		$overview = "<a href='dashboard'>Terug</a>";
		$overview .= "<div>";
		$overview .= $message;
		$overview .= "<table>";
		$overview .= "<tr><th>Title<th>";
		$overview .= "<th>Game</th>";
		$overview .= "<th>Description</th>";
		$overview .= "<th>Competitors A</th>";
		$overview .= "<th>Competitors B</th>";
		$overview .= "<th>Time</th>";
		$overview .= "<th>date</th>";
		$overview .= "<th>Delete</th>";
		$overview .= "</tr>";
		while($row = $results->fetch(PDO::FETCH_ASSOC)) {
			$overview .= "<tr><td>" . $row['title'] . "<td>";
			$overview .= "<td>" . $row["game"] . "</td>";
			$overview .= "<td>" . $row["description"] . "</td>";
			$overview .= "<td>" . $row["competitorsA"] . "</td>";
			$overview .= "<td>" . $row["competitorsB"] . "</td>";
			$overview .= "<td>" . $row["time"] . "</td>";
			$overview .= "<td>" . $row["date"] . "</td>";
			$overview .= "<td><a href='?op=delete-game&id=" . $row['id'] . "'>Delete</a></td>";
			$overview .= "</tr>";
		}
		$overview .= "</table>";
		$overview .= "</div>";
		return $overview;
	}

}
