<?PHP
class Articles extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    /**
     * Returns a list of all articles.
     * @return car
     */
    function getArticles($page){
        $query = $this->db->query("SELECT article.text, article.title, article.artid, article.catid, categories.text AS categoryname FROM article, categories WHERE article.catid = categories.catid AND UPPER(categories.text) = UPPER(\"".urldecode($page)."\")");
        return $query->result();
    }
    
    /**
     * Updates an article if an article with id $data['article'] exists, otherwise create a new entry. 
     */
    function updateArticle($data) 
    {
    	
       $this->db->where('artid',$data['articleid']);
       $q = $this->db->get('article');
    
       if ( $q->num_rows() > 0 ) 
       {
          // Edit a current existing article
          $this->db->where('artid',$data['articleid']);
          $this->db->update('article',array('text' => $data['text'], 'catid' => $data['category'], 'title' => $data['title']));
          return true;
       } else {
       	  // Add a new article 
          $this->db->insert('article',array('text' => $data['text'], 'title' => $data['title'], 'catid' => $data['category']));
          return true;
       }
       return false;
    }
    function deleteArticle($id){
        $this->db->where('artid', $id);
        $this->db->delete('article'); 
        return true;
    }
    
    function subCategoryChooser($category){
        $result = "<option value='0'> Geen categoryhoofd </option>";
        foreach ($category as $categoryitem)
        {
           
            $result .= '<option value="'.$categoryitem->catid.'">'.$categoryitem->text.'</option>';
           
            $result .= '</optgroup>';
        }
        return $result;
    }
    
    function articleCategoryChooser($category, $subcategory, $current){
        $result = "";
        foreach ($category as $categoryitem)
        {
            $eresult = "";
            $fresult = "";
            foreach($subcategory as $submenuitem){
	            	if($submenuitem->subcategory == $categoryitem->catid){
	            	    if(isset($current) && $current == $submenuitem->text){
                            $fresult = 'selected="selected"';
                        }
	            		$eresult .= '<option value="'.$submenuitem->catid.'" '.$fresult.'> - '.$submenuitem->text.'</option>';
	            	}
	        }
            if(isset($current) && $current == $categoryitem->text){
                $fresult = 'selected="selected"';
            }
            	$result .= '<option value="'.$categoryitem->catid.'" '.$fresult.'>'.$categoryitem->text.'</option>';
            	if($eresult != ""){
            	    $result .= $eresult;
            	}
           
            $result .= '</optgroup>';
        }
        return $result;
    }
    
    /**
     * Turns an array of articles into HTML
     */
    function tohtmlArticles($article, $session){
        $articles = '';
        foreach($article as $item){
	        $articles .= '<div class="panel panel-default"><div class="panel-body">';
		            /*if admin == true */
		    if($session){     
		    	$articles .= '<div class="pull-right">';
		    	$articles .= '<a href="'.site_url('/delete/'.$item->artid).'"> <span class="glyphicon glyphicon-trash"></span> Delete </a>&nbsp;';
		    	$articles .= '<a href="'.site_url('/admin/'.uri_string()).'"> <span class="glyphicon glyphicon-pencil"></span> Edit </a>';
		    	$articles .= '</div>';
		    }
		    $articles .= '<h1>';
		    $articles .= $item->title;
		    $articles .= '</h1>';
		    if(isset($admin) && $admin == true){
		        $articles .= '<form action="" method="POST">';
		        $articles .= '<input type="hidden" name="article" value="'.$item->artid.'">';
		        $articles .= '<textarea name="text">'.$item->text.'</textarea>';
		        $articles .= '<input type="submit" name="submit-article" class="btn btn-default"/>';
		        $articles .= '</form>';
		    }else{
		        $articles .= $item->text;
		    }
		        $articles .= '</div></div>';
	    }
	    return $articles;

    }
}