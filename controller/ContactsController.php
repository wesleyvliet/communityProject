<?php
require_once 'model/ContactsLogic.php';
class ContactsController{

	public function __construct() {
		$this->ContactsLogic = new ContactsLogic();
	}

	public function handleRequest()
	{
		try {
			$op = isset($_REQUEST['op'])?$_REQUEST['op']:NULL;
			$url = strtolower($_GET['url']);
			if(!empty($op)) {
				switch ($op) {
					case 'login':
					$this->collectReadAdmin($_REQUEST['userName'], $_REQUEST['userPass']);
					break;
					case 'create':
					$this->collectCreateCompetition($_REQUEST['contestTitle'], $_REQUEST['contestGame'], $_REQUEST['contestDescription'], $_REQUEST['contestTime'], $_REQUEST['contestDate'], $_REQUEST['contestCompetitorsA'], $_REQUEST['contestCompetitorsB']);
					break;
					default:
					echo 'sorry kan deze pagina: ' . $op . ' niet vinden :(';
					break;
				}
			} else {
				switch ($url) {
					case 'admin': include 'view/login.php'; break;
					case 'dashboard': include 'view/dashboard.php'; break;
					case 'nieuwe-wedstrijden': include 'view/addContest.php'; break;
					case 'nieuwe-wedstrijden-competitors': $this->collectReadCompetitors($_REQUEST['contestTitle'], $_REQUEST['contestGame'], $_REQUEST['contestDescription'], $_REQUEST['contestAmount'], $_REQUEST['contestTime'], $_REQUEST['contestDate']); break;
					default:
					echo 'sorry kan deze pagina: ' . $url . ' niet vinden :(';
					break;
				}
			}
		} catch (ValidationException $e) {
				$errors = $e->getErrors();
		}

	}

	public function collectCreateCompetition($title, $game, $description, $time, $date, $contestCompetitorsA, $contestCompetitorsB) {
		$create = $this->ContactsLogic->createCompetition($title, $game, $description, $time, $date, $contestCompetitorsA, $contestCompetitorsB);
		$id = intval($create);
		if($id >= 1) {
			$message = 'wedstrijd is aangemaakt';
			include 'view/addContest.php';
		} else {
			$message = 'wedstrijd is niet aangemaakt proebeer het opnieuw';
			include 'view/addContest.php';
		}
	}

	public function collectReadCompetitors($title, $game, $description, $competitorsAmount, $time, $date){
		$check = $this->ContactsLogic->checkDataContest($title, $game, $description, $competitorsAmount, $time, $date);
		if($check == false) {
			$competitors = $this->ContactsLogic->fetchCompetitors();
		} else {
			$error = 'Ongeldige gegevens bij het inlogen controleer de velden opnieuw';
		}
		include 'view/addContest.php';
	}

	public function collectReadAdmin($userName, $userPass){
		$check = $this->ContactsLogic->checkData($userName, $userPass);
		if($check == false) {
			$admin = $this->ContactsLogic->readAdmin($userName, $userPass);
			if(empty($admin)) {
				$error = "Verkeerde wachtwoord of gebruikersnaam";
				include 'view/login.php';
			} else {
				session_name("admin");
				session_start();
				$_SESSION["name"] = $admin['username'];
				$_SESSION["sesionId"] = "83523489765735412414";
				header('Location: dashboard');
			}
		} else {
			$error = 'Ongeldige gegevens bij het inlogen controleer de velden opnieuw';
			include 'view/login.php';
		}
		//include 'view/reads.php';
	}

	public function collectReadContact($id){

	}

	public function collectUpdateContact(){

	}

	public function collectDeleteContact($id){

	}
	public function __destruct(){

	}

}

?>
