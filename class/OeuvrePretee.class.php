<?php

class OeuvrePretee extends oeuvre
{
    private $_nomProprietaire;

    public function __construct($_numeroOeuvre, $_titreOeuvre, $_unNom)
    {
        parent::__construct($_numeroOeuvre, $_titreOeuvre);
        $this->_nomProprietaire =$_unNom;
    }
}