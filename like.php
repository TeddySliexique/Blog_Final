<?php

$connec = new PDO('mysql:dbname=Blog', 'root', '0000');
$connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$request = $connec->prepare("UPDATE avis SET Lyke=Lyke+1 ;");
$request->execute();

 ?>
