<?php

if ($_POST){

    $user = $_POST['user'];
    $pass = $_POST['password'];
    $file = $_POST['file'];
    $command = shell_exec("dir | findstr ".$file);


    if ($command){
        echo "Existen estos archivos que contienen el nombre " . $file . " : </br>" . $command;

    } else{
        echo "No hay ningún archivo que contenga ese nombre :(";
    }

}

?>