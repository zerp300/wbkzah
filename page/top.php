<?php
session_start();
$user=$_SESSION['USER'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/vue.js"></script>
    <script type="text/javascript" src="../js/axio.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
    
       
    </style>
</head>
<header>

    <div class="container-fluid-sm bg-primary " style="" >   

          <div class="d-inline-flex w-50 justify-content-end ">
                    <h1 class="text-muted"> GECI </h1>
          </div>  

          <div class="d-inline-flex w-25 pl-5 float-right justify-content-center " id="utilisateur_nom">
              NOM : {{user }}

          </div>

          <nav class="nav  justify-content-center bg-dark">
                
                <a class="nav-link text-light mr-5 " href="#"> ACCUEIL   </a>
                <a class="nav-link text-light mr-5 " href="/xampp/stock/stock/"> STOCK   </a>
                <a class="nav-link text-light mr-5 "  href="/xampp/stock/employer/">EMPLOYER </a>
                <a class="nav-link text-light mr-5 " href="#">INFO </a>
                
          </nav>   

    </div>   

 
<script>
    var use=new Vue({
        el:'#utilisateur_nom',
        data:{
            user:'<?php echo $user?>',
            
            }

    })

</script>
    
</header>
</html>