<?php

// $Nom= $_POST['Nom'] ;
// $Prenom= $_POST['Prenom'] ;
// $Mail= $_POST['Mail'] ;
//
//   include_once "private.php";
//   $request = $connec->prepare("INSERT INTO users (Nom,Prenom,Mail) VALUES ('$Nom','$Prenom','$Mail');");
//   $request->execute();
//
//   $request2 = $connec->prepare("SELECT * FROM users ORDER BY id DESC LIMIT 1");
//   $request2->execute();
//   $MyObj = $request2->fetchAll();
//
//   echo json_encode($MyObj);

include_once "Response.php";
include_once "SucessResponse.php";
include_once "FailResponse.php";

$response = new SucessResponse(true,"Article ok",null);
   json_encode($response);
   echo json_encode($response);



?>
