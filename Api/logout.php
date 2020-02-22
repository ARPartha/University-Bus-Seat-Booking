<?php
	session_start();
	unset($_SESSION['username']);
	unset($_SESSION['bookedbus']);
    unset($_SESSION['bookedseat']);
    unset($_SESSION['bookedseat']);
    unset($_SESSION['Id']);
    session_destroy();
header("Location: ../index.php");
?>