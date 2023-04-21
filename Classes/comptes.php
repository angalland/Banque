<?php

class Comptes {

    // Arguments

    private string $_libelle;
    private int $_soldeIni;
    private string $_devise;
    private Titulaire $_titulaire;

    // Constructeurs

    public function __construct(string $libelle, int $soldeIni, string $devise ){
        $this->_libelle = $libelle;
        $this->_soldeIni = $soldeIni;
        $this->_devise = $devise;
        }

    // Getter et Setter

    public function getLibelle(){
        return $this->_libelle;
    }

    public function setlibelle(){
        $this->_libelle = $libelle;
        return $this;
    }

    public function getSoldeIni(){
        return $this->_soldeIni;
    }

    public function setSoldeIni(){
        $this->_soldeIni = $soldeIni;
        return $this;
    }

    public function getDevise(){
        return $this->_devise;
    }

    public function setDevise(){
        $this->_devise = $devise;
        return $this;
    }

    // toString

    public function __toString(){
    return $this->_libelle;
    } 
}   