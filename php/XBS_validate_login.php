<?php
session_start();
if(isset($_GET["logout"]) && $_GET["logout"] == true){
    unset($_SESSION['ID']);
    return;
}
if (isset($_SESSION['ID'])) {
    include_once "Bacon.php";
    $conn = new Bacon();
    echo $conn->getName($_SESSION['ID']);
    //echo $_SESSION['ID'];
    return true;
} else {
    return false;
}
