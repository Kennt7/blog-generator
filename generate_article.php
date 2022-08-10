
<?php
//input data through array
$array = Array(
"0" = Array(
    "Title": "";
    "Lead": "";
    "Keywords": "";
    "Content": "";
)

);

//encode array to json
$json = json_encode($array);
//display
echo "$json";
//generate json file
file_put_contents("geeks_data.json",$json);
?>