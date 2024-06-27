-Creattion de classes en php
-Utilisation des méthodes classiques, des constructeur, des get et set
-instancer différentes, traits et classes abstraites 

-utilsation dans un contexte web. exemple : 
-création d'un site de produit (véhicules, sport, gaming, Pc...)



<?php
trait voitureTrait {
    private $nom;
    private $prix;

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }

    public function getPrix() {
        return $this->prix;
    }
}

abstract class voiture {
    use voitureTrait;


    abstract public function getDescription();
}


class Duster extends Produit {
    private $anneeFabrication;

    
    public function __construct($nom, $prix, $anneeFabrication) {
        $this->setNom($nom);
        $this->setPrix($prix);
        $this->anneeFabrication = $anneeFabrication;
    }

  
    public function setAnneeFabrication($anneeFabrication) {
        $this->anneeFabrication = $anneeFabrication;
    }


    
}   




?>