<?PHP 
if($this->session->userdata('logged_in')){
    echo '
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Signed in as '. $this->session->userdata('logged_in')['name'].' <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            '.$logoutform.'
          </ul>
        </li>
      </ul>';
}else{
    echo '<ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Login <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            '.$loginform.'
          </ul>
        </li>
      </ul>
    ';
}
?>