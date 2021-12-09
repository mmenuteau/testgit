<?php

include_once ('OeuvreEnVente.class.php');
include_once ('oeuvre.class.php');

class catalogue
{
    private  $_lesOeuvres;

    /**
     * @param $_lesOeuvres
     */
    public function __construct()
    {
        $this->_lesOeuvres = array();
    }

    /*
     * vérifie existence dans le catalogue de l'oeuvre passé en paramètre
     *retourne le titre et l'état de l'oeuvre
     */
    public function consulter(OeuvreEnVente $uneOeuvre)
    {
        $recup = "Oeuvre non trouvé";
        if(in_array($uneOeuvre,$this->_lesOeuvres))
        {
            $recup = $uneOeuvre->getTitreOeuvre(). "-" .$uneOeuvre->getEtat();
        }
        return $recup;
    }

    /*
     * ajoute l'oeuvre passé en paramètre au catalogue
     */
    public function ajouter (OeuvreEnVente $uneOeuvre)
    {
        $this->_lesOeuvres[]=$uneOeuvre;
    }

    /*
     * retire l'oeuvre passé en paramètre au catalogue
     */
    public function retirer (OeuvreEnVente $uneOeuvre)
    {
        unset($this->_lesOeuvres[array_search($uneOeuvre, $this->_lesOeuvres)]);
    }

    /*
     * vérifie l'existence dans le catalogue de l'oeuvre passé en paramètre,
     * si l'oeuvre n'existe pas, retourne faux
     * sinon affecte la valeur R à son état et retourne vrai
     */
    public function reserver (OeuvreEnVente $Oeuvre)
    {
        $retour= false;
        if(in_array($Oeuvre,$this->_lesOeuvres) && ($Oeuvre->getEtat()=='L'))
        {
            $Oeuvre->setReserve();
            $retour = true;
        }

        return $retour;
    }

    public function liberer (OeuvreEnVente  $uneOeuvre)
    {
        $retour= false;
        if(in_array($uneOeuvre,$this->_lesOeuvres) && ($uneOeuvre->getEtat()=='R'))
        {
            $Oeuvre->setReserve();
            $retour = true;
        }

        return $retour;
    }

    /*
     * affete la valeur R à l'état de l'oeuvre dont l'index est passé
     * en paramètre
     */
    public function reserverIndex ($i)
    {
        $retour = false;
        if ($i>=0 && $i<= (count($this->_lesOeuvres)-1))
        {
            $this->_lesOeuvres[$i]->setReserve();
            $retour = true;
        }
        return $retour;
    }


    /*
     * retourne la liste des oeuvres en vente dont l'état est égal à L
     */
    public function listeLivre()
    {
        $ListeOeuvre = array();
        foreach ($this->_lesOeuvres as $uneOeuvre)
        {
            $trouve = array_search($uneOeuvre,$this->_lesOeuvres);
            if ($trouve>=0)
            {
                if ($uneOeuvre->getEtat($uneOeuvre) == 'L')
                {
                    $ListeOeuvre[]= $this->_lesOeuvres[$trouve];
                }
            }
        }
        return $ListeOeuvre;
    }
}