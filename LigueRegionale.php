<?php

class LigueRegionale
{
    private $code, $nom, $adresse, $email;
    private $lesClubs = array(); // array contenant les clubs de la ligue

    public function __construct($p_code, $p_nom, $p_adresse, $p_email)
    {
        $this->code = $p_code;
        $this->nom = $p_nom;
        $this->adresse = $p_adresse;
        $this->email = $p_email;
    }

    public function ajouterClub($p_leClub)
    {
        $this->lesClubs[] = $p_leClub;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getLesClubs()
    {
        return $this->lesClubs;
    }
}

?>
