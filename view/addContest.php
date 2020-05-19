<?php
if(!empty($message)) {
    echo $message;
}
if(empty($competitors)) {
    echo "<a href='overview-wedstrijden'>Terug</a>";
    echo "<form method='POST' action='nieuwe-wedstrijden-competitors' enctype='multipart/form-data' autocomplete='off'>";
    if(!empty($error)) {
        echo $error . '<br>';
        echo "<input type='text' name='contestTitle' value=" . $title . ">";
        echo "<input type='text' name='contestGame' value=" . $game . ">";
        echo "<input type='text' name='contestDescription' value=" . $description . ">";
        echo "<select name='contestAmount'>";
        echo "<option value='1'>1vs1</option>";
        echo "<option value='2'>2vs2</option>";
        echo "<option value='3'>3vs3</option>";
        echo "<option value='4'>4vs4</option>";
        echo "<option value='5'>5vs5</option>";
        echo "<option value='6'>6vs6</option>";
        echo "<option value='7'>7vs7</option>";
        echo "<option value='8'>8vs8</option>";
        echo "</select>";
        echo "<input type='time' value='" . $time ."' name='contestTime'>";
        echo "<input type='date' value='" . $date ."' name='contestDate'>";
    } else {
        echo "<input type='text' name='contestTitle'>";
        echo "<input type='text' name='contestGame'>";
        echo "<input type='text' name='contestDescription'>";
        echo "<select name='contestAmount'>";
        echo "<option value='1'>1vs1</option>";
        echo "<option value='2'>2vs2</option>";
        echo "<option value='3'>3vs3</option>";
        echo "<option value='4'>4vs4</option>";
        echo "<option value='5'>5vs5</option>";
        echo "<option value='6'>6vs6</option>";
        echo "<option value='7'>7vs7</option>";
        echo "<option value='8'>8vs8</option>";
        echo "</select>";
        echo "<input type='time' name='contestTime'>";
        echo "<input type='date' name='contestDate'>";
    }
    echo "<input type='submit' value='kies deelnemers'>";
    echo "</form>";
} else {
    echo "<form method='POST' action='?op=create' enctype='multipart/form-data' autocomplete='off'>";
    echo "<input style='display:none' type='hidden' name='contestTitle' value=" . $title . ">";
    echo "<input style='display:none' type='hidden' name='contestGame' value=" . $game . ">";
    echo "<input style='display:none' type='hidden' name='contestDescription' value=" . $description . ">";
    echo "<input style='display:none' type='hidden' name='contestTime' value=" . $time . ">";
    echo "<input style='display:none' type='hidden' name='contestDate' value=" . $date . ">";
    for ($i=0; $i < $competitorsAmount; $i++) {
        echo "<select name='contestCompetitorsA[]'>";
        foreach($competitors as $value) {
            echo "<option name='id' value='" . $value['id'] . "'>" . $value['name'] . "</option>";
        }
        echo "</select>";
        echo " vs ";
        echo "<select name='contestCompetitorsB[]'>";
        foreach($competitors as $value) {
            echo var_dump($value);
            echo "<option name='id' value='" . $value['id'] . "'>" . $value['name'] . "</option>";
        }
        echo "</select><br>";
    }
    echo "<input type='submit' value='Verstuur'>";
    echo "</form>";
}
?>
