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
                                        <nav class="navbar navbar-expand-sm bg-light">

                                            <div class="container-fluid">
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
                                               
                                                <form action="generate_article.php" method="post" class="articleform">
                                                    <h2>Article-edit
                                                    </h2>
                                                    <label for="title_input">Title:</label>
                                                    <input type="text" name="title_input"></br>
                                            </br>
                                            <label for="lead_input">Lead:</label>
                                            <input type="text" name="lead_input"></br>
                                    </br>
                                    <label for="image_input">Image:</label>
                                    <input type="file" name="image_input"></br>
                            </br>
                       

                            <label for="keywords">Keywords:</label>
                            <input type="text" name="keywords"></br>
                       

                
                        <div class="col-md-6">
                        <label for="content_input">Content:</label></br>
                        <textarea rows="5" cols="40" name="content" form="articleform"></textarea>
                        <button type="submit" form="article_form"  value="Submit">Create</button>
                        </div>
                        </form>
                        </br>
                        </br>
                        </div>
                        </div>
                        <!--col-md-12 end-->
                        </body>
                        </html>