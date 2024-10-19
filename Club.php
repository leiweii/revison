<?php

class Club
{
    private $id, $nom, $adresse, $email;
    private $laLigueRegionale; // ligue à laquelle le club appartient
    private $lesLicences = array(); // array contenant les licences du club

    public function __construct($p_id, $p_nom, $p_adresse, $p_email, $p_laLigueRegionale)
    {
        $this->id = $p_id;
        $this->nom = $p_nom;
        $this->adresse = $p_adresse;
        $this->email = $p_email;
        $this->laLigueRegionale = $p_laLigueRegionale;
    }

    public function ajouterLicence($p_laLicence)
    {
        $this->lesLicences[] = $p_laLicence;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getLicencesActives()
    {
        $licencesActives = [];
        foreach ($this->lesLicences as $uneLicence) {
            if ($uneLicence->estActive()) {
                $licencesActives[] = $uneLicence;
            }
        }
        return $licencesActives;
    }
}

?>
