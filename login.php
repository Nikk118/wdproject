<!-- Login Form -->
<?php
$login=false;
$error=false;
$alert=false;
if($_SERVER['REQUEST_METHOD']=='POST'){
  require 'dbcon.php';
  $username=$_POST['username'];
  $password=$_POST['password'];
  $sql="SELECT * FROM `shoes_login` WHERE `username`='$username' and `password`='$password'";
  $result=mysqli_query($conn,$sql);
  $num=mysqli_num_rows($result);
  if($num==1){
    $alert=true;
    session_start();
    $_SESSION['username']=$username;
    $_SESSION['loggedin']=true;
    header("location:index.php");
  }else{
    $error="account doesnt exist";
  }
}
?>
 <!doctype html>
<html lang="en">

<head> 
     <!-- Required meta tags  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>login page</title>
</head>

<body>
<?php  
  if($alert){
        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>sucess!</strong> You are now loggedin.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    if($error){
        echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>error</strong> '.$error.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>
    <?php require 'nav.php'?>
  
    
<!-- Login Form -->
<div class="login-container">
  <h2>Welcome Back!</h2>
  <form action="login.php" method="post">
    <div class="form-group">
      <label for="username">Username or Email</label>
      <input type="text" id="username" name="username" required>
    </div>
    
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
    </div>
    
    <button type="submit">Login</button>
    
    <div class="form-footer">
      <a href="#">Forgot your password?</a>
      <p>Don't have an account? <a href="signup.php">Sign up</a></p>
    </div>
  </form>
</div>


<!-- Footer Section -->
<?php require 'footer.php'?>







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

