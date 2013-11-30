<?php

if (isset ( $_POST ['name'] )) {
	$db = new SQLite3('mydb.db');
	$name = $_POST ['name'];
	$gender = $_POST ['gender']; 
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$user_no = 1;
	$questions = 0;
	$rank = 0;
	
	$sql = "SELECT * FROM registration";
	$res2 = $db->query($sql);
	$count=0;
	
	while($res = $res2->fetchArray(SQLITE3_ASSOC)){
		//echo '<h2>'.$res['Name'].'</br></br>';
		$count = $count + 1;
	}
	$rank = $count+1;
	$user_no=$rank;
	
	$sql = "INSERT INTO registration VALUES  ('$name','$gender','$email','$mobile','$username','$password','$user_no','$questions','$rank')";
	$res2 = $db->query($sql);
	$myusernameA = "akash1";
	$mypasswordA = "maurya1";
	
	
	
	
	
	$mysecretfileA = "http://localhost/imc/index.php";
	

	
	//if ($password == $mypasswordA && $username == $myusernameA) {
		header ( "Location: $mysecretfileA" );
		exit ();
	

}

?>










<!DOCTYPE html>
<html lang="en">
    <head>
        <title>QUIZ✍ MANIA</title>
		<meta charset="UTF-8" />
             <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="css/tooltip.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
<script type="text/javascript" src="tooltip.js"></script>
 <style type="text/css">
<!--
body {
	background-image: url(images/bg.jpg);
	background-repeat: repeat;
}


-->
    </style>
</head>
   <!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    <body>   
<div class="content">
	<header>      
            <logo>            
             <h1 class="text"><a href="#">QUIZ✍ MANIA</a></h1>
      </logo>
            <nav>            
            <ul>
			<li><a href="index.php">HOME PAGE</a></li>
            <li><a href="index1.php">ABOUT US</a></li>
            <li><a href="#">FORUM</a></li>
			<li><a href="registration.php">REGISTER</a></li>
			<li><a href="login.php">LOG IN</a></li>
            </ul>                               
            </nav> 
    </header>

	<section>

<h1><strong><u>REGISTRATION	</u></strong>
            </br>
    <p>
    <h3>
		                     
		
		
       </p>
       <p>&nbsp;</p>
<p>&nbsp;	 </p>
    <p>
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
       <script type="text/javascript" src="js/jquery.transform-0.9.3.min_.js"></script>
       <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
    </p>
    <form name="form2" method="post" action="">
      <p>&nbsp;</p>
	  
	  
	  
	  
	  
      <p><font size="4" face="Georgia, Arial, Garamond"> Name :      
         <input name="name" type="text" id="name" value="" style="width: 200px;">
      </p>
      <p>&nbsp;</p>
      <p>Gender :
        <input name="gender" type="text" id="gender" value="" style="width: 190px;">
      </p>
      <p>&nbsp;</p>
      <p>Email Id :
        <label for="email"></label>
        <input name="email" type="text" id="email" value="" size="50" style="width: 180px;" >
      </p>
      <p>&nbsp;</p>
      <p>Mobile :
        <label for="mobile"></label>
        <input type="text" name="mobile" id="mobile" style="width: 193px;">
      </p>
      <p>&nbsp;</p>
      <p>Username :
        <label for="username"></label>
        <input type="text" name="username" id="username" style="width: 162px;">
      </p>
<p>&nbsp;</p>
<p>Password :
  <label for="password"></label>
  <input type="password" name="password" id="password" style="width: 167px;">
</p>
      <p>&nbsp;</p>
	  </br>
	  <p><input name='Submit' type='submit' value='Submit'></p>
	  
    </form>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
   
	
    <p>&nbsp;</p>
    <p>
      <script type="text/javascript" src="js/jquery.RotateImageMenu.js"></script>
    </p>

    <!-- Free template distributed by http://freehtml5templates.com --> 
</body>
</html>