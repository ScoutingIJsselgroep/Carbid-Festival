<?PHP 

    echo(    '<div class="panel panel-default">
                <div class="panel-body">
                    <form action="catadd" method="POST">
                        <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
                        <button style="float: right" type="submit"  class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Opslaan </button>
                        <input class="form-control" type="text" name="text" placeholder="Naam categorie" required autofocus/>
                        <select name="category" class="form-control">
                         '.$category.'
                        </select>
                    </form>
                </div>
            </div>');
    

?>