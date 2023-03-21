<?php

//,   .-'"'=;_  ,
//              |\.'-~`-.`-`;/|
//              \.` '.'~-.` './
//              (\`,__=-'__,'/)
//           _.-'-.( d\_/b ).-'-._
//         /'.-'   ' .---. '   '-.`\
//       /'  .' (=    (_)    =) '.  `\
//      /'  .',  `-.__.-.__.-'  ,'.  `\
//     (     .'.   V       V  ; '.     )
//     (    |::  `-,__.-.__,-'  ::|    )
//     |   /|`:.               .:'|\   |
//     |  / | `:.              :' |`\  |
//     | |  (  :.             .:  )  | |
//     | |   ( `:.            :' )   | |
//     | |    \ :.           .: /    | |
//     | |     \`:.         .:'/     | |
//     ) (      `\`:.     .:'/'      ) (
//     (  `)_     ) `:._.:' (     _(`  )
//     \  ' _)  .'           `.  (_ `  /
//\  '_) /   .'"```"'.   \ (_`  /
//       `'"`  \  (         )  /  `"'`
//   ___        `.`.       .'.'        ___
// .`   ``"""'''--`_)     (_'--'''"""``   `.
//(_(_(___...--'"'`         `'"'--...___)_)_)

require('../class/verification.php');
$verif = new Verification();

// ---------------------------------- Vérifier le nom --------------------------------
$verif -> Texte($_POST['nom'], 'nom');


//--------------------------------  Vérifier le prénom --------------------------------
$verif -> Texte($_POST['prénom'], 'prénom');


//--------------------------------  Vérifier l'email et vérifier en BDD si il existe --------------------------------
$verif -> Email($_POST['email']);

//  -------------------------------- Vérifier le téléphone --------------------------------

$verif -> Phone($_POST['téléphone']);
// -------------------------------- Vérifier le mot de passe --------------------------------

$verif -> Password($_POST['password'],$_POST['password2']);
// -------------------------------- Vérifier le 2e mot de passe est bien le même que le premier --------------------------------


echo $verif -> getIndexError(0);



