<?php

if(isset($_POST['submit'])){

    $new_blog = array(
        "title" =>$_POST['title_input'],
        "lead" =>$_POST['lead_input'],
        // "image" =>$_POST['image_url'],
        "content" =>$_POST['content_input'],
        "keywords" =>$_POST['keywords_input']
        
    );
    if(filesize("blogs.json")==0){
        $first_blog=array($new_blog);

        $json_store=$first_blog;
    }
    else{
        $old_blogs = json_decode(file_get_contents("blogs.json"));
        array_push($old_blogs,$new_blog);

        $json_store = $old_blogs;
    }
if(!file_put_contents("blogs.json",json_encode($json_store,JSON_PRETTY_PRINT), LOCK_EX)){
    //ha vmi nem jól működik kiíratjuk
    $error = "Error storing, please try again!";
}else{
    $success = "Blog stored!";
}
 
}
?>