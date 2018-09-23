<?php
session_start();
require('../connection.php');
$utilisateur=$_POST['username'];
$motdepasse=$_POST["password"];


if (isset ($utilisateur) && isset ($motdepasse) )
    {
       echo $utilisateur."   ".$motdepasse."  <br> ";
       $action=$connexion->prepare('SELECT utilisateur,pswd FROM admin WHERE utilisateur=:user AND pswd=:mdp ');
       $action->execute(array(
                          'user'=>$utilisateur,
                          'mdp'=>$motdepasse
                             )                        
                         );
        
        $result=$action->fetch();
        if ($result)
        {
            echo'ok';
            $_SESSION['USER']=$result['utilisateur'];
            
            header('Location: /xampp/stock/stock/');
        }
        else
        {
            echo'retry';
            
        }
        // echo $result['utilisateur'].'       '.$result['pswd'];
       
      
    }
else 
{
    echo " you have nothing to do here ";


}

?>