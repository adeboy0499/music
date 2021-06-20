<?php

require_once "inc/config.php";

$login = new App\Login();

if (isset($_POST['b_Login'])) {
    $login->proses();
    header("location:index.php");
}   

?>