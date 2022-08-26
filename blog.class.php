<?php
class Blog{
    //properties
    public $title;
    public $lead;
    public $image;
    public $content;
    public $keywords;

    //methods
    function insertNewBlog($title,$lead,$image,$content,$keywords){
        //set
        $this->title = $title;
        $this->lead = $lead;
        $this->image = $image;
        $this->content = $content;
        $this->keywords = $keywords;
        //get      
    }
}

$blog = new Blog();
 $blog->insertNewBlog('titlsdfe','lead','image','content','keywords');
// echo $new_blog[""];

 //encode array to json
 $json = json_encode($blog);
 //display
 echo "$json";
 //generate json file
 file_put_contents("blogs.json",$json);

?>