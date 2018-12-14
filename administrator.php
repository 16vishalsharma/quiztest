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
   <style>
.footer {
 position:sticky;
   left:0;
   bottom: 0;
   width: 50%;
   color: white;
   
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
	width:180px;
	height:180px;
	margin-top:40px;
	cursor:pointer;
	border:1px solid black;
	float:left;
	background-color:white;
	margin-left:100px;
	
	

}
P{
	
	width:180px;
	height:50px;
	color:white;
	background-color:blue;
	text-align:center;
}
</style>
</head>
<body bgcolor="black">
 <form action="" method=="">

<nav class="navbar navbar-inverse" style="border:1px solid black">
  <div class="container-fluid">
  
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ONLINE QUIZ TEST</a>
    </div>
	
    <ul class="nav navbar-nav">
      <li class="active"><a href="Mainpage.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
	
	
	
	 <form class="navbar-form navbar-left" action="/action_page.php">
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
      <li class="active"><a href="Mainpage.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
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
<a href="alladministrator.php">  <img class="card-img-top" src="parental.png" width="150" height="150"  alt="Card image cap"></a>
  <div class="card-body">
    <p class="card-text" style=" border:1px solid black; padding-bottom:8px;"> All Administrator  </p>
  </div>
</div>
 </div>

 <div id="r">
<div class="card" style="width: 18rem;">
 <a href="   #"> <img class="card-img-top" src="quiz.jpg"  width="150" height="150"  alt="Card image cap"></a>
  <div class="card-body">
    <p class="card-text" style="border:1px solid black; padding-bottom:8px;">  Add More Subjects </p>
  </div>
</div> </div>
<div id="r">
<div class="card" style="width: 18rem;">
<a href="addQuestions.php">  <img class="card-img-top" src="q&a.jpg"  width="150" height="150" alt="Card image cap"></a>
  <div class="card-body">
    <p class="card-text" style=" border:1px solid black; padding-bottom:8px;">Add Questions in database   </p>
  </div>
</div> </div>




<div id="r">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="data1.jpg" width="150" height="150"  alt="Card image cap">
  <div class="card-body">
    <p class="card-text" style=" border:1px solid black; padding-bottom:8px;">  Machine Learning               </p>
  </div>
</div> </div>
<div id="r">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="datajpg.jpg"  width="150" height="150" alt="Card image cap">
  <div class="card-body">
    <p class="card-text" style=" border:1px solid black; padding-bottom:8px;" > Big Data Science     </p>
  </div>
</div> </div>
<br/>
<br/>
<div id="r">
<div class="card" style="width: 18rem;">
 <a href="userAnswers.php"> <img class="card-img-top" src="result.jpg" width="150" height="150" alt="Card image cap">
  <div class="card-body">
    <p class="card-text" style=" border:1px solid black; padding-bottom:8px;">Student current test result</p></a>
  </div>
</div> </div>
<div id="r">
<div class="card" style="width: 18rem;">
<a href="allstudent.php">  <img class="card-img-top" src="user.png"  width="150" height="150" alt="Card image cap">
  <div class="card-body">
    <p class="card-text" style=" border:1px solid black; padding-bottom:8px;"> All Students    </p></a>
  </div>
</div> </div>
<div id="r">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="test.jpg" width="150" height="150"  alt="Card image cap">
  <div class="card-body">
    <p class="card-text" style=" border:1px solid black; padding-bottom:8px;margin-button:20px;">Paractices Test </p>
  </div>
</div> </div>

 
                    
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
 <table>
                        <tr>
                        
					  <br/>
						<br/>
						 
						 
                           <footer class="container-fluid text-center" id="footer">
						   <ul>
						  <li ><h2>Follow</h2></li>
                          <li class="p"><a href="# "> <img src="pi.png" width="40" height="40"/></li>
						 <li class="p"><a href="# "><img src="tw.png" width="40" height="40"/></li>
						 <li class="p"><a href="# "><img src="gp.png" width="40" height="40"/></li>
						  <li class="p" ><a href="# "><img src="in.png" width="40" height="40"/></li>
						 <li class="p"><a href="# "><img src="fb.png" width="40" height="40"/></li>
						 
						</ul> 
						</footer>
						
                       </table>		
