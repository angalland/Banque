<?php

class Comptes {

    // Arguments

    private string $_libelle;
    private int $_soldeIni;
    private string $_devise;
    private Titulaire $_titulaire;

    // Constructeurs

    public function __construct(string $libelle, int $soldeIni, string $devise, Titulaire $titulaire ){
        $this->_libelle = $libelle;
        $this->_soldeIni = $soldeIni;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
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

    // toString

    public function __toString() : string 
    { 
    return $this->_libelle;
    } 

    public function getInfos(){
        return $this." née le ".$this->getDateNaissance()->format('d/m/Y')." habitant dans la ville de ".$this->getVille()." possede .".$this->Titulaire;
    }

}   
