<?php

class Compte {

    // Arguments

    private string $_libelle;
    private int $_soldeIni;
    private string $_devise;
    private Titulaire $_titulaire;

    private int $_crediter = 0;
    private int $_debiter = 0;
    private int $_soldeEnCour = 0;


    // Constructeurs

    public function __construct(string $libelle, int $soldeIni, string $devise, Titulaire $titulaire ){
        $this->_libelle = $libelle;
        $this->_soldeIni = $soldeIni;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        $this->_crediter;
        $this->_debiter;
        $this->_soldeEnCour = $soldeIni;
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

    public function getDebiter() : int
    { 
        return $this->_debiter;
    }

    public function setDebiter($debiter) : int 
    {
        $this->_debiter = $debiter;
        return $this->_debiter;
    }

    public function getSoldeEnCour() : int
    { 
        return $this->_soldeEnCour;
    }

    public function setSoldeEnCour($soldeEnCour) : int 
    {
        $this->_soldeEnCour = $soldeEnCour;
        return $this->_soldeEnCour;
    }

    // toString

    public function __toString() : string 
    { 
    return $this->_libelle;
    } 

    // Crediter un compte

    public function crediterCompte() : int 
    {
        $this->_soldeEnCour = $this->_soldeEnCour + $this->_crediter;
        return $this->_soldeEnCour;
    }

    // Debiter un compte

    public function debiterCompte() : int 
    {
        $_soldeEnCour = $this->_soldeEnCour - $this->_debiter;
        return $this->_soldeEnCour;
    }
}   
