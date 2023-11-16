<?php
    try {
    $cnx = new PDO('mysql:host=localhost;dbname=PW01-Netflix;charset=utf8','root', '');
    }
    catch (PDOException $erreur){
        echo $erreur->getMessage();
    }
?>