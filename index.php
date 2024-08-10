<?php
$welcome=false;
session_start();
if (isset($_SESSION['loggedin'])) {
    if ($_SESSION['loggedin']) {
        $welcome=true;
    } 
} 

?>
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

    <title>index page</title>
</head>

<body>

    <?php 
        if($welcome){
           echo' <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>welcome  </strong> you are logged in!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
        }
    ?>
    <?php require 'nav.php'?>
    <div class="imgcont">
        <div class="img1">
            <a href=""><img class="mainimg" src="image/main.webp" alt=""></a>
        </div>
        <div class="img2">
            <div class="sec1">
                <a href=""><img class="simg" src="image/img1.webp" alt=""></a>
            </div>
            <div class="sec2">
                <a href=""><img class="simg" src="image/img2.webp" alt=""></a>
            </div>
        </div>
    </div>

    <div class="arrival">
        <h3 class="heading">New Arrivals</h3>
        <a class="view">
            <p id="viewAllBtn">View More</p>
        </a>
    </div>
    <div class="shoes">
        <div class="card " style="width: 18rem;">
            <img src="image/s1.webp" class="card-img-top sideimage" alt="...">
            <div class="card-body">
                <p class="card-text">Nike</p>
                <h5 class="card-title">WMN'S CORTEZ LEATHER </h5>
                <p class="card-text">₹ 7,495.00</p>
                <!-- <button id="openModalBtn" class="btn btn-primary">Add to cart</button> -->
                <a class="btn btn-primary openModalBtn">Add to cart</a>
                <?php require 'selectsize.php'?>

                <!-- Modal -->
                <!-- <div id="sizeModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h2>Select Shoe Size</h2>
                        <div class="size-selector">
                            <h3>Available Sizes</h3>
                            <div class="size-options">
                                <button class="size-btn" data-size="6">6</button>
                                <button class="size-btn" data-size="7">7</button>
                                <button class="size-btn" data-size="8">8</button>
                                <button class="size-btn" data-size="9">9</button>
                                <button class="size-btn" data-size="10">10</button>
                            </div>
                        </div>
                        <div class="selected-size">
                            <p id="selectedSize">Selected Size: None</p>
                            <button id="addToCartBtn" disabled>Add to Cart</button>
                        </div>
                        <div class="go-back">
                            <button id="goBackBtn">Go Back</button>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="card " style="width: 18rem;">
            <img src="image/s2.webp" class="card-img-top sideimage" alt="...">
            <div class="card-body">
                <p class="card-text">Nike</p>
                <h5 class="card-title">INTIATOR</h5>
                <p class="card-text">₹ 6,495.00</p>
                <a class="btn btn-primary openModalBtn">Add to cart</a>
                
                <?php require 'selectsize.php'?>
            </div>
        </div>
        <div class="card " style="width: 18rem; ">
            <img src="image/s3.webp" class="card-img-top sideimage" alt="...">
            <div class="card-body">
                <p class="card-text">Nike</p>
                <h5 class="card-title">WMN'S DUNK LOW</h5>
                <p class="card-text">₹ 8,495.00</p>
                <a class="btn btn-primary openModalBtn">Add to cart</a>

                <?php require 'selectsize.php'?>
            </div>
        </div>
        <div class="card " style="width: 18rem; transition: opacity 0.3s ease-in-out;">
            <img src="image/s4.webp" class="card-img-top sideimage" alt="...">
            <div class="card-body">
                <p class="card-text">Jordan</p>
                <h5 class="card-title">AIR JORDAN 13</h5>
                <p class="card-text">₹ 9,495.00</p>
                <a class="btn btn-primary openModalBtn">Add to cart</a>

                <?php require 'selectsize.php'?>
            </div>
        </div>
    </div>
    <div class="shoes">
        <div class="card " style="width: 18rem;">
            <img src="image/s5.webp" class="card-img-top sideimage" alt="...">
            <div class="card-body">
                <p class="card-text">Nike</p>
                <h5 class="card-title">WMN'S CORTEZ LEATHER </h5>
                <p class="card-text">₹ 11,495.00</p>
                <a class="btn btn-primary openModalBtn">Add to cart</a>

                <?php require 'selectsize.php'?>

            </div>
        </div>
        <div class="card " style="width: 18rem;">
            <img src="image/s6.webp" class="card-img-top sideimage" alt="...">
            <div class="card-body">
                <p class="card-text">Nike</p>
                <h5 class="card-title">WHITE INTIATOR</h5>
                <p class="card-text">₹ 3,495.00</p>
                <a class="btn btn-primary openModalBtn">Add to cart</a>

                <?php require 'selectsize.php'?>
            </div>
        </div>
        <div class="card " style="width: 18rem; ">
            <img src="image/s7.webp" class="card-img-top sideimage" alt="...">
            <div class="card-body">
                <p class="card-text">Nike</p>
                <h5 class="card-title">WMN'S DUNK HIGH</h5>
                <p class="card-text">₹ 8,955.00</p>
                <a class="btn btn-primary openModalBtn">Add to cart</a>

                <?php require 'selectsize.php'?>
            </div>
        </div>
        <div class="card " style="width: 18rem; transition: opacity 0.3s ease-in-out;">
            <img src="image/s8.webp" class="card-img-top sideimage" alt="...">
            <div class="card-body">
                <p class="card-text">Jordan</p>
                <h5 class="card-title">AIR JORDAN 7</h5>
                <p class="card-text">₹ 11,495.00</p>
                <a class="btn btn-primary openModalBtn">Add to cart</a>
                <?php require 'selectsize.php'?>
            </div>
        </div>
    </div>
    <div class="shoes" id="hiddenContent" style="display:none">
        <div class="card " style="width: 18rem;">
            <img src="image/s1.webp" class="card-img-top sideimage" alt="...">
            <div class="card-body">
                <p class="card-text">Nike</p>
                <h5 class="card-title">WMN'S CORTEZ LEATHER </h5>
                <p class="card-text">₹ 7,495.00</p>
                <!-- <butto openModalBtn" class="btn btn-primary">Add to cart</button> -->
                <a class="btn btn-primary openModalBtn">Add to cart</a>

                <!-- Modal -->
                <?php require 'selectsize.php'?>
            </div>
        </div>
        <div class="card " style="width: 18rem;">
            <img src="image/s2.webp" class="card-img-top sideimage" alt="...">
            <div class="card-body">
                <p class="card-text">Nike</p>
                <h5 class="card-title">INTIATOR</h5>
                <p class="card-text">₹ 6,495.00</p>
                <a class="btn btn-primary openModalBtn">Add to cart</a>
                <?php require 'selectsize.php'?>
            </div>
        </div>
        <div class="card " style="width: 18rem; ">
            <img src="image/s3.webp" class="card-img-top sideimage" alt="...">
            <div class="card-body">
                <p class="card-text">Nike</p>
                <h5 class="card-title">WMN'S DUNK LOW</h5>
                <p class="card-text">₹ 8,495.00</p>
                <a class="btn btn-primary openModalBtn">Add to cart</a>

                <?php require 'selectsize.php'?>
            </div>
        </div>
        <div class="card " style="width: 18rem; transition: opacity 0.3s ease-in-out;">
            <img src="image/s4.webp" class="card-img-top sideimage" alt="...">
            <div class="card-body">
                <p class="card-text">Jordan</p>
                <h5 class="card-title">AIR JORDAN 13</h5>
                <p class="card-text">₹ 9,495.00</p>
                <a class="btn btn-primary openModalBtn">Add to cart</a>
                <?php require 'selectsize.php'?>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <?php require 'footer.php'?>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>