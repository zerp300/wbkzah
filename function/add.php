<?php 
include('../connection.php');

class Ajouter
{
    private $_db;
     public function __construct ($db)
     {
        $this->setDb($db);
     }

     public function add_admin($utilisateur,$mdp)
     {
        try{
            $a=$this->_db->prepare("INSERT INTO admin (id,utilisateur,pswd) VALUES (null,:utilisateur,:mdp)");
            $password=$this->hasher($mdp);
            echo $password;
            $a->execute(array(
                           "utilisateur"=>$utilisateur,
                           "mdp"=>$password
                           ));
        }
        catch(Exception $e)
        {
            echo'Error : '.$e->getMessage();
            echo'<br> code : '.$e->getCode();
        }
     }
     public function add_employer($employer,$cTYpe,$debut_date,$fin_date)
     {  

        try{
                $a=$this->_db->prepare("INSERT INTO employer(`id`, `employer`, `contract type`, `debut`, `fin`) VALUES (null,:employer,:contract type,:debut,:fin)");
                $a->execute(array(
                                "employer"=>$employer,
                                "contract type"=>$cType,
                                "debut"=>$debut_date,
                                "fin"=>$fin_date
                                ));                  
                
            }
                catch(Exception $e)
                {
                    echo'Error : '.$e->getMessage();
                    echo'<br> code : '.$e->getCode();
                }
                
     }
     function hasher ($password)
    {   $htmlsp=htmlspecialchars($password);
        $encode=base64_encode($htmlsp);
        $hash=password_hash($encode,PASSWORD_DEFAULT);
        return $hash;
    }

     public function setDb($db)
     {
         $this->_db=$db;
     }
     public function getDb()
     {
         return $this->_db;
     }
}



?>