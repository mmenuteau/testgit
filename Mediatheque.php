<?php

include('class/OeuvreEnVente.class.php');
include ('class/catalogue.class.php');

$OeuvreUne  = new OeuvreEnVente(1, 'Titanic', 15);
$OeuvreDeux  = new OeuvreEnVente(2, 'La joconde', 15);
$OeuvreTrois = new OeuvreEnVente(3, 'Concorde', 15);
$OeuvreQuatre  = new OeuvreEnVente(4, 'Sherlock', 15);
$OeuvreCinq  = new OeuvreEnVente(5, 'Tintin', 15);


$unCatalogue = new catalogue ();
$unCatalogue->ajouter($OeuvreUne);
$unCatalogue->ajouter($OeuvreDeux);
$unCatalogue-> ajouter ($OeuvreTrois);
$unCatalogue->ajouter($OeuvreQuatre);
$unCatalogue->ajouter($OeuvreCinq);

echo "<p>----------Mission 1-------------</p>";
echo "<p>---------affiche les oeuvres qui sont dans le catalogue qui sont libre------ </p>";
foreach ($unCatalogue->listeLivre() as $oeuvre){
    echo "<p>". $oeuvre->getTitreOeuvre()."</p>";
}

echo "<p>----------affiche le titre de l'oeuvre et son etat passé en paramètre ----------</p>";
echo $unCatalogue->consulter($OeuvreUne);
echo "<br>";
echo $unCatalogue->consulter($OeuvreQuatre);

echo "<p>----------retire une oeuvre et vérifie qu'elle est bien retirer donc n'est plus dans le catalogue ------------</p>";

echo $unCatalogue->retirer($OeuvreQuatre);
foreach ($unCatalogue->listeLivre() as $oeuvre){
    echo "<p>". $oeuvre->getTitreOeuvre()."</p>";
}

echo "<p>-----------réserve un livre et affiche le titre et l'état du livre (R)  ----------</p>";
echo $unCatalogue->reserver($OeuvreCinq);
echo "<br>";
echo $unCatalogue->consulter($OeuvreCinq);

echo "<p>----------- réserve un livre avec son index affiche les livres qui sont encore libre --------------</p>";
echo $unCatalogue->reserverIndex(0);
echo $unCatalogue->consulter($OeuvreUne);


echo "<p>--------affiche la liste des livres qui sont libres après avoir reservé et retirer -----------</p>";

foreach ($unCatalogue->listeLivre() as $oeuvre){
    echo '<p>'.$oeuvre-> getTitreoeuvre()."<p>";
}

echo "<p>---------Mission 2 (étape 1) : reserver un livre uniquement si elle est libre ----------</p>";
if ($unCatalogue->reserver($OeuvreUne) == false){
    echo "déja réservé";
}














