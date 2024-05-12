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
    <div class="row">
      <!-- Left column for Booking Summary -->
      <div class="col-md-4">
        <h2><strong>Booking Summary</strong></h2>
        <p><strong>Title:</strong> <?php echo $title; ?></p>
        <p><strong>Cinema:</strong> <?php echo $cinema; ?></p>
        <p><strong>Date:</strong> <?php echo date('F j, Y', strtotime($date)); ?></p>
        <p><strong>Time:</strong> <?php echo date('g:i A', strtotime($time)); ?></p>
        <p><strong>Price:</strong> <?php echo $price; ?>.00</p>
        <p><strong>Subtotal:</strong> <span id="subtotalValue">0.00</span></p>
      </div>
      <!-- Right column for Personal Information -->
      <div class="col-md-7">
        <h5>Personal Information</h5>
        <form>
          <div class="form-floating mb-3">
            <input class="form-control" id="fullName" type="text" placeholder="Full Name" data-sb-validations="required" />
            <label for="fullName">Full Name</label>
            <div class="invalid-feedback" data-sb-feedback="fullName:required">Full Name is required.</div>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" />
            <label for="emailAddress">Email Address</label>
            <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
            <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select" id="paymentMethod" aria-label="Payment Method">
              <option value="Credit Card">Credit Card</option>
              <option value="Debit Card">Debit Card</option>
            </select>
            <label for="paymentMethod">Payment Method</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" id="cardNumber" type="text" placeholder="Credit Card Number" data-sb-validations="required" />
            <label for="cardNumber">CC Number</label>
            <div class="invalid-feedback" data-sb-feedback="cardNumber:required">Credit Card Number is required.</div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input class="form-control" id="cvv" type="text" placeholder="CVV" data-sb-validations="required" />
                <label for="cvv">CVV</label>
                <div class="invalid-feedback" data-sb-feedback="cvv:required">CVV is required.</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-floating mb-3">
                <select class="form-select" id="expirationMonth" aria-label="Expiration Month">
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
                <label for="expirationMonth">Expiration Month</label>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-floating mb-3">
                <input class="form-control" id="expirationYear" type="text" placeholder="Expiration Year" data-sb-validations="required" />
                <label for="expirationYear">Expiration Year</label>
                <div class="invalid-feedback" data-sb-feedback="expirationYear:required">Expiration Year is required.</div>
              </div>
            </div>
          </div>
          <div >
            <i> <strong> *Always check your order summary before proceeding to payment. <strong></i>    
        </div>
        <div >
          <button type="submit" class="btn btn-dark">Confirm Reservation</button>
        </div>
        </form>
      </div>
    </div>
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