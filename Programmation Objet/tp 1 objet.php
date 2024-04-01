<?php
    class Voiture {
        public $marque;
        public $couleur;

        public function construct(string $marque, string $couleur = "noire")
        {
            $this -> marque = $marque;
            $this -> couleur = $couleur;
        }

        public function getMarque() :string
        {
            return $this -> marque;
        }

        public function getCouleur() :string
        { 
            return $this -> couleur;
        }
    }
?>
