<?php
	$user = $_GET['username'];
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
<?php
	$user = $_GET['username'];

						//echo $name1.'</br>';
						//echo $name2;
						$db = new SQLite3('mydb.db');
							$i=0;
							$sql2 = "SELECT username FROM registration WHERE username='$user'";
							$res2 = $db->query($sql2);
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
							$i++;
							//echo '<h2>'.$i.'.    '.$res['Name'].'</h2></br>';
							}
							if($i==0)
							{
								echo "Username or Password\nNot Found";
								
								//header("Location: index.php");
								//sleep(1);
								//header("Location: login.php");
								exit(0);
							}
							else
							{
								//$_POST['username'] = $user;
								//$_POST['password'] = $pass;
								
							}
						
						
	
	
	
	
	
	
	
//echo $name5;
	//exit(0);
?>
	
	
	
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
		
<div class="rm_wrapper">

              <div id="rm_container" class="rm_container">
                <ul>
                  <li data-images="rm_container_1" data-rotation="-15"><img src="images/100.jpg"/></li>
                  <li data-images="rm_container_2" data-rotation="-5"><img src="images/100.jpg"/></li>
                  <li data-images="rm_container_3" data-rotation="5"><img src="images/100.jpg"/></li>
                  <li data-images="rm_container_4" data-rotation="15"><img src="images/100.jpg"/></li>
                </ul>
             
                <h2>Quiz? Mania 2013</h2>
                <div style="display:none;">
                  <div id="rm_container_1"> <img src="images/1.jpg"/> <img src="images/100.jpg"/> <img src="images/100.jpg"/> <img src="images/100.jpg"/> </div>
                  <div id="rm_container_2"> <img src="images/2.jpg"/> <img src="images/100.jpg"/> <img src="images/100.jpg"/> <img src="images/100.jpg"/> </div>
                  <div id="rm_container_3"> <img src="images/3.jpg"/> <img src="images/100.jpg"/> <img src="images/100.jpg"/> <img src="images/100.jpg"/> </div>
                  <div id="rm_container_4"> <img src="images/4.jpg"/> <img src="images/100.jpg"/> <img src="images/100.jpg"/> <img src="images/100.jpg"/> </div>
                </div>
              </div>
	          <div class="rm_nav"> <a id="rm_next" href="#" class="rm_next"></a> <a id="rm_prev" href="#" class="rm_prev"></a> </div>
	          <div class="rm_controls"> <a id="rm_play" href="#" class="rm_play">Play</a> <a id="rm_pause" href="#" class="rm_pause">Pause</a> </div>
          </div>
	<section>   
      <div class="section_box">
      <header>
      <h2>Movie Quiz<img src="images/folder_photoshop.png" alt="Design Photoshop" width="128" height="128" /></h2><p><span title="<h2>Images Free Lorem Ipsum</h2>Consectetur adipiscing elit. Quisque vulputate volutpat est. Quisque hendrerit, turpis auctor mattis posuere, massa odio luctus dolor, vitae venenatis lorem odio sed nulla.amet, consectetur adipiscing elit. Quisque vulputate volutpat est. Quisque hendrerit, turpis auctor mattis posuere, massa odio luctus dolor, vitae venenatis lorem odio sed nulla">
			<b></b> 
		</span> A series of clues to the identity of a famous person (or thing). Clues are given in order of descending difficulty. The earlier a team can identify the correct answer, the more points they are awarded.<br /></p>
    <div class="button"><?php 
	$user = $_GET['username'];
	echo "<a href='index2.php?username=$user' >" ; echo "Take Test"; echo "</a>"; ?></div>
     </header>
      
     </div>
     <div class="section_box">
      <header>
      <h2>Sports Quiz<img src="images/side.png" alt="Network" width="128" height="128" /></h2><p><span  title="<h2>Images Free Lorem Ipsum</h2>Consectetur adipiscing elit. Quisque vulputate volutpat est. Quisque hendrerit, turpis auctor mattis posuere, massa odio luctus dolor, vitae venenatis lorem odio sed nulla.amet, consectetur adipiscing elit. Quisque vulputate volutpat est. Quisque hendrerit, turpis auctor mattis posuere, massa odio luctus dolor, vitae venenatis lorem odio sed nulla">
			<b></b> 
		</span> Sport – comprising the statistics and minutiae of popular, well-known sports and general facts about others.</p>
     <div class="button"><?php 
	$user = $_GET['username'];
	echo "<a href='index3.php?username=$user' >" ; echo "Take Test"; echo "</a>";?></div>
     </header>
     </div>
     <div class="section_box">
      <header>
      <h2>Tech Quiz<img src="images/network_server.png" alt="Graphics" width="128" height="128" /></h2><p><span  title="<h2>Images Free Lorem Ipsum</h2>Consectetur adipiscing elit. Quisque vulputate volutpat est. Quisque hendrerit, turpis auctor mattis posuere, massa odio luctus dolor, vitae venenatis lorem odio sed nulla.amet, consectetur adipiscing elit. Quisque vulputate volutpat est. Quisque hendrerit, turpis auctor mattis posuere, massa odio luctus dolor, vitae venenatis lorem odio sed nulla">
			<b></b> 
		</span> There are two basic types of questions asked: tossups and bonuses. Other types of questions include lightning or rapid-fire rounds, which usually consist of ten questions and sixty seconds. </p>
     <div class="button"><?php 
	$user = $_GET['username'];
	echo "<a href='index4.php?username=$user' >" ; echo "Take Test"; echo "</a>";?></div>
     </header>
     </div>
     </section>
    </div>
    <hgroup>   
    <h1>&#8220;<I> Better the foot slip than the tongue </I>&#8221;</h1>
    </hgroup>
		<footer>
			 
        
  
 
    
    <div class="social"><a href="#"><img src="images/facebook_32.png" alt="Facebook" /></a><a href="#"><img src="images/skype_32.png" alt="Skype" /></a><a href="#"><img src="images/linkedin_32.png" alt="Linkedin" width="32" height="32" /></a><a href="#"><img src="images/digg_32.png" alt="Digg" width="32" height="32" /></a><a href="#"><img src="images/vimeo_32.png" alt="Vimeo" width="32" height="32" /></a></div>
       
          </div>          
        </footer>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.transform-0.9.3.min_.js"></script>
		<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="js/jquery.RotateImageMenu.js"></script>
<!-- Free template distributed by http://freehtml5templates.com --> 
</body>
</html>