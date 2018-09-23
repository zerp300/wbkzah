<?php 
include('../function/add.php');

if (isset ($_POST['username']  ) && isset($_POST['password'])             )
{
        $utilisateur=$_POST['username'];
        $mdp=$_POST['password'];
        echo $utilisateur.'<br>';
        echo $mdp.'<br>';
        $a=new Ajouter($connexion);
        $a->add_admin($utilisateur,$mdp);

}
// if (isset ($_POST['employer']) && isset ($_POST['']))
else 
{
    echo " what you doing here";
}


?>