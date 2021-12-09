<?php

include('class/OeuvreEnVente.class.php');
include ('class/catalogue.class.php');
include ('class/catalogueBis.class.php');

$OeuvreUne  = new OeuvreEnVente(1, 'Titanic', 15);
$OeuvreDeux  = new OeuvreEnVente(2, 'La joconde', 15);
$OeuvreTrois = new OeuvreEnVente(3, 'Concorde', 15);
$OeuvreQuatre  = new OeuvreEnVente(4, 'Sherlock', 15);
$OeuvreCinq  = new OeuvreEnVente(5, 'Tintin', 15);
$OeuvreSix  = new oeuvre(6, 'Spirou');
$OeuvreSept  = new oeuvre(7, 'Astérix');
$OeuvreHuit  = new oeuvre(8, 'Obélix');

$unCatalogue = new catalogueBis();
$unCatalogue->ajouter($OeuvreUne);
$unCatalogue->ajouter($OeuvreDeux);
$unCatalogue-> ajouter ($OeuvreTrois);
$unCatalogue->ajouter($OeuvreQuatre);
$unCatalogue->ajouter($OeuvreCinq);
$unCatalogue->ajouter($OeuvreSix);
$unCatalogue->ajouter($OeuvreSept);
$unCatalogue->ajouter($OeuvreHuit);



foreach ($lesOeuvres as $uneOeuvre)
{
    if(get_class($uneOeuvre)=="Oeuvre"){
        echo $uneOeuvre->RetourInfo()."<br>";

    }
    else if (get_class($uneOeuvre=="OeuvreEnVente")){
        echo $uneOeuvre->RetourInfo()."<br>";
    }
}
