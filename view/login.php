<?php
include 'header.php';

echo "<form method='POST' action='?op=login' enctype='multipart/form-data' autocomplete='off'>";
if(!empty($error)) {
    echo $error . '<br>';
    echo "<input type='text' name='userName' value=" . $userName . " >";
    echo "<input type='text' name='userPass'>";
} else {
    echo "<input type='text' name='userName'>";
    echo "<input type='text' name='userPass'>";
}
echo "<input type='submit' value='Login'>";
echo "</form>";

?>


<?php
include 'footer.php';
?>
