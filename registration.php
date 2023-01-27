<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>

    <style>
     .formstylle
{
display:flex;
flex-direction: column;
	flex-wrap: nowrap;
	justify-content: center;
	align-items: center;
	align-content: center;
padding:  40px;
}

form 
{
  
border-radius:30px;
  border: solid orange 1px;
  background-color: orange;
  padding:  40px;
}
input 
{
  width:200px;
}
    </style>
        <!-- Font Awesome Icons -->
        <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <!-- Font family Oswald Regular -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/script.js"></script>
  </head>
  <body>
  <nav class="navbar">
      <div class="logo">
        <a href="index.html">
          <i class="fa-solid fa-music"></i> <br />
          Musicology
        </a>
      </div>
      <button onclick="openNav()" class="burger-menu">
        <i class="fa-solid fa-bars"></i>
      </button>
      <div id="links" class="links">
       <a href="#">Register</a>
      </div>
      <div class="search">
        <button>
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </div>
    </nav>
    <div class="formstylle">
    <form class="" action="" method="post" autocomplete="off">
      <label for="name">Name : </label> <br>
      <input type="text" name="name" id = "name" required value=""> <br>
      <label for="username">Username : </label> <br>
      <input type="text" name="username" id = "username" required value=""> <br>
      <label for="email">Email : </label> <br>
      <input type="email" name="email" id = "email" required value=""> <br>
      <label for="password">Password : </label> <br>
      <input type="password" name="password" id = "password" required value=""> <br>
      <label for="confirmpassword">Confirm Password : </label>  <br>
      <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br>
      <button type="submit" name="submit">Register</button>
    </form>
    <br>
    <a href="login.php">Login</a>
    </div>
  </body>
</html>
