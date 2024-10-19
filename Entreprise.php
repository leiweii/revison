<?php

class Entreprise
{
    private $id, $nom, $adresse, $email;
    private $lesLicencesMixtes; // array contenant les licences mixtes de l’entreprise

    public function __construct($p_id, $p_nom, $p_adresse, $p_email)
    {
        $this->id = $p_id;
        $this->nom = $p_nom;
        $this->adresse = $p_adresse;
        $this->email = $p_email;
    }

    public function ajouterLicenceMixte($p_laLicence)
    {
        $this->lesLicencesMixtes[] = $p_laLicence;
    }

    public function getNom()
    {
        return $this->nom;
    }
}

?>
