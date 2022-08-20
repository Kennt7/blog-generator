
<?php
//input data through array
$array = Array(
"0" => Array(
    "Title"=> "ize",
    "Lead"=>"valami",
    "Keywords"=> "valami",
    "Content"=> "hogyishivjak"
)

);

//encode array to json
$json = json_encode($array);
//display
echo "$json";
//generate json file
file_put_contents("article.json",$json);
?>