<!DOCTYPE html >
<html lang="en">
    <head>
        <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="./css/style.css">
                        
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
                          
                            <title>Blog-generator</title>
                        </head>
                        <body>
                            <class="col-md-12">
                                <h1>Blog-generator</h1>
                                <nav class="navbar navbar-expand-sm bg-light">

                                    <div class="container-fluid bg-dark">
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
                                    </div>

                                </nav>

                                <main>
                                    <div class="container">
                                        <div class="row" style="width:25%">
                                            <button id="btn" type="button" class=" mt-3 mx-auto btn btn-secondary ">Read blogs</button>
                                        </div>
                                        <div class="row" id="carDiv"></div>

                                    </div>
                                    <!--contaner mt-3 end--->
                                </main>
                                <!-- <script src="./js\get_data_from_restapi.js"></script> -->
                                <script src="js\get_data_from_api.js"></script>
                            </body>
                        </html>