<?php
include("../config/db.php");
$logoutGoTo = "../index.php";
if (!isset($_SESSION)) {
    session_start();
}
$_SESSION['username'] = NULL;
$_SESSION['password'] = NULL;
unset($_SESSION['username']);
unset($_SESSION['password']);
if ($logoutGoTo != "") {
    header("Location: $logoutGoTo");
    session_destroy();
    exit;
}

?>