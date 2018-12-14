<?php 
include('connect_db.php');
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	  
$f=mysqli_real_escape_string($conn,$_POST['fname']);
$l=mysqli_real_escape_string($conn,$_POST['lname']);
$e=mysqli_real_escape_string($conn,$_POST['email']);
$u=mysqli_real_escape_string($conn,$_POST['username']);
$m=mysqli_real_escape_string($conn,$_POST['mobile']);
$p=mysqli_real_escape_string($conn,$_POST['pass']);
$c=mysqli_real_escape_string($conn,$_POST['branch']);

$sql="insert into resistration(first_name,last_name,email,user,password,mobile,course) values('$f','$l','$e','$u','$p','$m','$c')";
$result=mysqli_query($conn,$sql);
if($result)
{
	echo "insert is successfully";
	
}
else{
	
	echo " erro:".mysqli_error();
}
//$sql=mysqli_query($conn,"insert into administrator(system_id,fname,lname,email,username,password,collage_code,mobile) values('4343 ','$f','$l','$e','$u','$p','$c','$m')")or die(mysqli_error());

}

?>	
	
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
#page{
width:150px;height:50px;background-color:yellow;padding:2px;margin-left:50px;color:red; text-align:center;}
</style>
<body>

<h2>Modal Signup Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>
 <div id="page">  <a href="Mainpage.php" style="padding:2px;color:red;text-align:center;">Go to login page</a></div>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" method="post" >
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
	   <label for="email"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>
	   <label for="email"><b>First Name</b></label>
      <input type="text" placeholder="Enter Full Name" name="fname" required>
	   <label for="email"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Collage Code" name="lname" required>
	   <label for="email"><b>Branch Name</b></label>
      <input type="text" placeholder="Enter Branch Name" name="branch" required>
	  
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
	  

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
	  <label for="psw-repeat"><b>Mobile Number </b></label>
      <input type="text" placeholder=" Mobile Number" name="mobile" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
