<?php

// global $pdosql;


$sql = "SELECT * FROM korisnici";
$STH = $pdosql->prepare($sql); 
$STH->execute(); 

$count = $STH->rowCount();

if($count == 0){
    echo "Ne postoji ni jedna!!";
} 

$STH->setFetchMode(PDO::FETCH_ASSOC);


$korisnici_test = [];

while($row = $STH->fetch()) { 
    array_push($korisnici_test, $row);
}


