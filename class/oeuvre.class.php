<?php

class oeuvre
{
    private $_numeroOeuvre;
    private $_titreOeuvre;

    /**
     * @param $_numeroOeuvre
     * @param $_titreOeuvre
     */
    public function __construct($_numeroOeuvre, $_titreOeuvre)
    {
        $this->_numeroOeuvre = $_numeroOeuvre;
        $this->_titreOeuvre = $_titreOeuvre;
    }

    /**
     * @return mixed
     */
    public function getNumeroOeuvre()
    {
        return $this->_numeroOeuvre;
    }

    /**
     * @param mixed $numeroOeuvre
     */
    public function setNumeroOeuvre($numeroOeuvre)
    {
        $this->_numeroOeuvre = $numeroOeuvre;
    }

    /**
     * @return mixed
     */
    public function getTitreOeuvre()
    {
        return $this->_titreOeuvre;
    }

    /**
     * @param mixed $titreOeuvre
     */
    public function setTitreOeuvre($titreOeuvre)
    {
        $this->_titreOeuvre = $titreOeuvre;
    }

    public function RetourInfo(){
        return ("N° : ". $this->_numeroOeuvre."Titre : ".$this->_titreOeuvre);
    }



}

