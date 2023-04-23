<?php

/*class Compte {

    // Arguments

    private string $_libelle;
    private int $_solde;
    private string $_devise;
    private Titulaire $_titulaire;

    // Constructeurs

    public function __construct(string $libelle, int $solde, string $devise, Titulaire $titulaire ){
        $this->_libelle = $libelle;
        $this->_solde = $solde;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        $titulaire->addCompte($this);
        }

    // Getter et Setter

    public function getLibelle() : string 
    {
      return $this->_libelle ;
    }

    public function setlibelle($libelle) 
    { 
        $this->_libelle = $libelle;
        
    }

    public function getSolde() : int 
    { 
        return $this->_solde;
    }

    public function setSolde($solde)  
    {
        $this->_solde = $solde;
        
    }

    public function getDevise() : string 
    { 
        return $this->_devise;
    }

    public function setDevise($devise)  
    { 
        $this->_devise = $devise;
        
    }

    public function getTitulaire() : Titulaire 
    { 
        return $this->_titulaire;
    }

    public function setTitulaire($titulaire)
    {
        $this->_titulaire = $titulaire;
        
    }

    
    // toString

    public function __toString() : string 
    { 
    return $this->_libelle;
    } 

    // Crediter un compte

    public function crediterCompte($crediter) 
    {
        $this->_solde += $crediter;
    }

    // Debiter un compte

    public function debiterCompte($debiter)  { 
        $this->_solde -= $debiter; 
    }

    public function virement(Compte $compte, int $montant){
        $this->debiterCompte($montant);
        $compte->crediterCompte($montant);
    }

    public function infoComptes() {
        echo "</br>". $this->_titulaire." :</br>".
        $this." ".$this->_solde." ".$this->_devise;
    }
}  */
