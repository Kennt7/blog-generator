<?php
$target_dir = "image/";
$target_file = $target_dir . basename($_FILES["image_upload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["image_upload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  // Check file size
if ($_FILES["image_upload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  // Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "webp" ) {
  echo "Sorry, only JPG, JPEG, PNG, WEBP & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["image_upload"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["image_upload"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

if(isset($_POST['submit'])){

    $new_blog = array(
        "title_input" => $_POST['title_input'],
        "lead_input" => $_POST['lead_input'],
        "image_upload" => $_POST['image_upload'],
        "content_input" => $_POST['content_input'],
        "keywords_input" => $_POST['keywords_input']
        
    );
    if(filesize("blogs.json")==0){
        $first_blog=array($new_blog);

        $json_store=$first_blog;
    }
    else{
        $old_blogs = json_decode(file_get_contents("./blogs.json"));
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