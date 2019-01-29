<?php

class Korisnik{
    
    
    public $id = NULL;
    public $ime = NULL;
    public $prezime = NULL;
    public $email = NULL;
    public $grad = NULL;
    public $telefon = NULL;
    
    
    function __construct() {
        $this->load_korisnik();
    }
    
    
    private function load_korisnik(){
        
        global $pdosql;
        
        if(empty($_COOKIE['cookie'])){
            return;
        }
        
        $cookie = $_COOKIE['cookie'];

        $STH = $pdosql->prepare('SELECT * FROM korisnici WHERE cookie = :cookie');
        $STH->bindParam(':cookie', $cookie);

        if(!$STH->execute()){
            exit("SQL Error");
        }

        if($STH->rowCount() === 0){
            return;
        }

        $red = $STH->fetch();
        $this->id      = $red['id'];
        $this->ime     = $red['ime'];
        $this->prezime = $red['prezime'];
        $this->email   = $red['email'];
        $this->grad    = $red['grad'];
        $this->telefon = $red['telefon'];
        
    }
    
    
    
}