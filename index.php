<h1> Banques </h1>

<?php

spl_autoload_register(function($class_name){
    require_once 'Classes/'. $class_name .'.php';
});

$titu1 = new Titulaire ("Anthony", "Galland", "Strasbourg","15-02-1991");
$compte1 = new Comptes ("Livret A", 100, "euros", $titu1);

// echo $titu1."</br>";
// echo $compte1;

// var_dump($compte1);

// echo $titu1->getInfos();

// echo $titu1->getPrenom()." née le ".$titu1->getDateNaissance()->format("d-m-Y");

// var_dump($titu1);
echo "</br></br>";
// var_dump($compte1);

// echo $titu1->getInfos();

echo $compte1->getInfos();