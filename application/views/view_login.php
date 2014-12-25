<div class="panel panel-default">
  <div class="panel-body">
    <div style="width: 400px; margin-left: auto; margin-right: auto;">
        <form class="form-signin" role="form" method="POST" >
            <h2 class="form-signin-heading">Please sign in</h2>
            <?PHP
                // Print message if there is an message
                if(isset($message)){
                    echo '<div class="alert alert-danger" role="alert">'.$message.'</div>';
                }
            ?>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="text" id="inputEmail" class="form-control" placeholder="Email address" name="username" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" name="submit_login" type="submit">Log in.</button>
        </form>
    </div>
  </div>
</div>    