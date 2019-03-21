<?php

$connec = new PDO('mysql:dbname=Blog', 'root', '0000');
$connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$request = $connec->prepare("UPDATE avis SET Dislike=Dislike+1 ;");
$request->execute();

$request2 = $connec->prepare("SELECT Dislike FROM avis;");
$request2->execute();
$MyObj = $request2->fetch();

echo json_encode($MyObj);
?>
