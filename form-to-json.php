<?php

if(isset($_REQUEST['submit'])){
    $data = '';
    $filename = "./blogs.json";

    if(is_file($filename)){
        $data = file_get_contents($filename);
    }


$json_array = json_decode($data,true);
$json_array[] = array(
    'title' => $_REQUEST['title_input'],
    'lead' => $_REQUEST['lead_input'],
    'image' => $_REQUEST['image_url'],
    'content' => $_REQUEST['content_input'],
    'keywords' => $_REQUEST['keywords_input'],
);
file_put_contents($filename,json_encode($json_array));
}

header(" Location:http://localhost/blog-generator/index.php");


?>