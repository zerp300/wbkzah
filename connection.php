<?php 
 $host_name="127.0.0.1";
 $database_name="geci";
 $serveur_nom="root";
 $serveur_psw="";

 try
 {

    $connexion=new PDO ("mysql:host=".$host_name.";dbname=".$database_name, $serveur_nom, $serveur_psw);
    
     
 }
 catch (Exception $e)
 {
    echo "Error message : ".$e->getMessage();
    echo "<br> Error number :".$e->getCode();
 }
 ?>