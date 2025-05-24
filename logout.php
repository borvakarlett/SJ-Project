<?php
require_once('_inc/autoload.php');
session_start();

//calls log out method
$auth = new Auth();
$auth->logout();
?>