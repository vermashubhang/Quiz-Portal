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

<script type = "text/javascript">

</script>




	  <FORM name ="form1" method ="post" action ="answer.php">
	  
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


if ( isset( $_POST['q2'] ) ) { 
						$name1 = $_POST['q1'];
                        		
						$name2 = $_POST['q2'];
                        echo $name1;
						echo "</br>";	
                        echo $name2;
                           }
$i=0;
								while($res = $res2->fetchArray(SQLITE3_ASSOC)){
		

	//$res1=array("","");
	//$res1 = $res2->fetchArray(SQLITE3_ASSOC);
	//$res=$res1[0];
	if($i==0)
	{
	
	
	$i=$i+1;
	
	if(isset( $_POST['q1'] )){
	if($res['option1']==$name1){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q1" value='.$res['option1'].' checked="checked">'.$res['option1'].'</br><input type="radio" name="q1" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q1" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q1" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}


  else if($res['option2']==$name1){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q1" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q1" value='.$res['option2'].' checked="checked">'.$res['option2'].'</br><input type="radio" name="q1" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q1" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}



	else if($res['option3']==$name1){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q1" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q1" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q1" value='.$res['option3'].' checked="checked">'.$res['option3'].'</br><input type="radio" name="q1" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}



	else{
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q1" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q1" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q1" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q1" value='.$res['option4'].' checked="checked">'.$res['option4'] ;
echo '</br></br>';
}
}
else
{
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q1" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q1" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q1" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q1" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';

}



}
else if($i==1)
	{
	$i=$i+1;
	
	
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q2" value='.$res['option1'].'>'.$res['option1'].'</br><input type="radio" name="q2" value='.$res['option2'].'>'.$res['option2'].'</br><input type="radio" name="q2" value='.$res['option3'].'>'.$res['option3'].'</br><input type="radio" name="q2" value='.$res['option4'].'>'.$res['option4'] ;
echo '</br></br>';
}
	}

?>


</br>
</br>

	  
    </FORM>
	  


<?php
?>



	  
	  
     </section>
    </div>
	
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.transform-0.9.3.min_.js"></script>
		<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="js/jquery.RotateImageMenu.js"></script>
<!-- Free template distributed by http://freehtml5templates.com --> 
</body>
</html>