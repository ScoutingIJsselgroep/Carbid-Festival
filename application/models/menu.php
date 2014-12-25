<?PHP
class Menu extends CI_Model {
    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    /**
     * Headermenu generates a top menu, using $category and $subcategory
     */
    function headermenu($category, $subcategory){
        $result = "";
        foreach ($category as $key => $menuitem){
            $haschild = false;
            $eresult = "";
            $eresult .= '<ul class="dropdown-menu" role="menu">';
            foreach($subcategory as $submenuitem){
            	if($submenuitem->subcategory == $menuitem->catid){
            	    $haschild = true;
            		$eresult .= '<li><a href="'.site_url($menuitem->text.'/'.$submenuitem->text).'">';
            		$eresult .= $submenuitem->text;
            		$eresult .= '</a></li>';
            	}
            }
            $eresult .= '</ul>';
          
        	$result .= '<li><a href="'.site_url($key==0?'':$menuitem->text).'" class="dropdown-toggle" data-hover="dropdown" role="button" aria-expanded="false">';
        	$result .= $menuitem->text;
        	if($haschild){
        		$result .= '<span class="caret"></span>';
        	}
        	$result .= '</a>';
            if($haschild){
                $result .= $eresult;
            }
            
           
            $result .= '</li>';
        }
        return $result;
    }
}
?>