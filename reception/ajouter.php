<?php include("../css_include.php")?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reception*Ajouter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
 

</head>

<body style="background-color:grey;" >
    <div class="container-fluid d-flex justify-content-center " style="margin-top:160px">
     <form  class=" align-self-center w-25" method="POST" action="../action/ajouter.php">

                <div class="form-group bg-muted">
                    <label for ="utilisateur"> Utilisateur </label>
                    <input type="text" class="form-control" name="username">

                </div>

                <div class="form-group bg-muted">
                    <label for ="password" >Mot de passe</label>
                    <input class="form-control" type="password" name="password">
                </div>

                <div class="d-inline-flex mt-3 ">
                    <button class=" btn btn-primary" type="submit"> Ajouter utilisateur </button>
                </div>

                <div class=" d-inline-flex mt-3 ml-5">
                    <a class=" ml-5 btn btn-primary " href="index.php" >Retour</a>
                </div>
                <div class="d-flex mt-3 ">
            
     </form>

     
     </div>


     <script>
         var f=new Vue({
             el:"#answer",
             data:
             {
                 load:null,
                 errors:[]

             },
             methods:
             
             {
         
              
             }


         })
    </script>

    

    
</body>


</html>