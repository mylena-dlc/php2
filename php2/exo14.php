<?php

// Exercice 14

// définition de la classse voiture
class Voiture {
    protected string $marque;
    protected string $modele;
    protected bool $classique;

// constructeur
public function __construct($marque,$modele){
    $this->marque = $marque;
    $this->modele = $modele;
    
    $this->classique = true;
}

    // methode
    public function classique(){
        if ($this->classique == true){
        echo "Voiture classique";
        }else{
            echo "Voiture électrique";
        }
    }
    public function displayInfos(){ // "display" car on echo, "get" si on return
        echo "<br/>";
        echo "Infos véhicule : ";
        echo "$this->marque $this->modele <br/> ";

    }
    // getter / setter
    public function getMarque(){
        return $this->marque;
    }
    public function setMarque($marque){
        $this->marque = $marque;
    }
    public function getModele(){
        return $this->modele;
    }
    public function setModele($modele){
        $this->modele = $modele;
    }
    public function getClassique(){
        return $this->classique;
    }
    public function setclassique($classique){
        $this->classique = $classique;
    }
}
//définition de la classe fille VoitureElec
class VoitureElec extends Voiture {
    protected int $autonomie;

    //constructeur
    public function __construct($marque, $modele, $autonomie){
        parent::__construct($marque, $modele);

        $this->classique = false;
        $this->autonomie = $autonomie;
    }
    //méthodes
    public function displayInfos(){
        echo parent::displayInfos(); // On réutilise les méthodes du parents
        echo "L'autonomie est de $this->autonomie";
        echo "<br/>";
    }

    // getter / setter
    public function getAutonomie(){
        return $this->autonomie;
    }
    public function setAutonomie($autonomie){
        $this->autonomie = $autonomie;
    }
}
// création et utilisation d'instances de la classe voiture
$v1 = new Voiture("Peugeot", "408");
$ve1 = new VoitureElec("BMW", "13", 100);

$v1->displayInfos();
$v1->classique();

$ve1->displayInfos();
$ve1->classique();


?>