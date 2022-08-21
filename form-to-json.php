<?php
if(isset($_REQUEST['submit'])){
    $data = '';
    $filename = "article.json";

    if(is_file($filename)){
        $data = file_get_contents($filename);
    }


$json_array = json_decode($data,true);
$json_array[] = array(
    'title' => $_REQUEST['title'],
    'lead' => $_REQUEST['lead'],
    'image' => $_REQUEST['image'],
    'keywords' => $_REQUEST['keywords'],
    'content' => $_REQUEST['content'],
);
file_put_contents($filename,json_encode($json_array));
}
?>