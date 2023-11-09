<?php
 $host="localhost";
 $db="stage";
 $username="root";
 $password="";

 try{
 $conn= new mysqli($host, $username ,$password ,$db);
 if($conn->connect_error){ 
  throw new Exception("erreur de connexion au base de donné : " .$conn->connect_error);
}
  //echo "connexion à la base reussit"; 

 }catch(Exception $e){
    echo $e->getMessage();
 }

 


?>