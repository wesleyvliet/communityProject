<?php
require_once 'view/header.php'; 

echo '<a href="create-article">Nieuw artikel</a> ';
echo '<a href="overview-archived-articles">gearchiveerde artikelen</a><br>';
echo $articles;

require_once 'view/footer.php';
?>