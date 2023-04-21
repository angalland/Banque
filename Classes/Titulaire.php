<?php

class Titulaire {

    // Arguments

    private string $_nom;
    private string $_prenom;
    private string $_ville;
    private DateTime $_dateNaissance;

    // Constructeur

    public function __construct(string $nom, string $prenom, string $ville, string $dateNaissance){
        $this->_nom = $nom ;
        $this->_prenom = $prenom;
        $this->_ville = $ville;
        $this->_dateNaissance = new DateTime ($dateNaissance);
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

    // ToString

    public function __toString(){
        return $this->_prenom." ".$this->_nom;
    }

    // Méthodes information du titulaire

    public function getInfos(){
        return $this." née le ".$this->getDateNaissance()->format('d/m/Y')." habitant dans la ville de ".$this->getVille()." possede .".$this->Titulaire;
    }


}