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
        $this->_dateNaissance = new DateTime($dateNaissance);
    }

    // Getter et Setter

    public function getNom(){
        return $this->_nom;
    }

    public function setNom($nom){
        $this->_nom = $nom;
        return $this;
    }

    public function getPrenom(){
        return $this->_prenom;
    }

    public function setPrenom($prenom){
        $this->_prenom = $prenom;
        return $this;
    }

    public function getVille(){
        return $this->_ville;
    }

    public function setVille(){
        $this->_nom = $ville;
        return $this;
    }
    
    public function getDateNaissance(){
        return $this->_dateNaissance;
    }

    public function setDateNaissance(){
        $this->_dateNaissance = $dateNaissance;
        return $this;
    }

    // ToString

    public function __toString(){
        return $this->_prenom." ".$this->_nom;
    }




}