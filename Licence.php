<?php

class Licence
{
    private $numero, $annee;
    private $leClub;
    private $laCategorie; // catégorie du licencié
    private $lePratiquant; // pratiquant licencié

    public function __construct($p_numero, $p_annee, $p_leClub, $p_laCategorie, $p_lePratiquant)
    {
        $this->numero = $p_numero;
        $this->annee = $p_annee;
        $this->leClub = $p_leClub;
        $this->laCategorie = $p_laCategorie;
        $this->lePratiquant = $p_lePratiquant;
    }

    public function getCategorie()
    {
        return $this->laCategorie;
    }

    public function getDescription()
    {
        return $this->numero . " " . $this->lePratiquant->getNom() . " " . $this->lePratiquant->getPrenom();
    }
    
    public function estActive(){
        return $this->annee == date("Y") ? true : false;
    }
}

?>
