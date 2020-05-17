<?php

if($_SESSION['sesionId'] !== '83523489765735412414') {
    header('Location: admin');
}
echo "<a href='nieuwe-wedstrijden'>nieuwe wedstrijden<a>";
?>
