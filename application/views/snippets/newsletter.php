<div class="panel panel-default">
    <div class="panel-body">
        <form action="<?PHP echo site_url('newsletter'); ?>" method="POST">
            <div class="form-group">
                <h2> Nieuwsbrief </h2>
                Geef je nu op en word op de hoogte gehouden!<br>
                <input type="text" name="email" class="form-control" placeholder="Email" required autofocus>
                <input type="text" name="naam" class="form-control" placeholder="Naam" required>
            </div>
            <button type="submit" name="submit" class="btn btn-default">Verstuur</button>
        </form>
    </div>
</div>