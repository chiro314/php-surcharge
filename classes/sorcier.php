<?php


class sorcier extends personnage
{
    public function __construct()
    {
        // Surcharge de la méthode construct, on éxécute celle de la classe parent puis on redéfini les propriétés qui
        // sont différentes par rapport à la classe mere.
        $this->setNom("Nom par défaut");
        $this->x = 125;
        $this->y = 125;
        $this->vie = 50;

        // Définition des propriétés propre à cette classe
      
    }


} 