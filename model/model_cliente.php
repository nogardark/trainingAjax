<?php
require_once(Conector.php);
   echo $nombre=$_POST['nombre'];
   echo $apellido=$_POST['apellido'];
   echo $ci=$_POST['ci'];
  echo  $email=$_POST['email'];

$query="INSERT INTO 'cliente'('id_cliente', 'nombre', 'apellido', 'numero_identidad', 'email') 
           VALUES (NULL,$nombre,$apellido,$ci,$email)";
$dataBase = Conector::getInstance();
$dataBase->queryDB($query);
$response = $dataBase->get_query();
echo $response;
?>