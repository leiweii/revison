<?php

class Categorie
{
    private $id, $libelle, $ageMin, $ageMax;
    private $lesLicences = array(); // array contenant les licences de la catégorie

    public function __construct($p_id, $p_libelle, $p_ageMin, $p_ageMax)
    {
        $this->id = $p_id;
        $this->libelle = $p_libelle;
        $this->ageMin = $p_ageMin;
        $this->ageMax = $p_ageMax;
    }

    public function ajouterLicence($p_laLicence)
    {
        $this->lesLicences[] = $p_laLicence;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }
}

?>
