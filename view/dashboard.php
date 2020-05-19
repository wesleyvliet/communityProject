<?php
session_name("admin");
session_start();
if($_SESSION['sesionId'] !== '83523489765735412414') {
    header('Location: admin');
}

echo "<a href='overview-wedstrijden'>Wedstrijden<a>";
echo "<a href='nieuwe-deelnemers'>nieuwe deelnemers<a><br>";
?>
