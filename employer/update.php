<?php
include('connection.php');
 
 
 if ( isset($_POST['produit']) && isset($_POST['quantite']) && isset( $_POST['unite'] ) )

    {
        $produit =$_POST['produit'];
        $quantite =$_POST['quantite'];
        $unite =$_POST['unite'];
        $date=date("y-m-d");


    $update=$connexion->prepare("UPDATE stockage SET produit = :produits , quantite = :quantites, unite = :unites, temps=$date ");
       
    $update=$connexion->execute(array(  'produits'=>$produit ,
                                            'quantites'=>$quantite,
                                            'unites'=>$unite
                                         ));
    }  
 else
    
       { 
        $date=date("y-m-d");
        $dates=date('h:i:s');
        echo "ERROR NOT SUPOSE TO BE HERE date: ".$date." heure ".$dates;       
        
        echo '  <meta http-equiv="refresh" content="3;url=/xampp/stock/stock/" > ' ;   
        // header('Location: /xampp/stock/st;ock/');  
       }
    

















?>