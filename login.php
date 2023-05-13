<?php
//start session
session_start();

include_once('User.php');

$user = new User();

if (isset($_POST['login'])) {
	$username = $user->escape_string($_POST['username']);
	$pass_word = $user->escape_string($_POST['pass_word']);

	$auth = $user->check_login($username, $pass_word);

	if (!$auth) {
		$_SESSION['message'] = 'Invalid username or password';
		header('location:index.php');
	} else {
		$_SESSION['user'] = $auth;
		header('location:home.php');
	}
} else {
	$_SESSION['message'] = 'You need to login first';
	header('location:index.php');
}
