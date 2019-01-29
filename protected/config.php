<?php


    define("SITE_URL", "http://localhost/mb/");






    $host = "127.0.0.1";
    $korisnik = "root";
    $lozinka = "";
    $baza = "mb";



    try{
        $pdosql = new PDO("mysql:host=$host;dbname=$baza", $korisnik, $lozinka);
        $pdosql->exec("set names utf8");

        //ERRMODE_EXCEPTION 
        $pdosql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $pdosql->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    }
    catch(PDOException $e){
        //echo "Error: " . $e->getMessage();
        file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
        die();
    }
    
    

?>