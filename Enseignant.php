<?php
class Enseignant extends etudiant {

    private $specialite ;
    private $listeEtudiants = [] ;
    static private $nombreDeEtudiants ;

    public function __construct( $specialite){
        $this->specialite = $specialite;
        
    }


} 