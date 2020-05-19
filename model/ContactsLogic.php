<?php
require_once 'model/DataHandler.php';

class ContactsLogic {

	public function __construct() {
		$this->DataHandler = new Datahandler('localhost','mysql' ,'g69' ,'root' ,'');
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
		$message = "Wedstrijd succesvol verwijderd! Weer terug zetten <a class='text-blue-900 font-bold' href='?op=undo-delete&id=" . $id . "'>klik hier!</a>";
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
			$message = '</div>
			<div id="alert-box" class="alert-toast absolute bottom-0 right-0 m-8">
			<label class="close cursor-pointer flex items-start items-center justify-center w-full p-2 pt-1 pr-1 bg-red-500 rounded shadow-lg text-white" for="footertoast">
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
		<th class="text-left py-3 px-4 uppercase font-semibold text-sm">Aanpassen</th>
		<th class="text-left py-3 px-4 uppercase font-semibold text-sm">Verwijderen</th>
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
			<a href="?op=edit-wedstrijd&id=' . $row['id'] . '"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 
			1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 
			19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 
			2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 
			1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 
			0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
			</svg>
			</button></a>
			</td>
			<td class="w-1/6 text-left py-3 px-4">
			<a href="?op=delete-game&id=' . $row['id'] . '"><button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M3 6v18h18v-18h-18zm5 14c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm5 0c0 
			.552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm4-18v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.315c0 .901.73 2 1.631 2h5.712z"/>
			</svg>
			</button>
			</td>
			</tr>';
		}
		$overview .= '</table></div>' . $message;
		return $overview;
		
		
		
	}

	public function editGame($id) {
		$sql = "SELECT * FROM competition WHERE id=$id";
		$results = $this->Datahandler->readsData($sql);
		$game = $results->fetch(PDO::FETCH_ASSOC);
		
		$edit = "<form action='' method='post'>
		<input type='text' name='contestTitle' value=" . $game['title'] . ">
		<input type='text' name='contestGame' value=" . $game['game'] . ">
		<input type='text' name='contestDescription' value=" . $game['description'] . ">

		<input type='time' value='" . $game['time'] ."' name='contestTime'>
		<input type='date' value='" . $game['date'] ."' name='contestDate'>
		</form>";
	}

}
