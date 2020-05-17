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

	public function fetchAllGames() {
		$sql = "SELECT * FROM competition";
		$results = $this->DataHandler->readsData($sql);
		$overview = "<div>";
		while($row = $results->fetch(PDO::FETCH_ASSOC)) {
			$overview .= "<div>";
			$overview .= $row['title'] . "<br>";
			$overview .= $row["game"]  . "<br>";
			$overview .= $row["description"]  . "<br>";
			$overview .= $row["competitorsA"]  . "<br>";
			$overview .= $row["competitorsB"]  . "<br>";
			$overview .= $row["time"]  . "<br>";
			$overview .= $row["date"]  . "<br>";
			$overview .= "</div>";
		}
		$overview .= "</div>";
		return $overview;
	}

}
