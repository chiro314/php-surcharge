<?php
//http://localhost/exo/J11-EXO-OBJET/4-Exercices-PHP-OOP-Surcharge-master/index.php

// J'inclue mes classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon
require "classes/personnage.php";
require "classes/princesse.php";
require "classes/dragon.php";
require "classes/sorcier.php";

// Creation d'une instance de la classe personnage
$personnage1 = new personnage();


// Creation d'une instance de la classe dragon
$dragon1 = new dragon();
$dragon1->setNom("");

//CREATION D UNE INSTANCE DE LA CLASSE PRINCESSE
$princesse1 = new princesse();

//CREATION D UNE INSTANCE DE LA CLASSE SOCIERS
$sorcier1 = new sorcier();

//AFFICHER LES NOUVELLES INSTANCES

echo "PERSONNAGE :";
echo "<br> id : ".$personnage1->getId();
echo "<br> nom : ".$personnage1->getNom();
echo "<br> vie : ".$personnage1->getVie();
echo "<br> x : ".$personnage1->x;
echo "<br> y : ".$personnage1->y;

echo "<br><br>DRAGON :";
echo "<br> id : ".$dragon1->getId();
echo "<br> nom : ".$dragon1->getNom();
echo "<br> vie : ".$dragon1->getVie();
echo "<br> x : ".$dragon1->x;
echo "<br> y : ".$dragon1->y;


echo "<br><br>PRINCESSE :";
echo "<br> id : ".$princesse1->getId();
echo "<br> nom : ".$princesse1->getNom();
echo "<br> vie : ".$princesse1->getVie();
echo "<br> x : ".$princesse1->x;
echo "<br> y : ".$princesse1->y;
echo "<br><br> saved : ".$princesse1->getSaved();

echo "<br><br>SORCIER :";
echo "<br> id : ".$sorcier1->getId();
echo "<br> nom : ".$sorcier1->getNom();
echo "<br> vie : ".$sorcier1->getVie();
echo "<br> x : ".$sorcier1->x;
echo "<br> y : ".$sorcier1->y;



