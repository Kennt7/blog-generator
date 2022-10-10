


/*php require 'form_to_json.php'*/

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet">
        <link rel="stylesheet" href="./css/style.css">
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Article-edit</title>

    </head>
    <body>
   
        <class="col-md-12">
            <div class="row">
                <h1>Blog-generator</h1>
                <nav class="navbar navbar-expand-sm bg-dark">

                    <div class="container">
                        <!-- Links -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="article.php">Article</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="article-edit.php">Article edit</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="article-treatment.php">Article treatment</a>
                            </li>
                        </ul>

                    </nav>

                    <div class="col-md-6">
                        <!---Form--->
                        <form action="form_convert_json.php" method="post" class="article_form">
                            <h2>Article-edit</h2>
                            Title:<input type="text" name="title_input"></br>
                    </br>
                    Lead:<input type="text" name="lead_input"></br>
            </br>
            Image:<input id="imagefile" type="url" name="image_url" multiple="multiple" accept="image/*,.webp/" alt="imagE"></br>
    </br>
    Keywords:<input type="text" name="keywords_input"></br>
 <!---Form--->

<<<<<<< HEAD
=======
Image:</br><input
    id="imagefile"
    type="file"
    name="image_input"
    multiple="multiple"
    accept="images/*,.webp/"
    alt="imag"></br>


Content:</br>
<textarea rows="5" cols="40" name="content_input"></textarea>
</br>
<button type="submit" name="submit">
Create</button>
<p class="error"><?php echo @$error ?></p>
<p class="success"><?php echo @$success ?></p>
</form></br> </br></div></div><!--col-md-12 end--></body></html>