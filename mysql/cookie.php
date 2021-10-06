<?php 

function Cookie(){

    $name = "Cookies";
    $value = 183;
    $expiration = time() + (60*60*24*7);

    setcookie($name, $value, $expiration);

}

?>