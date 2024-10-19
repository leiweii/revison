<?php

class Pratiquant
{
    private $id, $nom, $prenom, $adresse, $email;
    private $lesLicences = array(); // array contenant les licences du pratiquant

    public function __construct($p_id, $p_nom, $p_prenom, $p_adresse, $p_email)
    {
        $this->id = $p_id;
        $this->nom = $p_nom;
        $this->prenom = $p_prenom;
        $this->adresse = $p_adresse;
        $this->email = $p_email;
    }

    public function ajouterLicence($p_laLicence)
    {
        $this->lesLicences[] = $p_laLicence;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
}

?>
