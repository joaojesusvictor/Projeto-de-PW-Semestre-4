<?php
if(!isset($_SESSION)) session_start();
unset(
$_SESSION['cd_cliente'],
$_SESSION['nome']
);
echo "<script lang='javascript'>alert('Até mais!')</script>";
header('Location: index.php');
?>