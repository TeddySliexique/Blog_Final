<?php

$message= $_POST['comm'] ;

  $connec = new PDO('mysql:dbname=Blog', 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("INSERT INTO message (datetime, content) VALUES (NOW(), '$message');");
  $request->execute();
 ?>
