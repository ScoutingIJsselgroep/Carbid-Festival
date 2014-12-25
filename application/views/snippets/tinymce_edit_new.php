
<?PHP 

    echo(    '<div class="panel panel-default">
                <div class="panel-body">
                    <form action="'.site_url('admin/save').'" method="POST">
                        <script src="'.base_url('tinymce/tinymce.min.js').'"></script>
                        <button style="float: right" type="submit"  class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Opslaan </button>
                        <input type="text" class="form-control" name="title" placeholder="Titel van het artikel." required autofocus/>
                        <textarea name="text"></textarea>
                        <select name="category" class="form-control">
                         '.$category.'
                        </select>
                    </form>
                </div>
            </div>');
    

?>
<script>tinymce.init({selector:'textarea',toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages", height : 500, plugins:'advlist autolink lists link image charmap print preview anchor searchreplace visualblocks code fullscreen insertdatetime media table contextmenu paste jbimages',  relative_urls: false });</script>

