<?php

/*
    Définitions :
        Classe : ensemble d'état(s) et comportements qui définissent quelque chose
            -> moule, schéma, modèle, template, définition
        Objet : instance d'une classe
            -> la classe "prend vie", elle est utilisée concrètement
        this : présent uniquement dans les définitions de classes, représente l'instance de la classe
    
    Dans une classe :
        - attributs/propriétés : ce qui compose/définit la classe
        - constructeur : initialise les attributs (et renvoie une instance de la classe)
        - getters/setters
            - getters : récupérer la valeur d'un attribut
            - setters : modifier la valeur d'un attribut
        - méthodes : comportements, actions qui seront possibles
*/

// définition de la classe Voiture
class Voiture {
    // attributs / propriétés
    private string $marque;
    private string $modele;
    private int $nbPortes;
    private float $vitesseActuelle;
    private bool $isDemarree;

    // constructeur
    public function __construct($marque, $modele, $nbPortes) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;

        $this->vitesseActuelle = 0;
        $this->isDemarree = false;
    }

    // méthodes

    // a == false <=> a != true <=> !a == true <=> !a
    // !(a && b) <=> !a || !b
    // !(a || b) <=> !a && !b
    // 7 == "7"
    // 7 !== "7"

    public function getNomComplet() {
        return "$this->marque $this->modele";
    }

    public function demarrer() {
        // si la voiture n'est pas déjà démarrée
        if (!$this->isDemarree) {
            // je la démarre concrètement / réellement
            $this->isDemarree = true;
            echo "Le véhicule " . $this->getNomComplet() . " démarre.<br />";
        } else {
            // sinon je préviens qu'elle est déjà démarrée (et je ne la démarre pas)
            echo "Le véhicule " . $this->getNomComplet() . " est déjà démarré.<br />";
        }
    }

    public function stopper() {
        // si la voiture n'est pas déjà stoppée (== est démarrée)
        if ($this->isDemarree) {
            // je la stoppe concrètement / réellement
            $this->isDemarree = false;
            echo "Le véhicule " . $this->getNomComplet() . " est stoppé.<br />";
        } else {
            // sinon je préviens qu'elle est déjà stoppée (et je ne la stoppe pas)
            echo "Le véhicule " . $this->getNomComplet() . " est déjà stoppé.<br />";
        }
    }

    public function accelerer($deltaVitesse) {
        // si le véhicule est démarré
        if ($this->isDemarree) {
            // on accélère de delta
            // $this->vitesseActuelle = $this->vitesseActuelle + $deltaVitesse;
            $this->vitesseActuelle += $deltaVitesse; // a += b <=> a = a + b // .= += -= *= /= %=
            echo "Le véhicule " . $this->getNomComplet() . " accélère de $deltaVitesse km / h<br />";
        } else {
            // sinon on n'accélère pas
            echo "Le véhicule " . $this->getNomComplet() . " veut accélérer de $deltaVitesse km / h<br />";
            echo "Pour accélérer, il faut démarrer le véhicule " . $this->getNomComplet() . " !<br />";
        }
    }

    public function ralentir($deltaVitesse) {
        // si le véhicule est démarré
        if ($this->isDemarree) {
            // si on roule à au moins delta km/h
            if ($this->vitesseActuelle >= $deltaVitesse) {
                // on ralentit de delta
                // $this->vitesseActuelle = $this->vitesseActuelle - $deltaVitesse;
                $this->vitesseActuelle -= $deltaVitesse;
                echo "Le véhicule " . $this->getNomComplet() . " ralentit de $deltaVitesse km / h<br />";
            } else {
                // sinon on ne roule pas assez vite pour ralentir d'autant
                echo "Le véhicule " . $this->getNomComplet() . " veut ralentir de $deltaVitesse km / h<br />";
                echo "Il ne roule pas assez vite, il a une vitesse actuelle de $this->vitesseActuelle km / h !<br />";
            }
        } else {
            // sinon on ne ralentit pas
            echo "Le véhicule " . $this->getNomComplet() . " veut ralentir de $deltaVitesse km / h<br />";
            echo "Pour ralentir, il faut démarrer le véhicule " . $this->getNomComplet() . " !<br />";
        }
    }

    public function getInfos() {
        echo "<br />";
        echo "Infos véhicule " . $this->getNomComplet() . "<br />";
        echo "********************<br />";
        echo "Nom et modèle du véhicule : " . $this->getNomComplet() . "<br />";
        echo "Nombre de portes : $this->nbPortes<br />";
        // opérateur ternaire (ternary operator) => CONDITION ? SIVRAI : SIFAUX
        echo "Le véhicule $this->marque est " . ($this->isDemarree ? "démarré" : "à l'arrêt") . "<br />";
        echo "Sa vitesse actuelle est de : $this->vitesseActuelle km / h<br />";
        echo "<br />";
    }

    // getters/setters

    public function getMarque() {
        return $this->marque;
    }
    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function getModele() {
        return $this->modele;
    }
    public function setModele($modele) {
        $this->modele = $modele;
    }

    public function getNbPortes() {
        return $this->nbPortes;
    }
    public function setNbPortes($nbPortes) {
        $this->nbPortes = $nbPortes;
    }

    public function getVitesseActuelle() {
        echo "La vitesse du véhicule " . $this->getNomComplet() . " est de $this->vitesseActuelle km / h<br />";
        return $this->vitesseActuelle;
    }
    public function setVitesseActuelle($vitesseActuelle) {
        // $this->vitesseActuelle = $vitesseActuelle;
        echo "Vraiment désolé, mais nous ne pouvons pas accepter cette demande, veuillez passer par la méthode accelerer() ou ralentir() afin de modifier la vitesse actuelle du véhicule tout en respectant les règles métier.";
    }

    public function getIsDemarree() {
        return $this->isDemarree;
    }
    public function setIsDemarree($isDemarree) {
        // $this->isDemarree = $isDemarree;
        echo "Vraiment désolé, mais nous ne pouvons pas accepter cette demande, veuillez passer par la méthode demarrer() ou stopper() afin de démarrer ou stopper le véhicule tout en respectant les règles métier.";
    }
}



// création et utilisation d'instances de la classe Voiture
$voiture408 = new Voiture("Peugeot", "408", 5);
$voitureC4 = new Voiture("Citroën", "C4", 3);

$voiture408->demarrer();
$voiture408->accelerer(50);

$voitureC4->demarrer();
$voitureC4->stopper();
$voitureC4->accelerer(20);

$voiture408->getVitesseActuelle();
$voitureC4->getVitesseActuelle();

$voiture408->getInfos();
$voitureC4->getInfos();
