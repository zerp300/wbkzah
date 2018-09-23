<?php 
include ('../page/top.php');

echo $_SERVER['REQUEST_URI'];
?>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Stock page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="row justify-content-center">
    <table class="table table-dark table-striped table-sm col-7">
            <thead>
                <tr>
                    <th scope="col"> Number</th>
                    <th scope="col"> Produits</th>
                    <th scope="col"> Quantite</th>
                    <th scope="col"> Unite </th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <th>peinture verte</th>
                    <th>50</th>
                    <th> Litre</th>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <th>peinture verte</th>
                    <th>50</th>
                    <th> Litre</th>
                </tr>
            </tbody>
            </table>
    </div>
    
</body>
</html>