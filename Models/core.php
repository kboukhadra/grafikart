<?php
$VALEUR_hote='localhost';
$VALEUR_port='80';
$VALEUR_nom_bd='tuto';
$VALEUR_user='root';
$VALEUR_mot_de_passe='kh12alid';
//$connexion = new PDO('mysql:host='.$VALEUR_hote.';port='.$VALEUR_port.';dbname='.$VALEUR_nom_bd, $VALEUR_user, $VALEUR_mot_de_passe);

// connexion à la base de donnees 
try {
    $connexion = new PDO('mysql:host='.$VALEUR_hote.';port='.$VALEUR_port.';dbname='.$VALEUR_nom_bd, $VALEUR_user, $VALEUR_mot_de_passe);

    // afficher les erreurs 
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    echo 'c\'est ok';
} catch (PDOException $exc) {
    echo 'Erreur '.$exc->getMessage()."<br/>";
}

include('model/Model.php');




