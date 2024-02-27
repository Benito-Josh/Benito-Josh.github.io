<!DOCTYPE html>
<html>
  
<head>
  <meta chatset="UTF-8">
  <meta name="description" content="Donor Management System">
  <meta name="viewport" content="width=device-width, initial-scale-1.0">
  <meta name="author" content="Benito Joshua">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  
  

  <link rel="icon" type="image/x-icon" href="Image/favicon.ico">
  <link rel="stylesheet" href="css/Users.css"/>
  <title>Users</title>
 
</head>

<body>

<div class = 'container'>
    <table id="Users">
    <thead>
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        <?php
        
        $con = new  mysqli ('localhost','root','','dms');
        $qry="select * FROM donors";
        $results=mysqli_query($con,$qry);

        if($results)
        {
            while ($row=mysqli_fetch_assoc($results)){
                $did=$row['DID'];
                $fname=$row['Fname'];
                $lname=$row['Lname'];
                $dob=$row['DOB'];
                $gender=$row['Gender'];
                $email=$row['Email'];
                $username=$row['Username'];
                $pass=$row['Password'];
                
                echo'
                <tr>
                <td>'.$did.'</td>
                <td>'.$fname.'</td>
                <td>'.$lname.'</td>
                <td>'.$dob.'</td>
                <td>'.$gender.'</td>
                <td>'.$email.'</td>
                <td>'.$username.'</td>
                <td>'.$pass.'</td>
                <td><button class="btn btn-primary"> <a href=""> Update</a></button></td>
                <td><button class="btn btn-danger"><a href=""> Delete </a></button></td>
                
                </tr>';
            }
        }
?>

        


    </tbody>
    </table>

     
</div>


        
</body>

