<div style="width: 200px; margin-left: auto; margin-right: auto;" class="dropdown-login">
    <form class="form-signin" role="form" method="POST" action="<?PHP echo site_url('login');?>">
        <?PHP
            // Print message if there is an message
            if(isset($message)){
                echo '<div class="alert alert-danger" role="alert">'.$message.'</div>';
            }
        ?>
        <label for="inputEmail" class="sr-only">Gebruikersnaam</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Gebruikersnaam" name="username" required autofocus>
        <label for="inputPassword" class="sr-only">Wachtwoord</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
        <button class="btn btn-lg btn-primary btn-block" name="submit_login" type="submit">Log in</button>
    </form>
</div>