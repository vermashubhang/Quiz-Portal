<!DOCTYPE html>
<html lang="en">
    <head>
        <title>QUIZ MANIA</title>
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
			
			<li><?php 
				$user = $_GET['username'];
				//echo $user;
				echo "<a href='reg_index.php?username=$user' >" ; echo "HOME PAGE"; ?></a></li>
            <li><?php 
				$user = $_GET['username'];
				//echo $user;
				echo "<a href='about1.php?username=$user' >" ; echo "ABOUT US"; ?></a></li>
				
			<li><?php 
				$user = $_GET['username'];
				//echo $user;
				echo "<a href='forum.php?username=$user' >" ; echo "FORUM"; ?></a></li>
			
			<li><?php 
				$user = $_GET['username'];
				//echo $user;
				echo "<a href='profile.php?username=$user' >" ; echo "PROFILE"; ?></a></li>

			
			<li><?php 
				$user = $_GET['username'];
				//echo $user;
				echo "<a href='logout.php?username=$user' >" ; echo "LOG-OUT"; ?></a></li>
				
            </ul>                               
            </nav> 
            </header>

	<section>

<h1>USER PROFILE	
            </br>  
        <p><h3> 
		
		<section id="articles"> <!-- A new section with the articles -->

				<!-- Article 1 start -->

                <div class="line"></div>  <!-- Dividing line -->
                
                <article id="article1"> <!-- The new article tag. The id is supplied so it can be scrolled into view. -->
                 
                    
                    <div class="line"></div>
                    
                    <div class="articleBody clear">
                    
                    	<figure> <!-- The figure tag marks data (usually an image) that is part of the article -->
	                    	<a href="#"><img src="images/200.png" width="430" height="400" /></a>
                        </figure>
                        
                        <p>
						<h2>
						<?php
						
						//echo "<h1>Username :".$_GET['username'];
						$db = new SQLite3('mydb.db'); 
						$user=$_GET['username'];
						$sql = "SELECT * FROM registration where username='$user'";
						$result1 = $db->query($sql);
						while($res1 = $result1->fetchArray(SQLITE3_ASSOC)){
							echo "<font size=11><u>Username</u> : ".$res1['username']."</br>";
							echo "<u>Password</u> :".$res1['password']."</br>";
							echo "<u>Email Address</u> :".$res1['email']."</br>";
							echo "<u>Rank</u> :".$res1['rank']."</br>";
							echo "<u>Questions Solved</u> :".$res1['questions']."</br>";
							echo "<u>User No</u> :".$res1['user_no']."</br></br>";
							
						}
						?>
						</p>
                        
                    </div>
                </article>
                
			


            </section>
		
		
		
		
       </p>
</br>
</div>
     </section>
    
    
		
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.transform-0.9.3.min_.js"></script>
		<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="js/jquery.RotateImageMenu.js"></script>
<!-- Free template distributed by http://freehtml5templates.com --> 
</body>
</html>