<?php
$nom_produit = "T-shirt femme";
$couleur = "Rouge";
$prix = 15.50;
$disponible = true;
$quantite = 10;
$nb_ajout = 5;
$nb_achat = 5;

?>

<?php
include ("affichage.php");
include ("gestion-produit.php");
?>

<?php

afficher_produit ($nom_produit, $couleur, $prix, $disponible);
 
$quantite = achat ($quantite, $nb_achat);
$disponible = update_dispo($quantite);
 
afficher_produit ($nom_produit, $couleur, $prix, $disponible);
 
$quantite = achat ($quantite, $nb_achat);
$disponible = update_dispo($quantite);
 
afficher_produit ($nom_produit, $couleur, $prix, $disponible);
 
$quantite = restockage($quantite, $nb_ajout);
$disponible = update_dispo($quantite);
 
afficher_produit ($nom_produit, $couleur, $prix, $disponible);


?>
