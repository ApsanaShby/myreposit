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
   $ans1=$_POST['ans1'];
   $ans2=$_POST['ans2'];	
   $ans3=$_POST['ans3'];	
   $ans4=$_POST['ans4'];	
   $ans5=$_POST['ans5'];	
   $ans6=$_POST['ans6'];	
   $ans7=$_POST['ans7'];	
   $ans8=$_POST['ans8'];	
   $ans9=$_POST['ans9'];	
   $ans10=$_POST['ans10'];		
   $sql="INSERT INTO questions(ans1,ans2,ans3,ans4,ans5,ans6,ans7,ans8,ans9,ans10) VALUES ('$ans1','$ans2','$ans3','$ans4','$ans5','$ans6','$ans7','$ans8','$ans9','$ans10')";
   if(!mysqli_query($con,$sql))
    echo "Not inserted";
   else
    echo "inserted";
 }
 header( "Location:http://localhost/student/login.html" );

?> 