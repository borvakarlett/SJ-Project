<?php
require_once('_inc/autoload.php');
session_start();

$auth = new Auth();
$auth->logout();
?>