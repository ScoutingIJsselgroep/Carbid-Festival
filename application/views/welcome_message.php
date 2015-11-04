<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?PHP echo base_url('logo.png');?>"/>
    
	<title><?PHP if(isset($title)){ echo urldecode($title).' |'; } ; ?> Carbid Festival</title>
	
	<link rel="stylesheet" type="text/css" href="<?PHP echo base_url('css/style.css');?>" />
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url('css/bootstrap-wysihtml5-0.0.2.css');?>" />
    <?= ($this->session->userdata('logged_in') ? '<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.4.6/bootstrap-editable/css/bootstrap-editable.css" />':'') ?>
    
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <?= ($this->session->userdata('logged_in') ? '<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.4.6/bootstrap-editable/js/bootstrap-editable.min.js"></script>':'') ?>
    <?= ($this->session->userdata('logged_in') ? '<script src="' . base_url('js/bootstrap-wysihtml5-0.0.2.js') . '"></script>':'') ?>
    <script src="<?PHP echo base_url('js/hover.js');?>"></script>
</head>
<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&appId=1442325566047419&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
	<div id="top">
		<div id="pagecenter">
		    <a href="<?PHP echo site_url();?>">
			<img class="sitelogo" src="<?PHP echo base_url('images/logo.png');?>"></a>
			<div class="sitetitle">
				<h1> Carbid Festival 2015</h1>
			</div>
		</div>
	</div>
    <nav class="navbar navbar-inverse" role="navigation">
      <div id="pagecenter" class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?PHP echo $headermenu;?>
		    </ul>
            <?PHP echo $userstatus; ?> 
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
	<div id="body">
		<div id="pagecenter">
		    <div class="row"> 
    		    <div class="col-md-9">
        			<div id="breadcrumbs">
        			    <?PHP echo $breadcrumbs; ?>
        			</div>
        			<?PHP
        			if(isset($facebook)){
            			echo '<div class="panel panel-default"><div class="panel-body facebook">';
            			echo '<h1> De laatste post van Facebook </h1>';
            			if($facebook[1] != null){
            			    echo '<a href="'.$facebook[2].'"><img src="'.$facebook[1].'" class="image" style=""></a>';
            			}
            			echo $facebook[0];
				if(!empty($facebook[2])){
            			echo '<p><button class="btn btn-primary" href="'.$facebook[2].'">Lees meer op Facebook </button></p>';
            			}
				echo '</div></div>';}
            			?>
        		        <?PHP echo $articles; ?>
        		</div>
        		<?PHP if(isset($sidebar)){
        		    echo $sidebar;
        		    
        		}
        		?>
    		</div>
		</div>
	</div>

    <script src="<?PHP echo base_url('js/jquery.countdown.js'); ?>"></script>
    <script src="<?PHP echo base_url('js/countdown.js'); ?>"></script>
</body>    
</html>
