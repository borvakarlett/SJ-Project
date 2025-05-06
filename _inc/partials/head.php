<?php
    //starts session
    session_start();
    //loads all the classes with functions
    require_once('_inc/autoload.php');
    //creats object for authentication
    $auth = new Auth();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aru's Film Blog</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<!--checks if admin is logged in and applies css based on that-->
<?php if($auth->isAdminLoggedIn()): ?>
    <link rel="stylesheet" href="css/admin_style.css">
<?php else: ?>
    <link rel="stylesheet" href="css/templatemo_style.css">
<?php endif; ?>

<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
</head>