<h1> Banques </h1>

<?php

spl_autoload_register(function($class_name){
    require_once 'Classes/'. $class_name .'.php';
});

require_once ('Classes/Compte_1.php');

$titu1 = new Titulaire ("Anthony", "Galland", "Strasbourg","15-02-1991");
$compte1 = new Comptes ("Livret A", 100, "euros", $titu1);
$compte2 = new Comptes ("PEL", 3000, "euros", $titu1);

// var_dump($titu1);

$compte2->debiterCompte(1000);
$compte2->crediterCompte(500);

echo $compte2->getSolde()."<br>";

$compte2->virement($compte1, 100);

echo $compte2->getSolde()."</br>";
echo $compte1->getSolde()."</br>";

$titu1->getInfos()."</br>";
$compte1 ->InfoComptes()."</br>";

echo $compte1->getSoldeIni()."</br>";
echo $compte2->getSoldeIni()."</br>";
echo $compte1->getSolde()."</br>";
echo $compte2->getSolde()."</br>";


echo "</br>";
echo "</br>";

$titu2 = new Titulaire ("Jean-paul", "Berezneff", "Saverne", "05-02-1947");
$compte1 = new Comptes ("Compte courrant", 2000, "euros", $titu2);
$compte4 = new Comptes ("LEP (livret d'epargne populaire)", 1500, "euros", $titu2);

echo $compte1->getSoldeIni();
echo "</br>";
echo $compte4->getSoldeIni();

echo "</br>";
echo "</br>";

$compte1->crediterCompte(1800);
$compte4->debiterCompte(300);

echo $compte1->getSolde();
echo "</br>";
echo $compte4->getSolde();

echo "</br>";
echo "</br>";

$compte1->virement($compte4, 800);
echo $compte1->getSolde();
echo "</br>";
echo $compte4->getSolde();


echo "</br>";
echo "</br>";

$titu2->getInfos();


echo "</br>";
echo "</br>";

$compte1->infoComptes();
$compte4->infoComptes();




