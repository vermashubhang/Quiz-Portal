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
      
	  
<!--<input type = "button" value = "Start" onclick = "startTimer(0)">
<input type = "button" value = "Stop" onclick = "clearInterval(ticker)"> 
<br><br>-->
<span  color="Red" id="countdown" style="font-weight: bold;"></span>
<br>
<span id="MPH" style="font-weight: bold;"></span>

<script type = "text/javascript">

var timeInSecs;
var timeInMin;
var ticker;

//function startTimer(secs){
timeInSecs = parseInt(60);
timeInMin = parseInt(0);
ticker = setInterval("tick()",1000);
tick();  // start the count right away

//}

function tick() {
var secs = timeInSecs;
var min=timeInMin;
if (min == 0 && secs==0) {  // stop at 20 seconds



document.getElementById("countdown").innerHTML = min + " minutes "+ secs + " seconds\n\n";
//alert ("Your time is up!");

window.alert('Time Up  Submit!')
//window.location.href='answer.php';


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
document.getElementById("countdown").style.fontSize="xx-large";
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



<?php
$myname = $_GET['username'];
 echo "<FORM name ='form1' method ='post' action='backup_answer.php?username=$myname' >"
?>

 
<?php
//startTimer(0);
$db = new SQLite3('mydb3.db');
$sql = "SELECT * FROM questions WHERE 1" ;



$res2 = $db->query($sql);
$i=1;
	
$i=0;
							while($res = $res2->fetchArray(SQLITE3_ASSOC)){
		
	//$res1=array("","");
	//$res1 = $res2->fetchArray(SQLITE3_ASSOC);
	//$res=$res1[0];
	
	if($i==0)
	{
	$i=$i+1;
echo '<font size="5" face="Georgia, Arial, Garamond"> Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q1" value='.$res['option1'].'>'.$res['option1'].'</br><input type="radio" name="q1" value='.$res['option2'].'>'.$res['option2'].'</br><input type="radio" name="q1" value='.$res['option3'].'>'.$res['option3'].'</br><input type="radio" name="q1" value='.$res['option4'].'>'.$res['option4'] ;
echo '</br></br>';
}
else if($i==1)
	{
	$i=$i+1;
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q2" value='.$res['option1'].'>'.$res['option1'].'</br><input type="radio" name="q2" value='.$res['option2'].'>'.$res['option2'].'</br><input type="radio" name="q2" value='.$res['option3'].'>'.$res['option3'].'</br><input type="radio" name="q2" value='.$res['option4'].'>'.$res['option4'] ;
echo '</br></br>';
}

else if($i==2)
	{
	$i=$i+1;
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q3" value='.$res['option1'].'>'.$res['option1'].'</br><input type="radio" name="q3" value='.$res['option2'].'>'.$res['option2'].'</br><input type="radio" name="q3" value='.$res['option3'].'>'.$res['option3'].'</br><input type="radio" name="q3" value='.$res['option4'].'>'.$res['option4'] ;
echo '</br></br>';
}


else if($i==3)
	{
	$i=$i+1;
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q4" value='.$res['option1'].'>'.$res['option1'].'</br><input type="radio" name="q4" value='.$res['option2'].'>'.$res['option2'].'</br><input type="radio" name="q4" value='.$res['option3'].'>'.$res['option3'].'</br><input type="radio" name="q4" value='.$res['option4'].'>'.$res['option4'] ;
echo '</br></br>';
}

else if($i==4)
	{
	$i=$i+1;
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q5" value='.$res['option1'].'>'.$res['option1'].'</br><input type="radio" name="q5" value='.$res['option2'].'>'.$res['option2'].'</br><input type="radio" name="q5" value='.$res['option3'].'>'.$res['option3'].'</br><input type="radio" name="q5" value='.$res['option4'].'>'.$res['option4'] ;
echo '</br></br>';
}


else if($i==5)
	{
	$i=$i+1;
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q6" value='.$res['option1'].'>'.$res['option1'].'</br><input type="radio" name="q6" value='.$res['option2'].'>'.$res['option2'].'</br><input type="radio" name="q6" value='.$res['option3'].'>'.$res['option3'].'</br><input type="radio" name="q6" value='.$res['option4'].'>'.$res['option4'] ;
echo '</br></br>';
}


else if($i==6)
	{
	$i=$i+1;
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q7" value='.$res['option1'].'>'.$res['option1'].'</br><input type="radio" name="q7" value='.$res['option2'].'>'.$res['option2'].'</br><input type="radio" name="q7" value='.$res['option3'].'>'.$res['option3'].'</br><input type="radio" name="q7" value='.$res['option4'].'>'.$res['option4'] ;
echo '</br></br>';
}


else if($i==7)
	{
	$i=$i+1;
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q8" value='.$res['option1'].'>'.$res['option1'].'</br><input type="radio" name="q8" value='.$res['option2'].'>'.$res['option2'].'</br><input type="radio" name="q8" value='.$res['option3'].'>'.$res['option3'].'</br><input type="radio" name="q8" value='.$res['option4'].'>'.$res['option4'] ;
echo '</br></br>';
}



else if($i==8)
	{
	$i=$i+1;
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q9" value='.$res['option1'].'>'.$res['option1'].'</br><input type="radio" name="q9" value='.$res['option2'].'>'.$res['option2'].'</br><input type="radio" name="q9" value='.$res['option3'].'>'.$res['option3'].'</br><input type="radio" name="q9" value='.$res['option4'].'>'.$res['option4'] ;
echo '</br></br>';
}

else if($i==9)
	{
	$i=$i+1;
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q10" value='.$res['option1'].'>'.$res['option1'].'</br><input type="radio" name="q10" value='.$res['option2'].'>'.$res['option2'].'</br><input type="radio" name="q10" value='.$res['option3'].'>'.$res['option3'].'</br><input type="radio" name="q10" value='.$res['option4'].'>'.$res['option4'] ;
echo '</br></br>';
}






}

?>


</br>
</br>
<input type="submit" value="Submit">
	  
    </FORM>
	  


	  
	  
     </section>
    </div>
	
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.transform-0.9.3.min_.js"></script>
		<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="js/jquery.RotateImageMenu.js"></script>
<!-- Free template distributed by http://freehtml5templates.com --> 
</body>
</html>