<?php

if (isset ( $_POST ['name'] )) {
	$db = new SQLite3('mydb.db');
	$subject = $_POST ['name'];
	$textarea = $_POST ['textarea']; 
	$sql = "SELECT * FROM question";
	$res2 = $db->query($sql);
	$count=1;
	
	while($res = $res2->fetchArray(SQLITE3_ASSOC)){
		//echo '<h2>'.$res['Name'].'</br></br>';
		$count = $count + 1;
	}
	
	$sql = "INSERT INTO question VALUES  ('$count','$subject','$textarea')";
	$res2 = $db->query($sql);
	$mysecretfileA = "index.php";
	

	
	//if ($password == $mypasswordA && $username == $myusernameA) {
		//header ( "Location: $mysecretfileA" );
		//exit ();
	

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

<h1><strong><u>QUIZ MANIA FORUM</u></strong>
            </br>
    <p>
	
				<?php
				
				$db = new SQLite3('mydb.db');
				$sql = "SELECT * FROM question";
				$res2 = $db->query($sql);
				$count=0;
	
				while($res = $res2->fetchArray(SQLITE3_ASSOC)){
				$count = $count + 1;
				//echo '<h2>'.$res['q_id'];
				echo '<h2><font size="4" face="Georgia, Arial, Garamond"><u>TITLE</u></font> :<font size="6"><strong>'.$res['q_title']."</strong></font></br>";
				echo '<h2><font size="5" face="Georgia, Arial, Garamond">'.$res['q_details'].'';
				$count1=0;
				$check = $res['q_id'];
				$sql1 = "SELECT * FROM answer WHERE q_id = '$check'";
				$res3 = $db->query($sql1);
				while($res4 = $res3->fetchArray(SQLITE3_ASSOC)){
				$count1 = $count1 + 1;
				//echo '<h2>'.$res['q_id'];
				echo '<h2><font size="4" face="Georgia, Arial, Garamond"><strong>Answer</strong> </font>:'.$count1."</br>".$res4['ans'];
				}
				
				
				$temp6 = $res['q_id'];
				//echo $user;
				echo "<a href='reply.php?id=$temp6' >" ; echo "REPLY"; 
				echo "</a>";
				
				echo "</br><img src='images/line2.png' alt='''>";
				//echo "</br></br>";
				$count = $count + 1;
				}
				?>
       </p>
       <p>&nbsp;</p>
<p>&nbsp;	 </p>
    <p>
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
       <script type="text/javascript" src="js/jquery.transform-0.9.3.min_.js"></script>
       <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
    </p>
    <form name="form2" method="post" action="">
      <p></p>
      <p> Subject :      
         <input name="name" type="text" id="subject" value="">
      </p>
   <p></br>Question :</p>

      <p>
        <textarea rows="4" cols="50" name="textarea">
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