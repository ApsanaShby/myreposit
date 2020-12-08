

<?php
 $con=mysqli_connect("localhost","root","");
 if(!$con) 
	 echo "Not Connected";
 if(!mysqli_select_db($con,"student"))
 {
 	  echo "DB not conected";
 }
 else
 {	
   $name=$_POST['name'];
   $gen=$_POST['gen']; 
   $email=$_POST['email'];
   $pass=$_POST['pass'];
   $pass2=$_POST['pass2'];
   $sql="INSERT INTO register(name,gen,email,pass,pass2) VALUES ('$name','$gen','$email','$pass','$pass2')";
   if(!mysqli_query($con,$sql))
    echo "Not inserted";
   else
    echo "inserted";
		   
 } 
header( "Location:http://localhost/student/login.html" );
?>
