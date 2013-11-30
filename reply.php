<?php

if (isset ( $_POST ['name'] )) {
	$ans = $_POST['name'];
	$id=$_GET['id'];
	$db = new SQLite3('mydb.db');
	$name = $_POST ['name'];
	$sql = "INSERT INTO answer VALUES ('$id','$ans')";
	$res2 = $db->query($sql);
	$count=0;
	
	$mysecretfileA = "forum.php";
	

	
	//if ($password == $mypasswordA && $username == $myusernameA) {
		header ( "Location: $mysecretfileA" );
		exit ();
	

}

?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <title>QUIZ? MANIA</title>
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
             <h1 class="text"><a href="#">QUIZ? MANIA</a></h1>
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
      <?php
	  
	  $ID = $_GET['id'];
	  $db = new SQLite3('mydb.db');
	$sql = "SELECT * FROM question WHERE q_id='$ID'";
	 $res2 = $db->query($sql);
	  $count1=0;
	  while($res = $res2->fetchArray(SQLITE3_ASSOC)){
				$count1 = $count1 + 1;
				//echo '<h2>'.$res['q_id'];
				echo '<h2><font size="6"><strong>Question</strong> :'.'</br>'.$res['q_details'].'</br>';
				}
	  
	  
	  
	  ?>
	  <p>&nbsp;</p>
      <p> Solution :      

      </p>
  
  

      <p>
	   <textarea rows="4" cols="50" name="name">
		</textarea>
	  
	  </p>
	  </br>
	  <p><input name='Submit' type='submit' value='Submit'></p>
	  
    </form>
    
    <p>
      <script type="text/javascript" src="js/jquery.RotateImageMenu.js"></script>
    </p>

    <!-- Free template distributed by http://freehtml5templates.com --> 
</body>
</html>