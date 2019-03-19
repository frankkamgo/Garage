<!DOCTYPE html>
<?php
require './admin/lib/php/admin_liste_include.php';
$cnx = Connexion::getInstance($dsn, $user, $pass);
$client = new accueilDB($cnx);
$liste = $client->getTexteAccueil();
//print 'nom du client ' . $liste[0]->nom_c;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="admin/lib/css/style.css"/>
        <title></title>
    </head>
    <body>
    <hearder>
         <div class="container "> 
            <h1>projet personnel GARAGE </h1>
             <?php
             if(file_exists('./lib/php/p_menu.php')){//pour verifier que le ficher existe
                require './lib/php/p_menu.php';
                
             }
             
             
        ?>
            
               
            </div> 
       
    </hearder>
    </body>
</html>
