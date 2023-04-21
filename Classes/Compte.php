<?php

class Compte {

    // Arguments

    private string $_libelle;
    private int $_soldeIni;
    private string $_devise;
    private Titulaire $_titulaire;

    private int $_crediter = 0;


    // Constructeurs

    public function __construct(string $libelle, int $soldeIni, string $devise, Titulaire $titulaire ){
        $this->_libelle = $libelle;
        $this->_soldeIni = $soldeIni;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        $this->_crediter;
        }

    // Getter et Setter

    public function getLibelle() : string 
    {
      return $this->_libelle ;
    }

    public function setlibelle() : string
    { 
        $this->_libelle = $libelle;
        return $this;
    }

    public function getSoldeIni() : int 
    { 
        return $this->_soldeIni;
    }

    public function setSoldeIni() : int 
    {
        $this->_soldeIni = $soldeIni;
        return $this;
    }

    public function getDevise() : string 
    { 
        return $this->_devise;
    }

    public function setDevise() : string 
    { 
        $this->_devise = $devise;
        return $this;
    }

    public function getTitulaire() : Titulaire 
    { 
        return $this->_titulaire;
    }

    public function setTitulaire() : Titulaire 
    {
        $this->_titulaire = $titulaire;
        return $this;
    }

    public function getCrediter() : int
    { 
        return $this->_crediter;
    }

    public function setCrediter($crediter) : int 
    {
        $this->_crediter = $crediter;
        return $this->_crediter;
    }

    // toString

    public function __toString() : string 
    { 
    return $this->_libelle;
    } 

    // Crediter un compte

    public function crediterCompte() : int 
    {
        $result = $this->_soldeIni + $this->_crediter;
        return $result;
    }

}   
