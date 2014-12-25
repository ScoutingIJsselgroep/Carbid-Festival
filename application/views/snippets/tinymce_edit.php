
<?PHP foreach($article as $singlearticle){

    echo(    '<div class="panel panel-default">
                <div class="panel-body">
                    <form action="'.site_url('admin/save').'" method="POST">
                        <input type="hidden" value="'.$singlearticle->artid.'" name="articleid"/>
                        <script src="'.base_url('tinymce/tinymce.min.js').'"></script>
                        <button style="float: right" type="submit"  class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Opslaan </button>
                        <input class="form-control" type="text" name="title" value="'.$singlearticle->title.'" required autofocus />
                        <textarea name="text">'.$singlearticle->text.'</textarea>
                        <select name="category" class="form-control">
                         '.$category.'
                        </select>
                    </form>
                </div>
            </div>');
    
}
?>
<script>tinymce.init({selector:'textarea', height : 500, toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages", plugins:'advlist autolink lists link image charmap print preview anchor searchreplace visualblocks code fullscreen insertdatetime media table contextmenu paste jbimages',  relative_urls: false });</script>
