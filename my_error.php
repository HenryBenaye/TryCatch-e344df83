<?php
function countDown($number) {
    if($number > 1 && $number < 10) {
        throw new Exception("Waarde moet tussen 1 en 10 zitten");

    }
    return true;
}

try {
    countDown(2);
    echo'Dit getal is tussen 1 en 10';
}

catch(Exception $number) {
    echo'Er is iets fouts gegaan!!';
}

?>