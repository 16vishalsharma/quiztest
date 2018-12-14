 <?php
   include("connect_db.php");
   session_start(); 
 if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
    $myusername =$_POST['username'];
     $mypassword =$_POST['password']; 
      // $myusername=$_SESSION['username'];
	   //  $mypassword=$_SESSION['password'];
      $sql = "SELECT user,password FROM resistration WHERE user = '$myusername'";
     $result = mysqli_query($conn,$sql);
	
	 
      $row = mysqli_fetch_array($result);
   //  $active = $row['active'];
   
   if($row["user"]==$myusername && $row["password"]==$mypassword)
   {
    echo"You are a validated user.";
	header("location: student.php");
   }
    else
	{
    echo  "Sorry, your credentials are not valid, Please try again.";
    }
   } 
    
 ?>