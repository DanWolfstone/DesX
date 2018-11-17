<?php
session_start();


if ($_POST['logoutbutton'] == true) {
	unset($_SESSION['login']);
} 
	


if ($_SESSION['login'] == false) {
		header("Location: index.php");
}
?>