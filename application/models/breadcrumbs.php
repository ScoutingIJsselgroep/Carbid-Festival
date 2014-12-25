<?PHP
/**
 * Class Breadcrumbs is used to generate breadcrumbs for every possible path given
 */
class Breadcrumbs extends CI_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    /**
     * Returns breadcrumbs
     * @param $path as an array, example ['news', 'technology', 'trending']
     * @return $result as html, examble <ol> You're here <li><a>news</a></li></ol>
     */
    function generateBreadcrumbs($path, $loggedin){	
        $result = '';
        $result .= '<ol class="breadcrumb">';
        $result .= 'Je bent hier: ';
		$i = 0;
		$url = '';
		$count = 0;
		foreach($path as $breadcrumb){
		    $result .=  '<li><a href="'.site_url($url.$breadcrumb).'">'.urldecode(ucfirst($breadcrumb)).'</a></li>';
            $url .= $breadcrumb . '/';
            $count++;
		}
		$notshow = array("add", "save", "login", "cat", "admin", "password");
		if($loggedin && $path != null && (!in_array(end($path), $notshow))){
			// User is logged in; display some management links :)
		    $result .= '<div style="float: right"><a href="'.site_url('catdelete/'.$path[$count]).'"><span class="glyphicon glyphicon-trash"></span> Delete Menu</a></div>';
		    $result .= '<div style="float: right; margin-right: 10px;"><a href="'.site_url('admin/add/'.$path[$count]).'"><span class="glyphicon glyphicon-pencil"></span> Artikel toevoegen </a></div>';
		}
		$result .= '</ol>';
		return $result;
    }
}
?>