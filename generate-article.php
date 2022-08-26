
<?php
require("blog.class.php");
//input data through array
/* $array = Array(
"0" => Array(
    "Title"=> "ize",
    "Lead"=>"valami",
    "Keywords"=> "valami",
    "Content"=> "hogyishivjak"
)

); */

$new_blog =[
    "title"=> "ize",
    "lead"=>"valami",
    "image"=>"dasfd",
    "content"=> "hogyishivjak",
    "keywords"=> "valami",
];

$new_blog = new Blog('blogs.json');
$new_blog ->insertNewBlog($new_blog);
/*az első argumentum az egyedi azonosító, ami beazonosítja a célt, a 2. argumentum a property, amit módosítani akarok
a 3. argumentum amivel beállítom a property-t.
*/
/* $blog->updateBlog(1,'Lead','En');
$blog->deleteBlog(2);
$blog->deleteAllBlogs(); */
//néha amikor törlök egy objektumot a php különböző struktúrát ad vissza a json fájlban.

 //encode array to json
$json = json_encode($blog);
//display
echo "$json";
//generate json file
file_put_contents("blogs.json",$json); 
?>