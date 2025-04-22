<?php
session_start();

function isAdminLoggedIn() {
    return isset($_SESSION['username']);
}
?>