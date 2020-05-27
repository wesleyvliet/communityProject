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
					case 'create-wedstrijd':
					$this->collectCreateGame();
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
					case 'create-article':
					$this->collectCreateArticle($_REQUEST['title'], $_REQUEST['categorie'],$_REQUEST['author'],$_REQUEST['text'], $_FILES['preview']);
					break;
					case 'edit-article':
					$this->collectEditArticle($_REQUEST['id']);
					break;
					case 'update-article':
					$this->collectUpdateArticle($_REQUEST['id'],$_REQUEST['title'], $_REQUEST['categorie'],$_REQUEST['author'],$_REQUEST['text'], $_FILES['preview'], $_REQUEST['image']);
					break;
					case 'delete-article':
					$this->collectDeleteArticle($_REQUEST['id']);
					break;
					case 'undo-delete-article':
					$this->collectUndoDeleteArticle($_REQUEST['id']);
					break;
					default:
					echo 'sorry kan deze actie: ' . $op . ' niet vinden :(';
					break;
				}
			} else {
				switch ($url) {
					case 'home':
					case 'index.php':
						$this->collectHomePage();
						break;
					// case 'view':
					// 	require_once 'view/assets/css/style.css';
					// 	break;
					case 'article':
						$this->collectArticle($_REQUEST['id']);
						break;
					case 'merch':
						include 'view/shop.php';
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
					case 'overview-artiekelen':
						$this->collectAllArticles();
						break;
					case 'overview-archived-articles':
						$this->collectAllArchivedArticles();
						break;
					case 'create-article':
						$this->collectArticleForm();
						break;
					case 'overview-wedstrijden':
						$this->collectAllGames();
						break;
					case 'gearchiveerde-wedstrijden':
						$this->collectArchivedGames();
						break;
					case 'about-g69':
						include 'view/aboutPage.php';
						break;
					case 'privacy':
						include 'view/privacy.php';
						break;
					case 'disclaimer':
						include 'view/disclaimer.php';
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
		$articles = $this->ContactsLogic->displayArticles();
		$competitions = $this->ContactsLogic->readCompetition();
		require_once 'view/home.php';
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

	public function collectCreateGame() {
		
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
		$check = $this->ContactsLogic->checkDataGame($id, $title, $game, $competitorsA, $competitorsB, $time, $date);
		if($check['error'] == 'false') {
			$message = $this->ContactsLogic->editGame($id, $title, $game, $competitorsA, $competitorsB, $time, $date);
			$this->collectAllGames($message);
		} else {
			$edit = $this->ContactsLogic->editGameForm($id);
			include 'view/editContest.php';
		}
	}

	public function collectArchivedGames($message = null) {
		$overview = $this->ContactsLogic->fetchArchivedGames($message);
		include 'view/overviewArchivedGames.php';
	}

	public function collectAllArticles($message = null) {
		$articles = $this->ContactsLogic->fetchAllArticles($message);
		require_once 'view/aricleOverview.php';
	}

	public function collectArticleForm() {
		$articleform = $this->ContactsLogic->fetchArticleForm();
		require_once 'view/createArticle.php';
	}

	public function collectCreateArticle($title, $categorie, $author, $text, $image) {
		$message = $this->ContactsLogic->CreateArticle($title, $categorie, $author, $text, $image);	
		$this->collectAllArticles($message);
	}

	public function collectArticle($id) {
		$article = $this->ContactsLogic->readArticle($id);
		require_once 'view/article.php';
	}
	
	public function collectEditArticle($id) {
		$article = $this->ContactsLogic->editArticle($id);
		require_once 'view/editArticle.php';
	}

	public function collectUpdateArticle($id, $title, $categorie, $author, $text, $imageFile, $image) {
		$message = $this->ContactsLogic->updateArticle($id, $title, $categorie, $author, $text, $imageFile, $image);
		$this->collectAllArticles($message);
	}

	public function collectDeleteArticle($id) {
		$message = $this->ContactsLogic->archiveArticle($id);
		$this->collectAllArticles($message);
	}

	public function collectUndoDeleteArticle($id) {
		$message = $this->ContactsLogic->undoDeleteArticle($id);
		$this->collectAllArticles($message);	
	}

	public function collectAllArchivedArticles($message = null) {
		$articles = $this->ContactsLogic->fetchAllArchivedArticles($message);
		require_once 'view/archivedArticleOverview.php';
	}
}

?>
