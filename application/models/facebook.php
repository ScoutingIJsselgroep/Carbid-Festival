<?PHP
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Facebook extends CI_Model {
    public function getAllPosts(){
        
        return $result;
    }
    
    public function getPost(){
        // https://graph.facebook.com/164803596959156/posts?access_token=50489711703807|5kwHBcpxnikhIqC6pORf7H45EYE
        $access_token = 'CAAKqkQCsdv8BAJlRXcSgCIvdAq3PYHf2lVr6WIwACI4689yzB4PKZC0JGsUJiVnHVeVkqjsZCXZAZCHnxnp2Y8tkcg0UVhuUfZACCzZBB4e0ZC01QvKB5IL0tkaeQKzdd57xorb3E3HGfTkGC07p65Vem2nw94yXF0cY6eCwSD9JQQt5EoTCsETHzerCdtTQ1pJqPsUCD0FxhcY6KPZAFhG0';
        $user_id = '164803596959156';
        $data = file_get_contents("https://graph.facebook.com/".$user_id."/posts?access_token=".$access_token);
        $result = json_decode($data, true);
		
		foreach ($result['data'] as $post) {
			if(!empty($post['message'])) {
				
		        $text = $post['message'];
		        $link = $post['link'];
				$image = '';
				if(!empty($post['picture'])) {
		        	$image = $post['picture'];
				}
				break;
			}
		}
        return array($text, $image, $link);
    }
}