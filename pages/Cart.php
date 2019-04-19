<?php

require '../ADMIN/pages/config.php';
session_start();
$user_course = $_POST['User_course'];
if (!in_array($user_course, $_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"][] = $_POST['User_course'];
}
