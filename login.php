<?php
require 'config.php';
error_reporting(0);
if(!empty($_SESSION["name"])){
  header("location: index.html");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' AND password = '$password'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("location: kontakti.html");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
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
  width: 300px;
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
       <a href="#">Login</a>
      </div>
      <div class="search">
        <button>
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </div>
    </nav>
    <div class="formstylle">
    <form class="" action="" method="post" autocomplete="off">
      <label for="usernameemail">Username: </label>
      <input type="text" name="usernameemail" id = "usernameemail" required value="<?php echo $username; ?>"> <br>
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value="<?php echo $password; ?>"> <br>
      <button type="submit" name="submit">Login</button>
    </form>
    <br>
    <a href="registration.php">Registration</a>
</div>
  </body>
</html>
