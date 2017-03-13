<html> 
    <head> 
            <meta charset="UTF-8"> 
        <title>Desplegant una aplicació PHP sobre Heroku</title> 
    </head> 
    <body> 
       <?php 
echo 'Afegint cookies <br>';
echo 'Sóc el desenvolupador guillem martinez';
setcookie("nom","Jaume Pons", time()+3600, "/","",0);
setcookie("edat","20", time()+3600, "/","",0);
setcookie("cicle","Daw", time()+3600, "/","",0);
setcookie("nom","2n", time()+3600, "/","",0);
setcookie("any","20162017", time()+3600, "/","",0);


?>

    </body>    
</html> 