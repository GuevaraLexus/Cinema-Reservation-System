<?php
require_once 'config.php';

$showtimeId = $_GET['id'] ?? null;

if ($showtimeId) {
    // Fetch details of the specific showtime using the showtime_id
    $stmtShowtime = $dbh->prepare("SELECT * FROM tbl_showtimes WHERE showtime_id = :showtimeId");
    $stmtShowtime->bindParam(':showtimeId', $showtimeId);
    $stmtShowtime->execute();
    $showtimeDetails = $stmtShowtime->fetch(PDO::FETCH_ASSOC);

    if ($showtimeDetails) {
        // Retrieve additional details for the showtime, e.g., cinema, date, time, etc.
        $movieId = $showtimeDetails['movie_id'];
        $date = $showtimeDetails['date'];
        $time = $showtimeDetails['time'];
        $cinema = $showtimeDetails['theater'];
        $price = $showtimeDetails['price'];

        // Fetch movie details based on movie_id from tbl_movie
        $stmtMovie = $dbh->prepare("SELECT * FROM tbl_movie WHERE movie_id = :movieId");
        $stmtMovie->bindParam(':movieId', $movieId);
        $stmtMovie->execute();
        $movieDetails = $stmtMovie->fetch(PDO::FETCH_ASSOC);

        if ($movieDetails) {
            $title = $movieDetails['title'];
            $poster = $movieDetails['poster'];
        }
    }
}
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
      <a class="navbar-brand" href="index.php">
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
        <?php if (isset($showtimeDetails) && isset($movieDetails)) : ?>
            <div class="row">
                <div class="col-md-2">
                    <!-- Display movie poster -->
                    <img src="<?php echo $poster; ?>" alt="Movie Poster" class="img-fluid" style="width: 125px; height: 175px;">
                </div>
                <div class="col-md-8">
                    <!-- Display movie and showtime details -->
                    <h1><strong><?php echo $title; ?></strong></h1>
                    <p> <?php echo $cinema ?> - <?php echo date('F j, Y', strtotime($date)); ?> <?php echo date('g:i A', strtotime($time)); ?> </p>
                    <hr>
                    <div>
                    <h5><strong>SELECT SEATS</strong></h5>
                    <i> *Please ensure that you are selecting seats for the correct date and time your choice </i>
                    </div>
                    <br>
                    <div class="row">
                    <div class="col-md-2">
                        <label class="form-label" for="price"><strong>Price</strong></label>
                        <p id="priceValue"><?php echo $price ?>.00</p>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label" for="typeNumber"><strong>Qty</strong></label>
                        <div class="form-outline" style="width: 10rem;">
                        <input min="1" max="10" type="number" id="typeNumber" class="form-control" value="1" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label" for="subtotal"><strong>Subtotal</strong></label>
                        <p id="subtotalValue"><?php echo $price ?>.00</p>
                    </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12 text-end">
                        <a href="bookseat.php" class="btn btn-dark me-2">Next</a>
                    </div>
                </div>
            </div>
        </div>
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

    <script>
    function calculateSubtotal() {
        var price = parseFloat(document.getElementById('priceValue').innerText);
        var quantity = parseInt(document.getElementById('typeNumber').value);
        var subtotal = price * quantity;

        if (!isNaN(subtotal)) {
            document.getElementById('subtotalValue').innerText = subtotal.toFixed(2); // Display subtotal with 2 decimal places
        } else {
            document.getElementById('subtotalValue').innerText = '0'; // Show '0' if calculation fails
        }
    }

    document.getElementById('typeNumber').addEventListener('input', calculateSubtotal);
</script>

  </body>

</html>