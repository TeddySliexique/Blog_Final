<?php

include_once "Response.php";

class SucessResponse extends Response{

  public $object;

  function __construct($sucess,$message,$object){

    parent::__construct($success, $message);
    $this->object = $object;

  }

}

 ?>
