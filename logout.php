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
             <h1 class="text"><a href="#">QUIZ MANIA</a></h1>
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

<h1><strong><u>LOG-OUT SUCCESSFUL</u></strong>
            </br>
			<h2><u>LOG-IN</u>
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
      
      <p>Username :
        <label for="username"></label>
        <input type="text" name="username" id="username">
      </p>
<p>&nbsp;</p>
<p>Password :
  <label for="password"></label>
  <input type="password" name="password" id="password">
</p>
      <p>&nbsp;</p>
	  </br>
	  <p><input name='Submit' type='submit' value='Submit'></p>
	  
    </form>
    <p>&nbsp;</p>
  
  <?php

						
						
						
						if ( isset( $_POST['username'] ) ) { 
						$user = $_POST['username']; 
						$pass = $_POST['password'];
						$db = new SQLite3('mydb.db');
							$i=0;
							$sql2 = "SELECT username FROM registration WHERE username='$user' AND password='$pass'";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
							$i++;
							//echo '<h2>'.$i.'.    '.$res['Name'].'</h2></br>';
							}
							if($i==0)
							{
								echo "<h2>Wrong Username or Password\n";
							}
							else
							{
								header("Location: reg_index.php?username=".$user);
							}
						
						}	
						
						
						
						//header("Location: reg_index.php");
  
  ?>
    <p>
      <script type="text/javascript" src="js/jquery.RotateImageMenu.js"></script>
    </p>
	
    <!-- Free template distributed by http://freehtml5templates.com --> 
</body>
</html>