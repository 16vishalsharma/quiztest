
<?php
 include("connect_db.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT username,password FROM administrator WHERE username = '$myusername'";
     $result = mysqli_query($conn,$sql);
	 
      $row = mysqli_fetch_array($result);
   //  $active = $row['active'];
   
   if($row["username"]==$myusername && $row["password"]==$mypassword)
   {
    echo"You are a validated user.";
	header("location: administrator.php");
   }
    else
	{
    echo"Sorry, your credentials are not valid, Please try again.";
    }
      
    /*  $count = mysqli_num_rows($result);
	 
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: administrator.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }*/
	 
   }
   session_destroy();
   
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php //echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>