<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function getPath(){
	    
	    $path = $this->uri->segment_array();
	    if($path == null){
        	   $path = array(
            "1" => "Home"
        );
	   }
	    return $path;
	    
	}
	public function index()
	{
	   
	    $path = $this->getPath();
	    
	    $data = $this->standardPage();
        $data['articles'] = $this->loadArticles($path);
		$this->load->view('welcome_message', $data);
	}
	/**
	 * Allow a user to log out
	 */
	public function logout(){
		$message['name'] = $this->session->userdata('logged_in')['name'];
		if($this->session->userdata('logged_in')){
			$this->session->unset_userdata('logged_in');
			$this->showView('snippets/logged_out', $message);
		}else{
			$message['errormessage'] = 'Er was geen gebruiker ingelogd.';
			$this->showView('snippets/error_message', $message);
		}
	}
	/**
	 * Allow a user to log in
	 */
	public function login(){
	    $message = "";
	    
        if($this->session->userdata('logged_in')){
            $this->showView('dashboard', '');
        }else if(isset($_POST['submit_login'])){
            // Do login action
            $this->load->model('User','', TRUE);
            $loggedin = $this->User->login();

            // Check if $loggedin is true. If $loggedin is not true, view login
            if($loggedin){
                $this->showView('dashboard', '');
            }else{
	            $message['message'] = "Je login was onjuist. Probeer het opnieuw!";
	            $this->showView('view_login', $message);
            }
            
        }else{
            $this->showView('view_login', '');
        }
        
	}
	
	/**
	 * Changes password if the entered password is correct and the two hew passwords are the same.
	 */
	public function changePassword(){
		if($this->checkSession() == true){
			if(isset($_POST['submit'])){
				$message = "";
				$old = $_POST['old'];
				$new1 = $_POST['new1'];
				$new2 = $_POST['new2'];
				$this->load->model('User','', TRUE);
		        $altered = $this->User->changePassword($old, $new1, $new2);
		        if($altered === true){
		        	$message['successmessage'] = 'Je wachtwoord is veranderd.';
					$this->showView('snippets/success_message', $message);
		        }else{
		        	$message['message'] = $altered;
					$this->showView('snippets/changepass', $message);
		        }
			}else{
				$this->showView('snippets/changepass', null);
			}
		}else{
			$message['message'] = "Je bent niet ingelogd!";
			$this->showView('view_login', $message);
		}
		
	}
	
	/**
	 * Show custom view
	 * @param String $view The view that has to be viewed.
	 * @param String $message The message that has to be displayed on the page.
	 */
	public function showView($view, $message){
	    $data = $this->standardPage();
	    $data['articles'] =  $this->load->view($view, $message, true);
	    $this->load->view('welcome_message', $data);
	}
	
	public function subscribeNewsletter(){
		if(isset($_POST['email'])){
			$data['email'] = $_POST['email'];
			$data['naam'] = $_POST['naam'];
			$this->load->model('EmailList', '', TRUE);
		    $saved = $this->EmailList->addEmail($data);
			$message['successmessage'] = 'Je hebt je nu met '.$data['email'].' opgegeven voor de nieuwsbrief.';
			$this->showView('snippets/success_message', $message);
		}else{
			$this->showView('snippets/newsletter', null);
		}
	    
		
	}
	
	/**
	 * Create a standard page, without the content
	 * @return String[] The data for a standard page. 
	 */

	public function standardPage(){
	   
	    $path = $this->getPath();
	    $category = $this->loadCategories();
	    $data['title'] = $this->getTitle(end($path));
	    $data['headermenu'] = $this->loadHeaderMenu($category);
	    $data['breadcrumbs'] = $this->loadBreadcrumbs($path);
	    if(end($path) == "Home"){
	        $this->load->model('Facebook','', TRUE);
            $data['facebook'] = $this->Facebook->getPost();
	    }
        $data['sidebar'] = $this->loadSidebar($path);
        $data['userstatus'] = $this->loadUserstatus();
	    return $data;
	}
	/**
	 * Set custom titles, default $pathend
	 * @param String $pathend the end of a path.
	 * @return String A custom title for a page.
	 */
	public function getTitle($pathend){
		switch($pathend){
			case 'login':
				return 'Dashboard';
				break;
			case 'logout':
				return 'Uitgelogd';
				break;
			case 'add':
				return 'Nieuw artikel toevoegen';
				break;
			case 'cat':
				return 'Nieuwe categorie toevoegen';
				break;
			case 'password':
			    return 'Wachtwoord veranderen';
			default:
				return UCFIRST($pathend);
				break;
		}
	}

	/**
	 * Return the menu
	 * @param String[][] $category An array of arrays of Stirngs.
	 * @return String HTML for the menu.
	 */
	public function loadHeaderMenu($category){
	    $this->load->model('Menu','', TRUE);
	    $menu = $this->Menu->headermenu($category[0], $category[1]);
	    return $menu;
	}
	/**
	 * Load model for breadcrumbs
	 * @param String[] $path The path for which the breadcrumbs need to be loaded.
	 * @return String HTML for the breadcrumbs
	 */
	public function loadBreadcrumbs($path){
	    $this->load->model('Breadcrumbs','', TRUE);
	    $loggedin = $this->checkSession();
	    $breadcrumbs = $this->Breadcrumbs->generateBreadcrumbs($path, $loggedin);
	    return $breadcrumbs;
	}
	/**
	 * Load all available categories
	 * @return String[][] An array of arrays of Strings.
	 */
	public function loadCategories(){
	    $this->load->model('Categories','', TRUE);
	    $category = $this->Categories->getCategories();
	    $subcategory = $this->Categories->getSubCategories();
	    return array($category, $subcategory);
	}
	
	/**
	 * Get the login and logout forms.
	 * @return String The view snippets/userstatus.
	 */
	public function loadUserStatus(){
		$message['logoutform'] =  $this->load->view('snippets/logout_small', '', true);
		$message['loginform'] =  $this->load->view('snippets/login_small', '', true);
	    $userstatus =  $this->load->view('snippets/userstatus', $message, true);
	    return $userstatus;
	}
	/**
	 * Load sidebar
	 * @require $path
	 * @return $sidebar (html)
	 */
	public function loadSidebar($path){
        $this->load->model('Sidebar', '', TRUE);
	    $sidebar = $this->Sidebar->getSidebar(end($path));
	    return $sidebar;
	}
	public function loadEditArticles(){
		$path = $this->uri->segment_array();
		$this->load->model('Articles','', TRUE);
		$message['article'] = $this->Articles->getArticles(end($path));
	    return $message;
	}
	/**
	 * Load articles that correspond to the end of the path
	 * @require $path
	 * @return $articles (html)
	 */
	public function loadArticles($path){
	    $this->load->model('Articles','', TRUE);
	    $article = $this->Articles->getArticles(end($path));
	    $articles = $this->Articles->tohtmlArticles($article, $this->checkSession());
	    return $articles;
	}
	
	/**
	 * Check if user is logged in
	 * @return logged_in
	 */
	public function checkSession(){
		// Check session
		if($this->session->userdata('logged_in')){
			return true;
		}else{
			return false;
		}
	}
	
	/**
	 * Save article, if post('articleid') isn't set, add new article, else update article
	 */
	public function saveArticle(){
	    $data = "";
	    if(isset($_POST['articleid'])){
	        $data['articleid'] = $_POST['articleid'];
	    }else{
	        $data['articleid'] = 0;
	    }
	    $data['text'] = $_POST['text'];
	    $data['title'] = $_POST['title'];
	    $data['category'] = $_POST['category'];
	    $this->load->model('Articles', '', TRUE);
	    $saved = $this->Articles->updateArticle($data);
	    if($saved){
			$message['successmessage'] = 'Het artikel '.$data['title'].' is opgeslagen.';
			$this->showView('snippets/success_message', $message);
	    }else{
	        $message['errormessage'] = 'Het artikel is niet opgeslagen.';
			$this->showView('snippets/error_message', $message);
	    }
	}
	
	public function catdelete(){
	    // Do something
		if($this->checkSession() == true){
			// You're logged in! Start deleting!
			$path = $this->uri->segment_array();
			// The 'add menu' cannot be deleted
			if(end($path) != 'add'){
			    $this->load->model('Categories','', TRUE);
			    $article = $this->Categories->deleteCategory(end($path));
    			$message['successmessage'] = 'Het artikel is verwijderd.';
    			$this->showView('snippets/success_message', $message);
			}else{
    			$message['errormessage'] = 'Probeer het systeem niet te breken.';
    			$this->showView('snippets/error_message', $message);
			}
		}else{
			// Header to view_login
			$message['message'] = "Je moet inloggen om een menuknop te kunnen verwijderen.";
			$this->showView('view_login', $message);
		}
	}
	
	/**
	 * Add a category
	 */
	public function addcategory(){
		if($this->checkSession() == true){
			// You're logged in! Start editing!
			$data['text'] = $_POST['text'];
		    $data['category'] = $_POST['category'];
			$this->load->model('Categories','', TRUE);
			$this->Categories->addCategory($data);
			$message['successmessage'] = 'De categorie is toegevoegd.';
    		$this->showView('snippets/success_message', $message);
		}else{
			// Header to view_login
			$message['message'] = "Je moet inloggen om een categorie te kunnen toevoegen.";
			$this->showView('view_login', $message);
		}
	}
	/**
	 * Show a view for adding new categories
	 */
	public function newCategory(){
		if($this->checkSession() == true){
			$this->load->model('Articles','', TRUE);
			$category = $this->loadCategories();
			$message['category'] = $this->Articles->subCategoryChooser($category[0]);
			$this->showView('snippets/addcategory', $message);
		}else{
			// Header to view_login
			$message['message'] = "Je moet inloggen om een categorie te kunnen toevoegen.";
			$this->showView('view_login', $message);
		}
	}
	public function delete(){
	    // Do something
		if($this->checkSession() == true){
			// You're logged in! Start editing!
			$path = $this->uri->segment_array();
			$this->load->model('Articles','', TRUE);
			$article = $this->Articles->deleteArticle(end($path));
			$message['successmessage'] = 'Het artikel is verwijderd.';
			$this->showView('snippets/success_message', $message);
		}else{
			// Header to view_login
			$message['message'] = "Je moet inloggen om een artikel te kunnen verwijderen.";
			$this->showView('view_login', $message);
		}
	}
	public function editExisting(){
		// Do something
		if($this->checkSession() == true){
			// You're logged in! Start editing!
			$message = $this->loadEditArticles();
			$path = $this->getPath();
			$category = $this->loadCategories();
			$this->load->model('Articles','', TRUE);
			$message['category'] = $this->Articles->articleCategoryChooser($category[0],$category[1], end($path));
			$this->showView('snippets/tinymce_edit', $message);
		}else{
			// Header to view_login
			$message['message'] = "Je moet inloggen om een artikel te kunnen bewerken.";
			$this->showView('view_login', $message);
		}
	}
	
	public function newArticle($path){
		// Do something
		if($this->checkSession() == true){
			// You're logged in! Start editing!
			$category = $this->loadCategories();
			$this->load->model('Articles','', TRUE);
			$message['category'] = $this->Articles->articleCategoryChooser($category[0],$category[1], $path);
			$this->showView('snippets/tinymce_edit_new', $message);
		}else{
			// Header to view_login
			 $message['message'] = "Je moet inloggen om een artikel te kunnen toevoegen.";
			 $this->showView('view_login', $message);
		}
	}
	
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */