<?php

$con = new mysqli('localhost','admin','root','crudoperation');

if(!$con) {
    die(mysqli_error($con));
} 


?>