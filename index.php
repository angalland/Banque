<h1> Banques </h1>

<?php

spl_autoload_register(function($class_name){
    require_once 'Classes/'. $class_name .'.php';
});

$titu1 = new Titulaire ("Anthony", "Galland", "Strasbourg","15-02-1991");
$compte1 = new Compte ("Livret A", 100, "euros", $titu1);
$compte2 = new Compte ("PEL", 3000, "euros", $titu1);

// var_dump($titu1);

$compte2->debiterCompte(1000);
$compte2->crediterCompte(500);

echo $compte2->getSolde()."<br>";

$compte2->virement($compte1, 100);

echo $compte2->getSolde()."</br>";
echo $compte1->getSolde()."</br>";

$titu1->getInfos()."</br>";
$compte1 ->InfoComptes()."</br>";





