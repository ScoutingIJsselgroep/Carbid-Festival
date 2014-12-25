<?PHP

/**
 * Defines a sidebar for a page
 */
class Sidebar extends CI_Model{
    /**
     * Returns all sidebars in HTML format.
     * @require $page the page the sidebar has to append to.
     * @result $result all sidebar elements in HTML
     */
    function getSidebar($page){
        $result = '';
        
        $result .= '<div class="col-md-3"><div class="panel panel-default"><div class="panel-body">';
        //$result .= '<div id="countdown"></div>';
        // get all  sidebars
        $result .= '<div class="fb-like" data-href="https://www.facebook.com/Carbidfestival" data-width="100" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div><br><br>';
        $result .= '<script src="https://apis.google.com/js/platform.js"></script>

<div class="g-ytsubscribe" data-channelid="UCGNd3Yq15wBZAsN-LmmwRmA" data-layout="default" data-count="default"></div>';
        $result .= '<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://carbidfestival.nl/" data-text="CarbidFestival 2014:"  data-hashtags="CF14">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\'://platform.twitter.com/widgets.js\';fjs.parentNode.insertBefore(js,fjs);}}(document, \'script\', \'twitter-wjs\');</script>';
       $result .= '</div></div><div class="panel panel-default"><div class="panel-body">';
        // Subscribe to newsletter
        $result .= '<form action="'.site_url('newsletter').'" method="POST">
  <div class="form-group">
<h2> Nieuwsbrief </h2>
Geef je nu op en word op de hoogte gehouden!<br>
   <input type="text" name="email" class="form-control" placeholder="Email">
   <input type="text" name="naam" class="form-control" placeholder="Naam">
  </div>
  <button type="submit" class="btn btn-default">Verstuur</button>
</form>';
 $result .= '</div></div>';
        return $result;
    }
}