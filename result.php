<?php
    require ('database.php');
    require ('verification.php');
    $array=[];

    $db=new Database();
    $db->connectDb();

    $verif = new Verification();
    $verif->Email($_GET['email']);

    echo $verif -> getIndexError(0);


//echo(Verif($_GET["nom"], 3, 10, "Nom invalide", $array)[0]);
