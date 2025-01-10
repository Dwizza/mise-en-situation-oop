<?php
include_once "membreecole.php";
class etudiant extends MembreEcole{
    private $notes = [] ;
    public function sePresenter(){

        echo "Je suis [nom], un étudiant de [âge] ans.";
    }
    public function getNom(){
        return $this->nom;
    }
    public function getAge(){
        return $this->age;
    }
    public function getNotes(){
        return $this->notes;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function setnom($nom){
        $this->nom = $nom;
    }
    public function ajouterNote($note){
        if($note>0&&$note<=20){
            $notes[] = $note;
            print_r($notes);
        }else{
            echo "error";
        }
    }
}
$etudiant = new etudiant();
$etudiant->ajouterNote(16);
$etudiant->ajouterNote(6);
$etudiant->setNom("oussama");
$etudiant->setAge(20);
$etudiant->getNom();
$etudiant->getAge();
$notes = $etudiant->getNotes();
for($i=0;$i<count($notes);$i++){
    $moyenne = $notes[$i]+$notes[$i+1];
    echo $moyenne;
}