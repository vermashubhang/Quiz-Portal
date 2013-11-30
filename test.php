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
			<li><a href="#">HOME PAGE</a></li>
            <li><a href="#">ABOUT US</a></li>
            <li><a href="#">FORUM</a></li>
            <li><a href="#">FAQ</a></li>
            </ul>                               
            </nav> 
            </header>

<section>   
      
	  
<!--<input type = "button" value = "Start" onclick = "startTimer(0)">
<input type = "button" value = "Stop" onclick = "clearInterval(ticker)"> 
<br><br>-->
<span  color="Red" id="countdown" style="font-weight: bold;"></span>
<br>
<span id="MPH" style="font-weight: bold;"></span>

<iframe src="http://free.timeanddate.com/countdown/i3kqlgp5/n1884/cf109/cm0/cu4/ct0/cs0/ca0/cr0/ss0/cac000/cpc000/pcfff/tcfff/fn2/fs100/szw576/szh243/tatTime%20left%20to%20Event%20in/tac000/tptTime%20since%20Event%20started%20in/tpc000/mac000/mpc000/isonowT00:00:00" frameborder="0" width="576" height="243" action="frame.php"></iframe>


<script type = "text/javascript">

var timeInSecs;
var timeInMin;
var ticker;

//function startTimer(secs){
timeInSecs = parseInt(15);
timeInMin = parseInt(0);
ticker = setInterval("tick()",1000);
tick();  // start the count right away

//}

function tick() {
var secs = timeInSecs;
var min=timeInMin;
if (min == 0 && secs==0) {  // stop at 20 seconds

var q1 = <?php
if(isset($_POST['q1']))
{
echo  $q1;
}  ?>
document.getElementById("countdown").innerHTML = min + " minutes "+ secs + " seconds\n\n";
document.getElementById("countdown").innerHTML = min + " minutes "+ secs + " seconds\n\n";
//alert ("Your time is up!");
window.alert('Succesfully Updated')

window.location.href='answer.php';
	//<input type="submit" form="form1">
clearInterval(ticker); // stop counting 
//document.getElementById("countdown").innerHTML = min + " minutes "+ secs + " seconds\n\n";
return false;
}
else {
if(timeInSecs==0){timeInSecs=60;timeInMin--;}
timeInSecs--;

//if(timeInSecs==60)timeInMin++;
}
if(min == 0)
{
document.getElementById("countdown").innerHTML = min + " minutes "+ secs + " seconds\n\n";
}
else
{
//if(secs%60==0)min=min+1;
document.getElementById("countdown").innerHTML = min + " minutes "+ secs + " seconds\n\n";

}
if (secs >0) {
//document.getElementById("MPH").innerHTML = (40.91/secs).toFixed(2) + "  mph";
}
}

</script>



	  <FORM name ="form1" method ="post" action ="">
	  
<?php
//startTimer(0);
$db = new SQLite3('mydb1.db');
$sql = "SELECT * FROM questions WHERE 1" ;




$res2 = $db->query($sql);
								$i=1;
								/*
for($i=0;$i<2;$i++)
{
if($

}*/
$i=0;
								while($res = $res2->fetchArray(SQLITE3_ASSOC)){
		

	//$res1=array("","");
	//$res1 = $res2->fetchArray(SQLITE3_ASSOC);
	//$res=$res1[0];
	if($i==0)
	{
	$i=$i+1;
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q1" value='.$res['option1'].'>'.$res['option1'].'</br><input type="radio" name="q1" value='.$res['option2'].'>'.$res['option2'].'</br><input type="radio" name="q1" value='.$res['option3'].'>'.$res['option3'].'</br><input type="radio" name="q1" value='.$res['option4'].'>'.$res['option4'] ;
echo '</br></br>';
}
else if($i==1)
	{
	$i=$i+1;
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q2" value='.$res['option1'].'>'.$res['option1'].'</br><input type="radio" name="q2" value='.$res['option2'].'>'.$res['option2'].'</br><input type="radio" name="q2" value='.$res['option3'].'>'.$res['option3'].'</br><input type="radio" name="q2" value='.$res['option4'].'>'.$res['option4'] ;
echo '</br></br>';
}

 // $_POST['q1'];
  			}

?>


</br>
</br>
<input type="submit" value="Submit">
	  
    </FORM>
	  


	  
	  
     </section>
    </div>
	
    <!--
		<footer>
			 
          <div class="footerwrap">
          <div id="footerleft">
      <h2>Imediacreatives</h2><br />
      <ul>
        <li><a href="...">Css3 Kitesurf</a></li><br />
        <li><a href="..."> Layout Design Gardenfolio</a></li><br />
        <li><a href="...">CSS3  BlueBand</a></li><br />
      <p>Title Templates  <a href="#"></a></p>
      </ul>
    </div>
    <div id="footermiddle">
      <h2>User Comments</h2><br />
      <ul>
        <li><a href="...">SWF XLM Sldeshow</a></li><br />
        <li><a href="...">Michelangelo</a></li><br />
        <li><a href="...">Another Templates Principato</a></li>
      </ul>
    </div>
    <div id="footerright">
      <h2>Design & Project</h2><br />
      <ul>
        <li><a href="...">CSS3 Design</a></li><br />
        <li><a href="...">Psd to CSS </a></li><br />
        <li><a href="...">Psd to Html5</a></li>
      </ul>
    </div>
    
    <div class="social"><a href="#"><img src="images/facebook_32.png" alt="Facebook" /></a><a href="#"><img src="images/skype_32.png" alt="Skype" /></a><a href="#"><img src="images/linkedin_32.png" alt="Linkedin" width="32" height="32" /></a><a href="#"><img src="images/digg_32.png" alt="Digg" width="32" height="32" /></a><a href="#"><img src="images/vimeo_32.png" alt="Vimeo" width="32" height="32" /></a></div>
       <details>    
       <p>Coder & Design<a href="http://www.imediacreatives.it" target="_blank"> Imediacreatives</a></p>
          </details>
          </div>          
        </footer>-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.transform-0.9.3.min_.js"></script>
		<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="js/jquery.RotateImageMenu.js"></script>
<!-- Free template distributed by http://freehtml5templates.com --> 
</body>
</html>