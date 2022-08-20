<?php
if(isset($_REQUEST['submit'])){
    $date = '';
    $filename = "article.json";

    if(is_file($filename)){
        $data = file_get_contents($filename);
    }


$json_array = json_decode($data,true);
$json_array[] = array(
    'code' => $_REQUEST['code'],
);
file_put_contents($filename,json_encode($json_array));
}
?>