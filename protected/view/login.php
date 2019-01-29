



<?php

if($korisnik->id === NULL){
?>

    <center>
        <h1 class="naslov">Prijava</h1> 
        <div class ="w400">

            <form name="login-form" method="POST" action="<?php echo SITE_URL."index.php?strana=login"; ?>"> 

                <input class="form-control" type="text" maxlength="50" name="email" placeholder="E-mail">
                <BR>
                <input class="form-control" type="password" maxlength="50" name="sifra" placeholder="Lozinka">
                <BR>
                <button type="submit" name="login-submit" value="submited" class="btn btn-primary">Prijavi se</button>

            </form>
        </div>
    </center>



<?php
}
?>