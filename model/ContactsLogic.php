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
			$target_dir = "view/assets/img/";
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

		$comp ='';
       	while ($competition = $results->fetch(PDO::FETCH_ASSOC)){
			$sql = "SELECT * FROM competitors";
			$teams = $this->DataHandler->readsData($sql);
			while ($competitors = $teams->fetch(PDO::FETCH_ASSOC)) {
				if ($competition['competitorsA'] == $competitors['name']) {
					$logoA = $competitors['logo'];
				}
				if ($competition['competitorsB'] == $competitors['name']) {
					$logoB = $competitors['logo'];
				}
			}

			$comp .= '<div class="  comp-container hidden ">';
			$comp .= '<div class=" comp-section1">';
			$comp .= '<div class=" comp-date-section">';
			$comp .= '<span>'. $competition["date"] . '</span><span>'.$competition["time"] . '</span>';
			$comp .= '</div>';
			$comp .= '<div class="comp-held-section ">';
			$comp .= '<span>'. $competition["title"] . '</span><span>'.$competition["game"] . '</span>';
			$comp .= '</div>';
			$comp .= '</div>';

			$comp .= '<div class="comp-section2">';
			$comp .= '<div class="comp-img-container">';
			$comp .= '<img src="view/assets/img/'. $logoA .'" alt="" class="comp-img ">';
			$comp .= '</div>';
			$comp .= '<div class="mr-2">vs</div>';
			$comp .= '<div class=" comp-img-container">';
			$comp .= '<img src="view/assets/img/'. $logoB .'" alt="" class="comp-img ">';
			$comp .= '</div>';
			$comp .= '</div>';
			$comp .= '</div>';
	   	}
	   return $comp;
	}

	public function createCompetition($title, $game, $description, $time, $date, $contestCompetitorsA, $contestCompetitorsB) {
		$contestCompetitorsA = serialize($contestCompetitorsA);
		$contestCompetitorsB = serialize($contestCompetitorsB);
		$sql = "INSERT INTO `competition` (`id`, `title`, `game`, `description`, `competitorsA`, `competitorsB`, `time`, `date`) VALUES (NULL, '$title', '$game', '$description', '$contestCompetitorsA', '$contestCompetitorsB', '$time', '$date')";
		$result = $this->DataHandler->createData($sql);
		return $result;
	}

	public function checkDataGame($id, $title, $game, $competitorsA, $competitorsB, $time, $date) {
		$error = array('error' => 'false');
		if(empty($title) || empty($game) || empty($competitorsA) || empty($competitorsB) || empty($time) || empty($date)) {
			$error = array('error' => 'true', 'message' => 'niet alle gegevens zijn ingevuld.');
		}
		if(strlen($title) > 80 || strlen($game) > 80 || strlen($competitorsA) > 240 || strlen($competitorsB) > 240 || strlen($time) > 80 || strlen($date) > 80) {
			$error = array('error' => 'true', 'message' => 'ongeldige lengte bij de invoervelden.');

		}
		return $error;
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
		$message = "Wedstrijd succesvol verwijderd! Weer terug zetten <a class='text-blue-900 font-bold' href='?op=undo-delete&id=" . $id . "'>klik hier!</a>";
		return $message;
	}

	public function undoDelete($id) {
		$sql = "UPDATE competition SET archived=0 WHERE id=$id";
		$this->DataHandler->updateData($sql);
		$message = "Wedstrijd hersteld";
		return $message;
	}

	public function fetchAllGames($message) {
		if ((isset($message)) && ($message != "")) {
			$message = '</div>
			<div id="alert-box" class="alert-toast absolute bottom-0 right-0 m-8">
			<label class="close cursor-pointer flex items-start items-center justify-center w-full p-2 pt-1 pr-1 bg-green-500 rounded shadow-lg text-white" for="footertoast">
			<p>'.$message.'</p>
			<button onclick="hideAlert()" class="h-8 w-5 ml-2">
			<svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
			<path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
			</svg>
			</button>
			</label>
			</div>';
		} else {
			$message = "";
		}
		$sql = "SELECT * FROM competition WHERE archived=0";
		$results = $this->DataHandler->readsData($sql);
		$overview = '<table class="border-collapse w-full mt-10">
		<thead class="bg-gray-800 text-white border border-gray-300">
			<tr>
				<th class="p-3 font-bold uppercase hidden lg:table-cell">Event</th>
				<th class="p-3 font-bold uppercase hidden lg:table-cell">Game</th>
				<th class="p-3 font-bold uppercase hidden lg:table-cell">Comp A</th>
				<th class="p-3 font-bold uppercase hidden lg:table-cell">Comp B</th>
				<th class="p-3 font-bold uppercase hidden lg:table-cell">Tijd</th>
				<th class="p-3 font-bold uppercase hidden lg:table-cell">Datum</th>
				<th class="p-3 font-bold uppercase hidden lg:table-cell">Aanpassen</th>
				<th class="p-3 font-bold uppercase hidden lg:table-cell">Verwijderen</th>
			</tr>
		</thead>
		<tbody>';
		while($row = $results->fetch(PDO::FETCH_ASSOC)) {
			$overview .= '<tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
			<td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
				<span class="lg:hidden absolute text-white bg-gray-800 rounded-r-lg inset-y-0 left-0 py-4 text-xs font-bold uppercase w-32">Event</span>
				'.$row['title'].'
			</td>
			<td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
				<span class="lg:hidden absolute text-white bg-gray-800 rounded-r-lg inset-y-0 left-0 py-4 text-xs font-bold uppercase w-32">Game</span>
				'.$row['game'].'
			</td>
			<td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
				<span class="lg:hidden absolute text-white bg-gray-800 rounded-r-lg inset-y-0 left-0 py-4 text-xs font-bold uppercase w-32">Comp A</span>
				'.$row['competitorsA'].'
			</td>
			<td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
				<span class="lg:hidden absolute text-white bg-gray-800 rounded-r-lg inset-y-0 left-0 py-4 text-xs font-bold uppercase w-32">Comp B</span>
				'.$row['competitorsB'].'
			</td>
			<td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
				<span class="lg:hidden absolute text-white bg-gray-800 rounded-r-lg inset-y-0 left-0 py-4 text-xs font-bold uppercase w-32">Tijd</span>
				'.$row['time'].'
			</td>
			<td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
				<span class="lg:hidden absolute text-white bg-gray-800 rounded-r-lg inset-y-0 left-0 py-4 text-xs font-bold uppercase w-32">Datum</span>
				'.$row['date'].'
			</td>
			<td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
				<span class="lg:hidden absolute text-white bg-gray-800 rounded-r-lg inset-y-0 left-0 py-4 text-xs font-bold uppercase w-32">Aanpassen</span>
				<a href="?op=edit-wedstrijd-form&id=' . $row['id'] . '">
					<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="15" height="15"><path class="heroicon-ui" d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92
							1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15
							19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2
							2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4
							1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0
							0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
						</svg>
					</button>
				</a>
			</td>
			<td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
				<span class="lg:hidden absolute text-white bg-gray-800 rounded-r-lg inset-y-0 left-0 py-4 text-xs font-bold uppercase w-32">Verwijderen</span>
				<a href="?op=delete-game&id=' . $row['id'] . '">
					<button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
						<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path d="M3 6v18h18v-18h-18zm5 14c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm5 0c0
							.552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm4-18v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.315c0 .901.73 2 1.631 2h5.712z"/>
						</svg>
					</button>
				</a>
			</td>
		</tr>';
		}
		$overview .= '</tbody>
		</table>
		</div>' . $message;
		return $overview;
	}

	public function editGameForm($id) {
		$sql = "SELECT * FROM competition WHERE id=$id";
		$results = $this->DataHandler->readsData($sql);
		$game = $results->fetch(PDO::FETCH_ASSOC);

		$sql = "SELECT * FROM competitors";
		$results = $this->DataHandler->readsData($sql);
		$compA = "";
		$compB = "";
		while ($comp = $results->fetch(PDO::FETCH_ASSOC)) {
			if ($game['competitorsA'] == $comp['name']) {
				$compA .= '<option selected value="'.$game['competitorsA'].'">'.$game['competitorsA'].'</option>';
			} else {
				$compA .= '<option value="'.$comp['name'].'">'.$comp['name'].'</option>';
			}

			if ($game['competitorsB'] == $comp['name']) {
				$compB .= '<option selected value="'.$game['competitorsB'].'">'.$game['competitorsB'].'</option>';
			} else {
				$compB .= '<option value="'.$comp['name'].'">'.$comp['name'].'</option>';
			}
		}




		$edit = '<form action="?op=edit-wedstrijd" method="post" class="max-w-lg border border-gray-200 shadow-xs mx-auto rounded-lg p-10 bg-white text-center space-y-6 flex-grow">
			<input type="text" name="id" hidden value="' . $game['id'] . '">
			<div class="flex flex-col">
				<label for="event" class="self-start mb-2 font-medium text-gray-800">
					Event
				</label>

				<input type="text" id="event" name="title" value="'.$game["title"].'" class="outline-none px-2 py-2 border shadow-sm placeholder-gray-500 opacity-50 rounded">
			</div>

			<div class="flex flex-col">
				<label for="game" class="self-start mb-2 font-medium text-gray-800">
					Event
				</label>

				<select name="game" class="border border-gray-400 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
					<option selected value="'.$game['game'].'">'.$game['game'].'</option>
					<option value="CSGO">CSGO</option>
					<option value="Rocket League">Rocket League</option>
					<option value="League of Legends">League of Legends</option>
					<option value="Valorant">Valorant</option>
					<option value="Overwatch">Overwatch</option>
					<option value="Dota 2">Dota 2</option>
					<option value="R6">R6</option>
				</select>
			</div>

			<div class="flex items-center text-gray-800">
				<span class="block border border-gray-400 w-2/4 mr-2"></span>
					Showdown
				<span class="block border border-gray-400 w-2/4 ml-2"></span>
			</div>
			<div class="flex justify-around text-center divide-x divide-gray-300 p-8">

				<select name="competitorsA" class="w-40 border border-gray-400 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
					'.$compA.'
				</select>

				<h1 class="text-red-500 font-bold border-none">Vs</h1>

				<select name="competitorsB" class="w-40 border border-gray-400 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
					'.$compB.'
				</select>
			</div>

			<div class="flex items-center text-gray-800">
				<span class="block border border-gray-400 w-1/2 mr-2"></span>
					Datum Tijd
				<span class="block border border-gray-400 w-1/2 ml-2"></span>
			</div>

			<div class="flex justify-around text-center divide-x divide-gray-300">

				<input type="date" name=date id="date" class="border-solid bg-transparent text-xl appearance-none outline-none" value="'.$game['date'].'">

				<div class="mt-2 p-1 w-40 bg-white rounded-lg shadow-xl">
					<div class="flex">
						<input type="time" name="time" placeholder="00:00" step="900" value="'.$game['time'].'" class="bg-transparent text-xl appearance-none outline-none">
					</div>
				</div>
			</div>


			<div class="flex items-center text-gray-800 p-8">
				<span class="w-1/2"></span>
				<a href="#">
					<input type="submit" value="Wedstrijd aanpassen" class="bg-green-400 hover:bg-green-600 text-white font-bold py-1 px-10 rounded float-right"/>
				</a>
				<span class="w-1/2"></span>
			</div>

		</form>';

		return $edit;
	}

	public function editGame($id, $title, $game, $competitorsA, $competitorsB, $time, $date) {
		$sql = "UPDATE competition SET title='$title', game='$game', competitorsA='$competitorsA', competitorsB='$competitorsB', time='$time', date='$date' WHERE id=$id";
		$this->DataHandler->updateData($sql);
		$message = "Wedstrijd successvol geupdate";
		return $message;
	}

	public function fetchArchivedGames($message) {
		if ((isset($message)) && ($message != "")) {
			$message = '</div>
			<div id="alert-box" class="alert-toast absolute bottom-0 right-0 m-8">
			<label class="close cursor-pointer flex items-start items-center justify-center w-full p-2 pt-1 pr-1 bg-green-500 rounded shadow-lg text-white" for="footertoast">
			<p>'.$message.'</p>
			<button onclick="hideAlert()" class="h-8 w-5 ml-2">
			<svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
			<path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
			</svg>
			</button>
			</label>
			</div>';
		} else {
			$message = "";
		}
		$sql = "SELECT * FROM competition WHERE archived=1";
		$results = $this->DataHandler->readsData($sql);
		$overview = '<div class="shadow overflow-hidden rounded border-b border-gray-200">
		<table class="min-w-full bg-white">
		<thead class="bg-gray-800 text-white">
		<tr>
		<th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Event</th>
		<th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Game</th>
		<th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Comp A</th>
		<th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Comp B</th>
		<th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Tijd</th>
		<th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Datum</th>
		<th class="text-left py-3 px-4 uppercase font-semibold text-sm">Herstellen</th>
		</tr>
		</thead>';
		while($row = $results->fetch(PDO::FETCH_ASSOC)) {
			$overview .= '<tr>
			<td class="w-1/6 text-left py-3 px-4">'.$row['title'].'</td>
			<td class="w-1/6 text-left py-3 px-4">'.$row['game'].'</td>
			<td class="w-1/6 text-left py-3 px-4">'.$row['competitorsA'].'</td>
			<td class="w-1/6 text-left py-3 px-4">'.$row['competitorsB'].'</td>
			<td class="w-1/6 text-left py-3 px-4">'.$row['time'].'</td>
			<td class="w-1/6 text-left py-3 px-4">'.$row['date'].'</td>
			<td class="w-1/6 text-left py-3 px-4">
			<a href="?op=undo-delete-archive&id=' . $row['id'] . '"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M13 5.41V21a1 1 0 0 1-2 0V5.41l-5.3 5.3a1 1 0 1 1-1.4-1.42l7-7a1 1 0 0 1 1.4 0l7 7a1 1 0 1 1-1.4 1.42L13 5.4z"/></svg>
			</button></a>
			</td>
			</tr>';
		}
		$overview .= '</table></div>' . $message;
		return $overview;
	}

	public function fetchAllArticles($message) {
		if ((isset($message)) && ($message != "")) {
			$message = '</div>
			<div id="alert-box" class="alert-toast absolute bottom-0 right-0 m-8">
			<label class="close cursor-pointer flex items-start items-center justify-center w-full p-2 pt-1 pr-1 bg-green-500 rounded shadow-lg text-white" for="footertoast">
			<p>'.$message.'</p>
			<button onclick="hideAlert()" class="h-8 w-5 ml-2">
			<svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
			<path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
			</svg>
			</button>
			</label>
			</div>';
		} else {
			$message = "";
		}
		$sql = "SELECT *, categorie.id, categorie.name FROM articles INNER JOIN categorie ON articles.categorie=categorie.id";
		$results = $this->DataHandler->readsData($sql);
		$overview = '<table>
			<tr><th>Title</th>
			<th>Categorie</th>
			<th>Date</th>
			<th>Author</th></tr>';
		while($row = $results->fetch(PDO::FETCH_ASSOC)) {
			$overview .= '<tr>
			<td>'.$row['title'].'</td>
			<td>'.$row['name'].'</td>
			<td>'.$row['date'].'</td>
			<td>'.$row['author'].'</td>
			</tr>';
		}
		$overview .= '</table>'.$message;
		return $overview;
	}

	public function fetchArticleForm() {
		$sql = "SELECT * FROM categorie";
		$results = $this->DataHandler->readsData($sql);
		$form = '<select name="categorie" id="categorie">';
		while($row = $results->fetch(PDO::FETCH_ASSOC)) {
			$form .= '<option value="'.$row['id'].'">'.$row['name'].'</option>';
		}
		$form .= '</select>';
		return $form;
	}

	public function CreateArticle($title, $categorie, $author, $text, $image) {
		$this->uploadFile($image);
		$image = $image['name'];
		$date = date("Y-m-d");
		$sql = "INSERT INTO `articles` (`id`, `title`, `content`, `date`, `categorie`, `author`, `preview_image`) VALUES (NULL, '$title', '$text', '$date', '$categorie', '$author', '$image')";
		$this->DataHandler->createData($sql);
		$message = "Artiekel is aangemaakt";
		return $message;
	}

	public function readArticle($id) {
		$sql = "SELECT * FROM articles WHERE id=$id";
		$results = $this->DataHandler->readsData($sql);
		$row = $results->fetch(PDO::FETCH_ASSOC);

		$article = array();
		$article["title"] = $row["title"];
		$article["content"] = $row["content"];
		$article["date"] = $row["date"];
		$article["categorie"] = $row["categorie"];
		$article["author"] = $row["author"];
		$article["preview_image"] = $row["preview_image"];

		return $article;
	}

	public function displayArticles() {
		$sql = "SELECT * FROM articles";
		$results = $this->DataHandler->readsData($sql);
		$articles = "";
		while($row = $results->fetch(PDO::FETCH_ASSOC)) {
			$articles .= '<a class="articleGrid hidden" href="article?id='.$row["id"].'">
				<div class="bg-top bg-cover" id="article" style="background-image: url(view/assets/img/'.$row["preview_image"].')">
					<div class="  text-center bg-gray-700 bg-opacity-25 hover:bg-gray-900 hover:bg-opacity-75 px-10 pt-40 h-full text-xl text-white ">
						'.$row['title'].'
					</div>
				</div>
			</a>';
		}
		return $articles;
	}
}
