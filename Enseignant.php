<?php
class Enseignant extends MembreEcole {

    private $specialite ;
    private $listeEtudiants = [] ;
    static private $nombreDeEtudiants ;

    public function __construct( $specialite){
        $this->specialite = $specialite;

    }
    public function sePresenter(){
        echo  "Je suis $this->nom, un enseignant en $this->specialite.";
    }


} 