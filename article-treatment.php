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
        <script src="js\create-article.js"></script>

        <title>Document</title>
    </head>
    <body>
        <class="col-md-12">
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
                </div>

            </main>
        </nav>
        <main>
            <article>

                <button class="btnCreate" onclick="createarticle()">Create article</button>
                <button class="btnUpdate">Update article</button>
                <button class="btnDelete">Delete Article</button>
            </article>

        </main>
    </body>
</html>