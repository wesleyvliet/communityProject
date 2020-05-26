<?php
require_once 'view/header.php'; 

echo '<a href="overview-artiekelen">Terug</a>';
echo '<a href="create-article">Nieuw artikel</a><br>';
echo $articles;

require_once 'view/footer.php';
?>