<div class="panel panel-default">
    <div class="panel-body">
        <form action="<?PHP echo site_url('account/password'); ?>" method="POST">
            <div class="form-group">
                <h2> Wachtwoord </h2>
                Verander je wachtwoord.<br>
                <?PHP if(isset($message)){ echo '<div class="alert alert-danger" role="alert">' . $message . '</div>'; }?>
                <input type="password" name="old" class="form-control" placeholder="Old password" required autofocus>
                
                <input type="password" name="new1" class="form-control" placeholder="New password" required>
                
                <input type="password" name="new2" class="form-control" placeholder="Confirmation" required>
            </div>
            <button type="submit" name="submit" class="btn btn-default">Verstuur</button>
        </form>
    </div>
</div>