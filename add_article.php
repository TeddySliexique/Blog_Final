<?php

include_once "private2.php";

$request = $connec->prepare("SELECT * FROM Article ORDER BY id ASC LIMIT 3 ;");
$request->execute();
$MyObj = $request->fetchAll();

echo json_encode($MyObj);

?>
