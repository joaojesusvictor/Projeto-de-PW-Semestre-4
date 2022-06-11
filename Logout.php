<?php
    if(!isset($_SESSION)) session_start();
    unset(
		$_SESSION['codigo'],
		$_SESSION['nome']
    );
    $_SESSION['error'] = "Até mais!";
    header('Location: index.php');
?>