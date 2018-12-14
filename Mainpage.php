<?php
 include("connect_db.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($conn,$_POST['user']);
      $password = mysqli_real_escape_string($conn,$_POST['pass']); 
	   $collage= mysqli_real_escape_string($conn,$_POST['code']); 
     
      $query = "SELECT username,password FROM administrator WHERE username = '$username'";
     $re = mysqli_query($conn,$query);
      $row = mysqli_fetch_array($re);
   //  $active = $row['active'];
   
  
   if($row["username"]==$username && $row["password"]==$password) {
	   
             echo"You are a validated user.";
	         header("location: administrator.php");
   }
    else
	{
   echo "Sorry, your credentials are not valid, Please try again.";
    }
   
   }
   ?>
   
  
<!DOCTYPEhtml>
<html>
<head>
<title> VISHALTECHNICAL WEBDEVELOPER QUIZ    </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link type="text/css" rel="stylesheet" href="Mainpage.css"/>
  <link type="text/css" rel="stylesheet" href="C:\Users\lenovo pc\Desktop\HTML\nasa.css"/>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

  <script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper1');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

  
  
 
  <style>
.footer {
 position:sticky;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: red;
   color: white;
   text-align: center;
}

	
	
.yellow{
	
	background-color:gray;
	color:white;
	width:330px;
	height:60px;
	text-align:center;
	position:absolute;
	border-top:2px solid black;	
	border-left:2px solid black;	
	border-right:2px solid black;	
	
}

ul {
    list-style-type: none;
	width:330px;
	
    margin-top:0px;
    padding: 0px;
	position:relative;;
	border-top:2px solid black;	
	border-left:2px solid black;	
	border-right:2px solid black;	
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
	  padding: 0px;
}
.p{
	padding:10px;
	
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding:0px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
#vishal{
	
	width:40px;
	height:30px;
	border:2px solid red;
	float:right;
	margin-right:300px;
	margin-top:200px;
	
}
#r1{
	background-color:#555;
	width:400px;
	height:300px;
	margin-top:0px;
	cursor:pointer;
	border:1px solid black;
	float:right;
	
	margin-right:100px;
	
	

}
#r{
	width:400px;
	height:300px;
	margin-top:0px;
	cursor:pointer;
	border:1px solid black;
	float:left;
	background-color:white;
	margin-left:100px;
	
	

}
P{
	
	width:400px;
	height:40px;
	color:white;
	background-color:blue;
	text-align:center;
}



.box {
    width: 500px;
    margin: 200px 0;
	display:none;
}

.shape1{
    position: relative;
    height: 150px;
    width: 150px;
    background-color: #0074d9;
    border-radius: 80px;
    float: left;
    margin-right: -50px;
}
.shape2 {
    position: relative;
    height: 150px;
    width: 150px;
    background-color: #0074d9;
    border-radius: 80px;
    margin-top: -30px;
    float: left;
}
.shape3 {
    position: relative;
    height: 150px;
    width: 150px;
    background-color: #0074d9;
    border-radius: 80px;
    margin-top: -30px;
    float: left;
    margin-left: -31px;
}
.shape4 {
    position: relative;
    height: 150px;
    width: 150px;
    background-color: #0074d9;
    border-radius: 80px;
    margin-top: -25px;
    float: left;
    margin-left: -32px;
}
.shape5 {
    position: relative;
    height: 150px;
    width: 150px;
    background-color: #0074d9;
    border-radius: 80px;
    float: left;
    margin-right: -48px;
    margin-left: -32px;
    margin-top: -30px;
}
.shape6 {
    position: relative;
    height: 150px;
    width: 150px;
    background-color: #0074d9;
    border-radius: 80px;
    float: left;
    margin-right: -20px;
    margin-top: -35px;
}
.shape7 {
    position: relative;
    height: 150px;
    width: 150px;
    background-color: #0074d9;
    border-radius: 80px;
    float: left;
    margin-right: -20px;
    margin-top: -57px;
}
.float {
    position: absolute;
    z-index: 2;
}

.form {
    margin-left: 145px;
	
}

*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	font-size:16px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 30%;
	font-size:20px;
}
button:hover {
    opacity: 0.8;
}

.new {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 40%;
	font-size:20px;
}
.new:hover {
    opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.avatar {
    width: 200px;
	height:200px;
    border-radius: 50%;
}

/* The Modal (background) */
.modal {
	display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

/* Modal Content Box */
.modal-content {
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 60%; 
	padding-bottom: 30px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}




</style>
</head>
<body bgcolor="black">
 <form  method=="">

<nav class="navbar navbar-inverse" style="border:1px solid black">
  <div class="container-fluid">
  
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ONLINE QUIZ TEST</a>
    </div>
	
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
	
	
	
	 <form class="navbar-form navbar-left" >
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
	
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
	
  </div>
</nav>
  <nav class="navbar navbar-inverse margin-top:10rem" style="background-color:gray; margin-top:0px; padding-top:0px;">
  <div class="container-fluid">
  
    <div class="navbar-header margin-right: 1rem">
      <a  class="btn btn-info btn-lg" style="width:180px;float:left;  margin-left:0px; background-color:blue; " href="#"> <span class="glyphicon glyphicon-th-list"></span> Dashboard</a>
    </div>
	
    <ul class="nav navbar-nav">
      <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li class="active"><a href="#"><span class="glyphicon glyphicon-menu-right"></span>Dashboard</a></li>
    </ul>
	
	
	
	
   
	
  </div>
  
</nav>


<div class="container" id="m">
   <div class="list-group">
    <a href="#" class="list-group-item active"><span class="glyphicon glyphicon-file"></span>  All Subjects</a>
    <a href="#" class="list-group-item list-group-item-default"><span class="glyphicon glyphicon-book"></span> Test practices </a>
    <a href="#" class="list-group-item list-group-item-default">Test about info</a>
    <a href="#" class="list-group-item list-group-item-default"> <span class="glyphicon glyphicon-question-sign"></span>  question categorise</a>
	<a href="#" class="list-group-item active"><span class="glyphicon glyphicon-time"> Time Stamp<span class="badge badge-danger">20</span></a>
    <a href="#" class="list-group-item list-group-item-default"><span class="glyphicon glyphicon-user"></span> new students<span class="badge badge-danger">10</span></a>
    <a href="#" class="list-group-item list-group-item-default"> <span class="glyphicon glyphicon-stats"></span>  Statics graphics</a>
	<a href="#" class="list-group-item active">Administration</a>
    <a href="#" class="list-group-item list-group-item-default">Social Media</a>
    <a href="#" class="list-group-item list-group-item-default"><span class="glyphicon glyphicon-user"></span>  Users</a>
	<a href="#" class="list-group-item list-group-item-default">Updates <span class="badge badge-danger">2</span></a>
   <a href="#" class="list-group-item list-group-item-default"><h6>News <span class="label label-default">New</span></h6></a>
  

  </div></div>
                    
  



<div id="r" onclick="document.getElementById('modal-wrapper').style.display='block'">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="user.png" width="300" height="300" alt="Card image cap">
  <div class="card-body">
    <p class="card-text" style=" border:1px solid black; padding-bottom:8px;">Only Student </p>
  </div>
  
</div> 
</div>

 <div id="r1" onclick="document.getElementById('modal-wrapper1').style.display='block'">
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="parental.png" width="300" height="300"  alt="Card image cap">
  <div class="card-body">
    <p class="card-text" style=" border:1px solid black; padding-bottom:8px;"> Only Administrator  </p>
  </div>
</div>
 </div>

 
                    
<br>
<br>
<br>
<br>
 <table>
                        <tr>
                        
					     <footer> 
						 
						 
                           <ul class="footer">
						   
						  <li > <h2>Follow</h2></li>
                          <li class="p"><a href="# "> <img src="pi.png" width="40" height="40"/></li>
						 <li class="p"><a href="# "><img src="tw.png" width="40" height="40"/></li>
						 <li class="p"><a href="# "><img src="gp.png" width="40" height="40"/></li>
						  <li class="p" ><a href="# "><img src="in.png" width="40" height="40"/></li>
						 <li class="p"><a href="# "><img src="fb.png" width="40" height="40"/></li>
						 
						</ul> 
						</footer>
						
                       </table>		


<div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="box">
                    <div class="shape1"></div>
                    <div class="shape2"></div>
                    <div class="shape3"></div>
                    <div class="shape4"></div>
                    <div class="shape5"></div>
                    <div class="shape6"></div>
                    <div class="shape7"></div>
                    <div class="float">
                        <form class="form" >
                            <div class="form-group">
                                <label for="username" class="text-white">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-white">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>	
  <h1 style="text-align:center; font-size:50px; color:#fff">Modal Popup Box Login Form</h1>



<div id="modal-wrapper" class="modal">

  
  <form class="modal-content animate" method="post" action="loginphp.php">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="1.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center">Student Login  Form</h1>
    </div>

    <div class="container">
      <input type="text" placeholder="Enter Username" name="username" required>
      <input type="password" placeholder="Enter Password" name="password" required>        
      <button type="submit">Login</button><br/>
      <input type="checkbox" style="margin:26px 30px;"> Remember me    
      <a href="#" style="text-decoration:none; float:right; margin-right:680px; margin-top:26px;">Forgot Password ?</a><br/><br/>
	<div class="new">   <a style="color:white;" href="http://localhost/php/phpquiz-master/ssignup.php">Create a new Account</a></div><br/>
    </div>
    
  </form>
  
</div> 
<div id="modal-wrapper1" class="modal">
  
  <form method="post"  class="modal-content animate">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper1').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="1.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center"> Administration Login  Form</h1>
    </div>

    <div class="container">
      <input type="text" placeholder="Enter Username" name="user" required>
      <input type="password" placeholder="Enter Password" name="pass" required> 
       <input type="password" placeholder="Enter Collage code" name="code" required>       	  
      <button type="submit">Login</button><br/>
      <input type="checkbox" style="margin:26px 30px;"> Remember me    
      <a href="#" style="text-decoration:none; float:right; margin-right:680px; margin-top:26px;">Forgot Password ?</a><br/><br/>
	<div class="new">   <a style="color:white;" href="http://localhost/php/phpquiz-master/signup.php">Create a new Account</a></div><br/>
    </div>
    
  </form>
  
</div>        
					 

           
</body>
</html>

