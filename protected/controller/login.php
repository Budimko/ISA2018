<?php

$title = "Login page";



if($korisnik->id !== NULL){
    
    exit("Vec ste ulogovani");
    
}





if ( isset($_POST["login-submit"]) ) {

    
    if ( isset($_POST["email"]) ) {
        $email = $_POST["email"];
    }
    if ( isset($_POST["sifra"]) ) {
        $sifra = $_POST["sifra"];
    }
    
    if ( $email==""){
        echo "Niste uneli email.";
        exit;
    }
    if ( $sifra==""){
        echo "Niste uneli sifru.";
        exit;
    }
    
    
    $provera_korisnika = $pdosql->prepare('SELECT * FROM korisnici WHERE email = :email  AND sifra = :sifra');
    $provera_korisnika->bindParam(':email', $email);
    $provera_korisnika->bindParam(':sifra', $sifra);
    if(!$provera_korisnika->execute()){
        echo "Neuspešna prijava.. Obratite se Administratoru! CODE: 449666552323";
        exit;
    }

    if($provera_korisnika->rowCount() !== 1){
        echo "Pogrešna šifra ili email.";
        exit;
    }
    
    
    $provera_korisnika->setFetchMode(PDO::FETCH_ASSOC);
    $korisnik_arr = $provera_korisnika->fetch();
    
    setcookie("cookie", $korisnik_arr['cookie'], 0, "/", NULL);
    
    header('Location: '.SITE_URL);
    
}


