<?php

include_once "Response.php";

class FailResponse extends Response{

  function __construct($sucess,$message){
    //parent::__construct(true,message);

    $this->sucess = $sucess;
    $this->message = $message;

  }

}

 ?>
