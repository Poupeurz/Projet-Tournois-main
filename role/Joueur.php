<?php

class Joueur {

    private $nom;
    private $prenom;
    private $login;
    private $dateNaiss;
    private $courriel;

public function __construct($nom, $prenom, $login, $dateNaiss, $courriel) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->login = $login;
        $this->dateNaiss = $dateNaiss;
        $this->courriel = $courriel;
    }


    // méthodes

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

       /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     *
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * @param mixed $identifiant
     *
     */
    public function getLogin($login)
    {
        $this->Login = $login;
    }

    /**
     * @return mixed
     */
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * @param mixed $dateNaiss
     *
     */
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;
        
    }
    /**
     * @return mixed
     */
    public function getCourriel()
    {
        return $this->courriel;
    }

    /**
     * @param mixed $courriel
     *
     */
    public function setCourriel($courriel)
    {
        $this->courriel = $courriel;
    }
}
?>