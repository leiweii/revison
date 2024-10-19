<?php

class LicenceJeune extends Licence
{
    private $nomResp, $prenomResp, $telResp;

    public function __construct($p_numero, $p_annee, $p_leClub, $p_laCategorie, $p_lePratiquant, $p_nomResp, $p_prenomResp, $p_telResp)
    {
        parent::__construct($p_numero, $p_annee, $p_leClub, $p_laCategorie, $p_lePratiquant);
        $this->nomResp = $p_nomResp;
        $this->prenomResp = $p_prenomResp;
        $this->telResp = $p_telResp;
    }

    public function getDescription()
    {
        return parent::getDescription() . " " . $this->nomResp . " " . $this->prenomResp . " " . $this->telResp;
    }
}

?>
