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
					case 'delete-game':
					$this->collectDeleteGame($_REQUEST['id']);
					break;
					case 'undo-delete':
					$this->collectUndoDelete($_REQUEST['id']);
					break;
					case 'undo-delete-archive':
					$this->collectUndoDeleteArchive($_REQUEST['id']);
					break;
					case 'edit-wedstrijd-form':
					$this->collectEditGameForm($_REQUEST['id']);
					break;
					case 'edit-wedstrijd':
					$this->collectEditGame($_REQUEST['id'], $_REQUEST['title'], $_REQUEST['game'], $_REQUEST['competitorsA'], $_REQUEST['competitorsB'], $_REQUEST['time'], $_REQUEST['date']);
					break;
					case 'add-competitor':
						$this->collectCreateCompetitor($_REQUEST['competitorName'], $_FILES['competitorLogo']);
					break;
					default:
					echo 'sorry kan deze pagina: ' . $op . ' niet vinden :(';
					break;
				}
			} else {
				switch ($url) {
					case 'home':
					case 'index.php':
						$this->collectReadCompetitions();
						break;
					// case 'view':
					// 	require_once 'view/assets/css/style.css';
					// 	break;
					case 'article':
						include 'view/article.php';
						break;
					case 'admin':
						include 'view/login.php';
						break;
					case 'dashboard':
						include 'view/dashboard.php';
						break;
					case 'nieuwe-deelnemers':
						include 'view/competitors.php';
					break;
					case 'nieuwe-wedstrijden':
						include 'view/addContest.php';
						break;
					case 'nieuwe-wedstrijden-competitors':
						$this->collectReadCompetitors($_REQUEST['contestTitle'], $_REQUEST['contestGame'], $_REQUEST['contestDescription'], $_REQUEST['contestAmount'], $_REQUEST['contestTime'], $_REQUEST['contestDate']);
						break;
					case 'overview-wedstrijden':
						$this->collectAllGames();
						break;
					case 'gearchiveerde-wedstrijden':
						$this->collectArchivedGames();
						break;
					default:
						echo 'sorry kann deze pagina: ' . $url . ' niet vinden :(';
						break;
				}
			}
		} catch (ValidationException $e) {
				$errors = $e->getErrors();
		}

	}

	public function collectHomePage() {
		$competitions = $this->ContactsLogic->readCompetition();
		include 'view/home.php';
	}

	public function collectCreateCompetitor($name, $logo) {
		session_start();
		if(empty($name) || empty($logo)) {
			$_SESSION['warning'] = 'missende gegevens binnengekregen controleer het formulier en proebeer het opnieuw';
			header('Location: nieuwe-deelnemers');
		} else {
			$uploadLogo = $this->ContactsLogic->uploadFile($logo);
			if($uploadLogo['upload'] == 'false') {
				$_SESSION['warning'] = $uploadLogo['message'];
				header('Location: nieuwe-deelnemers');
			} else {
				$competitor = $this->ContactsLogic->createCompetitor($name, $uploadLogo['message']);
				$id = intval($competitor);
				if($id >= 1) {
					$_SESSION['warning'] = 'deelnemer is aangemaakt';
					header('Location: nieuwe-deelnemers');
				} else {
					$_SESSION['warning'] = 'deelnemer is niet aangemaakt proebeer het opnieuw';
					header('Location: nieuwe-deelnemers');
				}
			}
		}
	}

	public function collectReadCompetitions() {
		$competitions = $this->ContactsLogic->readCompetition();
		require_once 'view/home.php';
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

	public function collectDeleteGame($id){
		$message = $this->ContactsLogic->archiveGame($id);
		$this->collectAllGames($message);
	}

	public function collectUndoDelete($id) {
		$message = $this->ContactsLogic->undoDelete($id);
		$this->collectAllGames($message);
	}

	public function collectUndoDeleteArchive($id) {
		$message = $this->ContactsLogic->undoDelete($id);
		$this->collectArchivedGames($message);
	}

	public function __destruct(){

	}

	public function collectAllGames($message = null) {
		$overview = $this->ContactsLogic->fetchAllGames($message);
		include 'view/overviewGames.php';
	}
	public function collectEditGameForm($id) {
		$edit = $this->ContactsLogic->editGameForm($id);
		require_once 'view/editContest.php';
	}
	public function collectEditGame($id, $title, $game, $competitorsA, $competitorsB, $time, $date) {
		$message = $this->ContactsLogic->editGame($id, $title, $game, $competitorsA, $competitorsB, $time, $date);
		$this->collectAllGames($message);
	}

	public function collectArchivedGames($message = null) {
		$overview = $this->ContactsLogic->fetchArchivedGames($message);
		include 'view/overviewArchivedGames.php';
	}
}

?>
