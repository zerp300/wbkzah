<?php include("../css_include.php")?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reception</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

</head>

<body style="background-color:grey;" >
    <div class="container-fluid d-flex justify-content-center " style="margin-top:160px">
     <form  class=" align-self-center w-25" method="POST" action="check_password.php">

                <div class="form-group bg-muted">
                    <label for ="utilisateur"> Utilisateur </label>
                    <input type="text" class="form-control" name="username">

                </div>

                <div class="form-group bg-muted">
                    <label for ="password" >Mot de passe</label>
                    <input class="form-control" type="password" name="password">
                </div>

                <div class="d-inline-flex mt-3 ">
                    <button class=" btn btn-primary justify-content-start" type="submit">Soumettre </button>
                    
                </div>

                <div class=" d-inline-flex mt-3 " style="margin-left:45%">
                <a class=" btn btn-primary justify-content-end " href="ajouter.php" >inscrire</a>
                    
                </div>
             
    </form> 
             
</div>   
<script>
</script>        

    

    
</body>


</html>