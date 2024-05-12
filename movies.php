<?php
require_once 'config.php';

// Fetch movies from the database
$stmt = $dbh->prepare("SELECT * FROM tbl_movie");
$stmt->execute();
$movies = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Filmax Entertainment</title>
  <link rel="icon" href="img\assets\filmax-entertainment.ico" type="image/x-icon"/>
  <meta charset="utf-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet"
    href=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css ">
  <link rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

  <!-- Plugins -->
</head>

<body>
  <nav class="navbar bg-black navbar-expand-md navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="img\assets\Filmax.png"
          height="30" alt="image">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNav11" aria-controls="navbarNav11"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav11">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home <span
                class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="movies.php">Movies</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container mt-5">
    <h1 class="text-center mb-4"><strong>NOW SHOWING</strong></h1>
    <hr>
  <!-- Display movies in a 5x5 grid -->
<div class="row row-cols-1 row-cols-md-5 g-4">
  <?php if (empty($movies)) : ?>
    <div class="alert alert-warning" role="alert">
      <h4 class="alert-heading">No movies available!</h4>
    </div>
  <?php else : ?>
    <?php foreach ($movies as $movie) : ?>
      <div class="col">
        <div class="card h-100">
          <img src="<?php echo $movie['poster']; ?>" class="card-img-top" alt="Movie Poster" style="width: 240px; height: 350px;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $movie['title']; ?></h5>
            <div class="d-flex justify-content-center">
              <form action="bookshowtime.php" method="GET">
                <input type="hidden" name="id" value="<?php echo $movie['movie_id']; ?>">
                <button type="submit" class="btn btn-dark btn-sm">
                  View Details
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>


    <section class="">
      <footer class="pt-4 pb-4 ">
        <div class="container">
          <div class="row text-center">
            <div class="col">
              <p>© 2023 Filmax Entertainment. All Rights Reserved</p>
            </div>
          </div>
        </div>
      </footer>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"></script>


  </body>

</html>