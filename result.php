<?php
    $array=[];
    function Verif( $name,$min,$max,$message,$array ){
        if (strlen($name) < $min || strlen($_GET["nom"]) > $max){
            array_push($array, $message);
            return $array;
        }
        else{
            array_push($array, $name);
            return $array;
        }
    }

echo(Verif($_GET["nom"], 3, 10, "Nom invalide", $array)[0]);
