<?php

class princesse extends personnage
{
    private $saved;

    public function __construct()
    {
        // Surcharge de la méthode construct, on éxécute celle de la classe parent puis on redéfini les propriétés qui
        // sont différentes par rapport à la classe mere.
        
        $this->setNom("Nom par défaut");
        $this->x = 0;
        $this->y = 0;
        $this->vie = 50;
        

        // Définition des propriétés propre à cette classe
        $this->saved = 0;
    }

    public function getSaved(){
        return $this->saved;
    }


} 