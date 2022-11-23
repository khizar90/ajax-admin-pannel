<?php
require_once 'function.php';
$selct = new Select();
if(isset($_SESSION["id"])){
    $user = $selct->selectUserById($_SESSION["id"]);
}
else{
    header("Location: login.php");
}