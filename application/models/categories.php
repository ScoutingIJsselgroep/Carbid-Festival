<?PHP
class Categories extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    /**
     * Returns a list of all categories.
     * @return category (where subcategory == 0, in other words, the category isn't a subcategory)
     */
    function getCategories(){
        $query = $this->db->query("SELECT * FROM categories WHERE subcategory = 0");
        return $query->result();
    }
    
    /**
     * Returns a list of all subcategories.
     * @return subcategories (where subcategory != 0, in other words, the subcategory is set as an subcategory of a category.)
     */
    function getSubCategories(){
        $query = $this->db->query("SELECT * FROM categories WHERE subcategory != 0");
        return $query->result();
    }
    
    /** 
     * Deletes a category with a certain name
     */
    function deleteCategory($path){
        $this->db->where('text', $path);
        $this->db->delete('categories'); 
        return true;
    }
    
    /**
     * Adds a category to the database
     */
    function addCategory($data){
        if($data['category'] != '0'){
            // Add a subcategory with category post('category')
            $this->db->insert('categories',array('text' => $data['text'], 'subcategory' =>  $data['category']));
        }else{
            // Add a category with no head
            $this->db->insert('categories',array('text' => $data['text']));
        }
        return true;
    }
}
    