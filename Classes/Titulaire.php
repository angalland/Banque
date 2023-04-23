<?php

class Titulaire {

    // Arguments

    private string $_nom;
    private string $_prenom;
    private string $_ville;
    private DateTime $_dateNaissance;
    private array $_comptes;

    // Constructeur

    public function __construct(string $nom, string $prenom, string $ville, string $dateNaissance){
        $this->_nom = $nom ;
        $this->_prenom = $prenom;
        $this->_ville = $ville;
        $this->_dateNaissance = new DateTime ($dateNaissance);
        $this->_comptes = [];
    }

    // Getter et Setter

    public function getNom() : string 
    {
        return $this->_nom;
    }

    public function setNom($nom) : string 
    {
        $this->_nom = $nom;
        return $this;
    }

    public function getPrenom() : string 
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom) : string 
    {
        $this->_prenom = $prenom;
        return $this;
    }

    public function getVille() : string 
    {
        return $this->_ville;
    }

    public function setVille() : string 
    {
        $this->_nom = $ville;
        return $this;
    }
    
    public function getDateNaissance() : DateTime 
    {
        return $this->_dateNaissance;
    }

    public function setDateNaissance() : DateTime 
    {
        $this->_dateNaissance = $dateNaissance;
        return $this;
    }
    
    public function getComptes() : array 
    {
        return $this->_comptes;
    }

    public function setComptes() : array 
    {
        $this->_comptes = $comptes;
        return $this;
    }

    // ToString

    public function __toString() : string 
    {
        return $this->_prenom." ".$this->_nom;
    }

    // ajouter un compte 

    public function addCompte(Comptes $compte) 
    {
        $this->_comptes[] = $compte;
    }

    // Méthodes information du titulaire

    public function getInfos()
    {
        echo $this." agée de ".$this->age()." ans habitant dans la ville de ".$this->_ville." possede un ";
        foreach ($this->_comptes as $compte){
            echo $compte." ";
        }
    }

    // Calcule age

    public function age()
    {
    $today = new DateTime();
    $diff = $today->diff($this->_dateNaissance);
    return $diff->y;
    }
}
   


    