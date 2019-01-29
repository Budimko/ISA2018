
<center>
    <h1 class="naslov">Prijava</h1> 
    <div class ="w400">

        <form name="form_kontakt_text" method="POST" 
              action="<?php echo SITE_URL."login/"; ?>"> 

            <input class="form-control" type="text" maxlength="50"
                   name="username" placeholder="Korisničko ime">
            <BR>
            <input class="form-control" type="password" maxlength="50"  
                   name="password" placeholder="Lozinka">
            <BR>
            <button type="submit" name="login-submit" 
                    value="submited" class="btn btn-primary">Prijavi se</button>

        </form>
    </div>
</center>