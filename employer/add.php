<?php
include ('../connection.php');
$produit='sable';//$_POST['produit'];
$quantite='5000';//$_POST['quantite'];
$unite='piece';//$_POST['unite'];
$date=date('d/m/y h-i-s');



try   // try debut     
{
            if ( isset ($produit) && isset ($quantite))
    {
        // $inserer=$connexion->prepare (" INSERT INTO `stockage`(`id`, `produit`, `nombre`, `date`) VALUES ('',:produit,:quantite,:jour) ");
      
        $inserer=$connexion->prepare("INSERT INTO `stockage`(`id`, `produit`, `quantite`, `unite`, `ajouter le`) VALUES ('',:produit,:quantite,:unite,:ajout)");
      
        $inserer->execute(array(   "produit"=>$produit,
                                   "quantite"=>$quantite,
                                   "unite"=>$unite,
                                   "ajout"=>$date)
                                 );
    
    }
else 
    {
        echo'problem';
    }
        

}// try fin

catch(Exception $e) // debut catch
{
    echo $e->getMessage().'<br>';
    echo $e->getCode();
}// fin catch



?>