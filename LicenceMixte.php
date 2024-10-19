<?php

class LicenceMixte extends Licence
{
    private $laEntreprise; // entreprise liée à la licence mixte

    public function __construct($p_numero, $p_annee, $p_leClub, $p_laCategorie, $p_lePratiquant, $p_laEntreprise)
    {
        parent::__construct($p_numero, $p_annee, $p_leClub, $p_laCategorie, $p_lePratiquant);
        $this->laEntreprise = $p_laEntreprise;
        $this->laEntreprise->ajouterLicenceMixte($this);
    }

    public function getDescription()
    {
        return parent::getDescription() . " " . $this->laEntreprise->getNom();
    }
}

?>
