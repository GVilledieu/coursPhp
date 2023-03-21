<?php
class Verification
{

    private $array=[];

    private function Verif($name,$min,$max,$message){
        if (strlen($name) < $min || strlen($name) > $max){
            array_push($this->array, $message);
        }
        return $this->array;
    }

    public function getArray(){
        return $this->array;
    }

    public function getIndexError($index){
        if(count($this->array) > 0) {
            return $this->array[$index];
        }
        return null;
    }

    public function setArray($array){

        return $this->array=$array;
    }
    public function Email($name) {
        return $this->Verif($name, 5, 255, 'Email Non valide');
    }

    public function Texte($name, $param) {
        return $this->Verif($name, 3, 255, 'Votre '.$param.' nest pas valide');
    }
    public function Phone($name) {
        return $this->Verif($name, 8, 15, 'Téléphone non valide');
    }

    public function Password($password, $password2) {
        if ($password != $password2){
            array_push($this -> array, 'Les mots de passe ne sont pas identiques');
        }
        $this->Verif($password, 2, 80, 'Password non valide');

        if (count($this->array) > 0){
            return $this->array;
        }

        $hash = password_hash($password,PASSWORD_ARGON2I);
        echo($hash);
        return $hash;

    }

}
