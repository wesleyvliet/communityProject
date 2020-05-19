<?php
session_start();
if(!empty($_SESSION['warning'])) {
    echo $_SESSION['warning'];
}
echo "<form method='POST' action='?op=add-competitor' enctype='multipart/form-data' autocomplete='off'>";
    echo "<input type='text' name='competitorName'><br>";
    echo "<input type='file' name='competitorLogo'><br>";
echo "<input type='submit' value='Voeg deelnemer toe'>";
echo "</form>";


?>
