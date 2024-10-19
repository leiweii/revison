<?php

require 'LigueRegionale.php';
require 'Club.php';
require 'Categorie.php';
require 'Pratiquant.php';
require 'Licence.php';
require 'LicenceJeune.php';
require 'LicenceMixte.php';
require 'Entreprise.php';

$ligue = new LigueRegionale("1", "AA", "123 Rue", "123@gmail.com");
$club = new Club(1, "Bigorre Bowling Club", "456 Avenue", "zd@email.com", $ligue);

$categorieJeune = new Categorie(1, "U12", 10, 12);
$categorieMixte = new Categorie(2, "Mixte", 18, 99);

$pratiquant1 = new Pratiquant(1, "RINGOT", "Jean", "789 Chemin", "je@gmail.com");
$licenceJeune = new LicenceJeune(14106886, 2024, $club, $categorieJeune, $pratiquant1, "RINGOT", "Fabrice", "05 62 97 45 62");
$pratiquant1->ajouterLicence($licenceJeune);

$pratiquant2 = new Pratiquant(2, "DERUEL", "Manon", "789 Chemin", "mqzzl@gmail.com");
$entreprise = new Entreprise(1, "InfoStore SA", "123 Avenue Entreprise", "qsq@gmail.com");
$licenceMixte = new LicenceMixte(13236458, 2024, $club, $categorieMixte, $pratiquant2, $entreprise);
$pratiquant2->ajouterLicence($licenceMixte);

$club->ajouterLicence($licenceJeune);
$club->ajouterLicence($licenceMixte);


$lesLicences = [$licenceJeune, $licenceMixte];


echo "CLUB : " . $club->getNom() . "<br />";
echo "Date d'édition : " . date("d") . "/". date("Y") . "<br />";
foreach ($lesLicences as $uneLicence) {
    echo $uneLicence->getDescription() . "<br />";
}


// Changer l'année dans ligne 19 ou 24 peuvent tester ils ont activer ou pas
$licencesActives = $club->getLicencesActives();

echo "Licences Actives :<br />";
foreach ($licencesActives as $uneLicence) {
    echo $uneLicence->getDescription() . "<br />";
}
?>
