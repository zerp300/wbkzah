<?php

include('../connection.php');
class bdd
{
    private $_db;

    public function __construct($db)
    {
        $this->setDb($db);
    }
    public function voirTout ($data)
    {   
        $db=$data;        
        
        $a=$this->_db->prepare("SELECT * from $db " );
        $a->execute();
         $data=array();
        
        while ($reponse=$a->fetch(PDO::FETCH_ASSOC))
        {
           
          array_push($data,$reponse);
          $json=json_encode($data);                   
        } 
        
        return $json;
      
    }
    public function getDb()
    {
        return $this->_db;
    }
    public function setDb( $obj)
    {
        $this->_db=$obj;
    }
    
}


$test =new bdd($connexion);

echo $test->voirTout('admin')


?>