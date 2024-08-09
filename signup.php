<!-- Login Form


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>signup page</title>
</head>

<body>
    <div class="nav1">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid" style="width:90%">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item ">
                            <a class="nav-link" href="login.php">
                                <img class="default" src="image/default pic.jpg" alt="">
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">
                                <img class="flag" src="image/flag.png" alt="">
                            </a>
                        </li>


                    </ul>
                    <div class="logocont">
                        <a href="index.php">

                            <img class="logo" src="image/logo.webp" alt="hii">
                        </a>
                    </div>
                    <form class="d-flex search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <div class="cartcont">
                        <a href="">

                            <img class="cart" src="image/cart.png" alt="hii">
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="nav2">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid" style="width:90%">

                <a class="navbar-brand" href="index.php">Super kicks</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <div class="space">
                            <li class="nav-item ">
                                <a class="nav-link active" aria-current="page" href="#">New Arrival</a>
                            </li>

                        </div>
                        <div class="space">
                            <li class="nav-item ">
                                <a class="nav-link active" aria-current="page" href="#">NIKE</a>
                            </li>

                        </div>
                        <div class="space">
                            <li class="nav-item ">
                                <a class="nav-link active" aria-current="page" href="#">ADIDAS</a>
                            </li>

                        </div>
                        <div class="space">
                            <li class="nav-item ">
                                <a class="nav-link active" aria-current="page" href="#">blog</a>
                            </li>

                        </div>


                    </ul>


                </div>
            </div>
        </nav>


    </div>
    <div class="salecont">
        <a href="" class="sale">sales</a>
    </div>
    
<!-- Login Form -->
<div class="login-container">
  <h2> Create Account</h2>
  <form action="/signup" method="post">
    <div class="form-group">
      <label for="username">Username or Email</label>
      <input type="text" id="username" name="username" required>
    </div>
    
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
    </div>
    <div class="form-group">
      <label for="cpassword"> Confirm Password</label>
      <input type="password" id="password" name="cpassword" required>
    </div>
    
    <button type="submit">signup</button>
    
    
  </form>
</div>


<!-- Footer Section -->
<footer>
  <div class="footer-container">
    <!-- About Section -->
    <div class="footer-section">
      <h2>About Us</h2>
      <p>We offer the best collection of shoes for all occasions. Discover the latest trends and styles from top brands.</p>
    </div>

    <!-- Navigation Links -->
    <div class="footer-section">
      <h2>Quick Links</h2>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Shop</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>

    <!-- Contact Information -->
    <div class="footer-section">
      <h2>Contact Us</h2>
      <p>Email: support@superkicks.com</p>
      <p>Phone: +1 (800) 123-4567</p>
      <p>Address: 123 Shoe Lane, Fashion City, FC 12345</p>
    </div>

    <!-- Social Media Links -->
    <div class="footer-section">
      <h2>Follow Us</h2>
      <div class="social-media">
        <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
        <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
        <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
        <a href="#"><img src="linkedin-icon.png" alt="LinkedIn"></a>
      </div>
    </div>

    
  </div>
</footer>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>

</div>

