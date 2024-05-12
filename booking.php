<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Filmax Entertainment</title>
  <link rel="icon" href="img\assets\filmax-entertainment.ico" type="image/x-icon"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Plugins -->

  <style>
    /* Style the table */
    #movieTable {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    #movieTable th,
    #movieTable td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    /* Style the table header */
    #movieTable thead {
      background-color: black;
      color: white;
    }

    /* Style the table header cells */
    #movieTable th {
      font-weight: bold;
    }
  </style>
</head>

<body>
<nav class="navbar bg-black navbar-expand-md navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="img\assets\Filmax.png" height="30" alt="image">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav11"
        aria-controls="navbarNav11" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav11">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active">
            <a class="nav-link" href="adminhome.php">Dashboard <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="booking.php">Bookings</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <!-- Table -->
    <table id="movieTable" class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Ticket</th>
          <th>Movie</th>
          <th>Showtime</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <!-- Table data will be populated dynamically here -->
        <tr>
          <td>Sample Name</td>
          <td>Sample Ticket</td>
          <td>Sample Movie</td>
          <td>Sample Showtime</td>
          <td>Sample Status</td>
          <td><a href="view_movie.php" class="btn btn-info">
              <i class="fas fa-eye"></i> View
            </a></td>
        </tr>
        <!-- More rows here -->
      </tbody>
    </table>
  </div>

  <section>
    <footer class="pt-4 pb-4">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <p>© 2023 Filmax Entertainment. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </footer>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready(function () {
      $('#movieTable').DataTable();
    });

    document.addEventListener('DOMContentLoaded', function () {
      const logoutBtn = document.querySelector('.btn-outline-light');

      logoutBtn.addEventListener('click', function (e) {
        e.preventDefault();

        const confirmLogout = confirm('Are you sure you want to logout?');
        if (confirmLogout) {
          window.location.href = 'index.php';
        }
      });
    });
  </script>
</body>

</html>
