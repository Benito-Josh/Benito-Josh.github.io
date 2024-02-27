<!DOCTYPE html>
<html>
  
<head>
  <meta chatset="UTF-8">
  <meta name="description" content="Donor Management System">
  <meta name="viewport" content="width=device-width, initial-scale-1.0">
  <meta name="author" content="Benito Joshua">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  
  

  <link rel="icon" type="image/x-icon" href="Image/favicon.ico">
  <link rel="stylesheet" href="css/Register.css"/>
  <title>Register</title>


  
<body>

<div class="Container">
<h1><i class="fa-regular fa-circle-user"></i>Sign up</h1>

<form method="post">

  <div class="txt">
<input type="text" name="Fname" required>
<span></span>
<label>First name</label>

</div>

  <div class="txt">
<input type="text" name="Lname" required>
<span></span>
<label>Last name</label>
  </div>

<div class="txt">
<input type="date" name="Date" required>
<span></span>
<label>Date of Birth</label>
</div>

<div class="select">
<label>Gender</label>
    <select name="Gender" id="gender" required>
    <option value="none" selected>Choose</option>
		<option value="Male">Male</option>
		<option value="female">Female</option> 
    </select>
</div>

<div class="txt">
<input type="email" name="Email"  required>
<span></span>
<label>Email</label>
</div>

<div class="txt">
<input text="username" name="Uname" required>
<span></span>
<label>Username</label>
</div>

<div class="txt">
<input type="password" name="Pass" required>
<span></span>
<label>Password</label>
</div>

<div class="txt">
<input type="password"  name="Conpass" required>
<span></span>
<label>Confirm password</label>
</div>


<input type="submit" name="Submit" value="Sign up">

</form>

</div>

<?php 


if (isset($_POST['Submit']))
{
    $fname=$_POST['Fname'];
    $lname=$_POST['Lname'];
    $date=$_POST['Date'];
    $gender=$_POST['Gender'];
    $email=$_POST['Email'];
    $uname=$_POST['Uname'];
    $pass=$_POST['Pass'];
    $conpass=$_POST['Conpass'];
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="dms";

    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn)
    {
        die("Error while connecting");
    }

    if($conn)
    {
    $qry="insert into donors (Fname,Lname,DOB,Gender,Email,Username,Password,Con_password) values ('$fname','$lname','$date','$gender','$email','$uname','$pass','$conpass')";
    $result=mysqli_query($conn,$qry);

    echo'<script>window.alert("Thank you for Signing Up...!")</script>';
  }

    else
    {
        echo'Errot while signning up!!';
    }
}
else
{
echo "";
}

?>



</body>


</html>