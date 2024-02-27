<!DOCTYPE html>
<html>
    <head>
        <meta chatset="UTF-8">
  <meta name="description" content="Donor Management System">
  <meta name="viewport" content="width=device-width, initial-scale-1.0">
  <meta name="author" content="Benito Joshua">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  
  

  <link rel="icon" type="image/x-icon" href="Image/favicon.ico">
  <link rel="stylesheet" href="css/Signup.css"/>
  <title>SignUp</title>
    </head>

    <body>
      <div class="Back">
        <a href="Homepage.html"><i class="fa fa-arrow-left"></i>Back</a>
        </div>

      <div class="Container">
        <h1>Sign In</h1>
        
      <form method="post">

        <div class="txt_field">
          <input type="Username" name="user"required>
          <span></span>
          <label>Username</label>
        </div>
        
        <div class="txt_field">
          <input type="password" name="pass" required>
          <span></span>
          <label>Password</label>
        </div>

        <input type="submit" name="Submit" value="login">

        <div class="Forgot_pass"><a href="#">Forgot Password</a></div>

        <div class="Create_acc"><a href="Register.php">Create account</a></div>

      </form>
    </div> 
        </body>
    
    <?php

    if(isset($_POST['Submit']))
    {
      $servername='localhost';
      $username='root';
      $password='';
      $dbname='dms';

      $user=$_POST['user'];
      $pass=$_POST['pass'];

      $con= new mysqli ($servername,$username,$password,$dbname);

      if(!$con)
      {
        die(mysqli_error($con));
      }

      else 
      {
        $query = mysqli_query($con, "SELECT * From donors Where Username ='$user' AND Password='$pass'");

        $rows = mysqli_num_rows($query);

        if ($rows == 1){

          echo '<script>alert("success")</script>';
        }

        else{

          echo '<script>alert("incorrect credentialls")</script>';
        }
      }

    }

    
  
    ?>


    </html>