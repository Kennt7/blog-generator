<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Blog-generator</title>
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

</nav>
<div class="container mt-3">
  <h2>Blog Image</h2>
  <p>Image at the top (card-img-top):</p>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Blog image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
  <br>
  
  <p>Image at the bottom (card-img-bottom):</p>
  <div class="card" style="width:400px">
    <div class="card-body">
      <h4 class="card-title">Jane Doe</h4>
      <p class="card-text">Some example text some example text. Jane Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
    <img class="card-img-bottom" src="../bootstrap4/img_avatar6.png" alt="Blog image" style="width:100%">
  </div>
</div>
</body>
</html>