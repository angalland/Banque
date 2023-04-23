<?php

class Comptes {

    // Arguments

    private string $_libelle;
    private int $_soldeIni;
    private string $_devise;
    private Titulaire $_titulaire;
    private int $_solde;

    // Constructeurs

    public function __construct(string $libelle, int $soldeIni, string $devise, Titulaire $titulaire ){
        $this->_libelle = $libelle;
        $this->_soldeIni = $soldeIni;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        $titulaire->addCompte($this);
        $this->_solde = $this->_soldeIni;
        }

    // Getter et Setter

    public function getLibelle() : string 
    {
      return $this->_libelle ;
    }

    public function setlibelle($libelle) : string
    { 
      return $this->_libelle = $libelle;
    }

    public function getSoldeIni() : int 
    { 
        return $this->_soldeIni;
    }

    public function setSoldeIni($soldeIni) : int 
    {
       return $this->_soldeIni = $soldeIni;
        
    }

    public function getDevise() : string 
    { 
        return $this->_devise;
    }

    public function setDevise($devise) : string 
    { 
       return $this->_devise = $devise;
        
    }

    public function getTitulaire() : Titulaire 
    { 
        return $this->_titulaire;
    }

    public function setTitulaire($titulaire) : Titulaire
    {
     return  $this->_titulaire = $titulaire;
    }
    
    public function getSolde() : int
    { 
        return $this->_solde;
    }

    public function setSolde($solde) : int
    {
     return  $this->_solde = $solde;
    }

    
    // toString

    public function __toString() : string 
    { 
    return $this->_libelle;
    } 

    // Crediter un compte

    public function crediterCompte($crediter) : int
    {
     return $this->_solde += $crediter;
    }

    // Debiter un compte

    public function debiterCompte($debiter) :int 
    { 
       return $this->_solde -= $debiter; 
    }

    // Virement entre compte

    public function virement(Comptes $compte, int $montant) 
    {
        $this->debiterCompte($montant);
        $compte->crediterCompte($montant);
    }

    // Info Compte

    public function infoComptes() {
         echo "</br> Le titulaire ".$this->_titulaire
             ." possede : un "
             .$this
             ." avec un solde initiale de "
             .$this->_soldeIni." ".$this->_devise
             ." et un solde en cours de "
             .$this->_solde." ".$this->_devise."</br>";
    }
}   
