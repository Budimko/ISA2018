<?php



var_dump($korisnici_test);



foreach ($korisnici_test as $value) {
    ?>
    <h1><?php echo $value['ime']; ?></h1>
    <?php
}

?>



