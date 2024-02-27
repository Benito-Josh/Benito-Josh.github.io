<?php



$con=new mysqli("localhost","root","","dms");
if($con->connect_error)
{
	
	echo "Database Connection Failed";
}

else 
{
	echo "";
}

?>