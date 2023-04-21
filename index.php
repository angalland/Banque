<h1> Banques </h1>

<?php

spl_autoload_register(function($class_name){
    require_once 'Classes/'. $class_name .'.php';
});

$titu1 = new Titulaire ("Anthony", "Galland", "Strasbourg","15-02-1991");
$compte1 = new Comptes ("Livret A", 100, "euros");
echo $titu1."</br>";
echo $compte1;
