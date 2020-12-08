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
   $user=$_POST['user'];
   $pass=$_POST['pass']; 
 
   $sql="SELECT * FROM register";
   $result= \mysqli_query($con,$sql);
   while( $row = mysqli_fetch_assoc($result))
    {
    $user= $row['user'];
    $pass= $row['pass'];
     if($user == $user & $pass == $pass)
      {
        
	 header("Location:http://localhost/student/questions.html");

      }   
  
     else
      {
     echo "not valid";
      }
    }   
 
  $sql="INSERT INTO login(user,pass) VALUES ('$user','$pass')";
 } 
?>