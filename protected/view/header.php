<div class="naslovna">
    
    
    <div class="logo">
        LOGO
    </div>
    
    <div class="naziv-sajta">
        Toba Sajt
    </div>
    
    <div class="login">
        <?php 
        if(!$korisnik->id){ 
        ?>

            <a href="<?php echo SITE_URL; ?>index.php?strana=login" >Login</a>

        <?php 
        }else{
        ?>
            <a href="<?php echo SITE_URL; ?>index.php?strana=korisnicki-panel">
                <?php echo $korisnik->ime." ".$korisnik->prezime; ?>
            </a>
            <a href="<?php echo SITE_URL; ?>index.php?strana=logout" ><small> Logout</small></a>


        <?php
        }
        ?>
    </div>


    
</div>


<div class="menu">
    

    <a href="<?php echo SITE_URL; ?>index.php" >Pocetna</a>
    
    <a href="<?php echo SITE_URL; ?>index.php?strana=korisnici_test" >korisnici_test</a>
    


    
</div>