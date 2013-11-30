<!DOCTYPE html>
<html lang="en">
    <head>
        <title>QUIZ  MANIA</title>
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

</script>




	  <FORM name ="form1" method ="post" action ="answer.php">
	  
<?php
//startTimer(0);
$temp=0;
$db = new SQLite3('mydb3.db');
$myname = $_GET['username'];
$sql = "SELECT * FROM questions WHERE 1" ;
$sql3 = "SELECT * FROM registration WHERE username='$myname'" ;


$corr=0;
$res2 = $db->query($sql);
$res3 = $db->query($sql3);
								$i=1;
								/*
for($i=0;$i<2;$i++)
{
if($

}*/



    if ( isset( $_POST['q1'] ) ) { 
						$name1 = $_POST['q1'];
						}
						
	if ( isset( $_POST['q2'] ) ) { 			
                       	$name2 = $_POST['q2'];
						}
						
						
	if ( isset( $_POST['q3'] ) ) { 
						
                       	$name3 = $_POST['q3'];
						//echo $name3;
	}
						
	if ( isset( $_POST['q4'] ) ) { 
						
             $name4 = $_POST['q4'];
			///echo $name3;
	}
	if ( isset( $_POST['q5'] ) ) { 
		
              	$name5 = $_POST['q5'];
						//echo $name3;
		}
		if ( isset( $_POST['q6'] ) ) { 
						
                 	$name6 = $_POST['q6'];
						//echo $name3;
		}
		
    if ( isset( $_POST['q7'] ) ) { 
						$name7 = $_POST['q7'];
						}
						
	if ( isset( $_POST['q8'] ) ) { 			
                       	$name8 = $_POST['q8'];
						}
						
						
	if ( isset( $_POST['q9'] ) ) { 
						
                       	$name9 = $_POST['q9'];
						//echo $name3;
	}
						
	if ( isset( $_POST['q10'] ) ) { 
						
             $name10 = $_POST['q10'];
			///echo $name3;
	}
		
		
      //                  echo $name1;
		//				echo "</br>";	
    //                    echo $name2;
                           
$i=1;
								while($res = $res2->fetchArray(SQLITE3_ASSOC)){
		
	
	//$res1=array("","");
	//$res1 = $res2->fetchArray(SQLITE3_ASSOC);
	//$res=$res1[0];
	if($i==1)
	{	
	echo "<font size='5' face='Georgia, Arial, Garamond'>";
	if(isset( $_POST['q1'] ) && $res['option1']==$name1){
echo '<font size="5" face="Georgia, Arial, Garamond"> <u><Strong>Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q1" value='.$res['option1'].' checked="checked">'.$res['option1'].'</br><input type="radio" name="q1" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q1" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q1" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}


  else if(isset( $_POST['q1'] ) && $res['option2']==$name1){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q1" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q1" value='.$res['option2'].' checked="checked">'.$res['option2'].'</br><input type="radio" name="q1" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q1" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}



	else if(isset( $_POST['q1'] ) && $res['option3']==$name1){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q1" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q1" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q1" value='.$res['option3'].' checked="checked">'.$res['option3'].'</br><input type="radio" name="q1" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}



	else if(isset( $_POST['q1'] ) && $res['option4']==$name1){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q1" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q1" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q1" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q1" value='.$res['option4'].' checked="checked">'.$res['option4'] ;
echo '</br></br>';
}

else
{
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q1" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q1" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q1" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q1" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';

}

if(isset( $_POST['q1'] ))
{
if($name1==$res ['correct'] )
{
echo "Your answer is Correct</br></br></br></br>";
$corr=$corr+1;
}
else
{
echo 'Your answer is Wrong </br></br>';
echo 'Correct answer is '.$res ['correct'].'</br></br></br></br>';

}
}
else
{

echo 'You have not attempted question. </br></br>';
echo 'Correct answer is '.$res ['correct'].'</br></br></br></br>';


}



}

else if($i==2)
	{

//$i=$i+1;
	if(isset( $_POST['q2'] ) && $res['option1']==$name2){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q2" value='.$res['option1'].' checked="checked">'.$res['option1'].'</br><input type="radio" name="q2" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q2" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q2" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}


  else if(isset( $_POST['q2'] ) && $res['option2']==$name2){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q2" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q2" value='.$res['option2'].' checked="checked">'.$res['option2'].'</br><input type="radio" name="q2" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q2" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}



	else if(isset( $_POST['q2'] ) && $res['option3']==$name2){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q2" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q2" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q2" value='.$res['option3'].' checked="checked">'.$res['option3'].'</br><input type="radio" name="q2" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}



	else if(isset( $_POST['q2'] ) && $res['option4']==$name2){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q2" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q2" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q2" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q2" value='.$res['option4'].' checked="checked">'.$res['option4'] ;
echo '</br></br>';
}

else
{
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q2" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q2" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q2" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q2" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
 }

 if(isset( $_POST['q2'] )){
if($name2==$res ['correct'])
{
echo "Your answer is Correct</br></br></br></br>";
$corr=$corr+1;
}
else
{
echo 'Your answer is Wrong </br></br>';
echo 'Correct answer is  '.$res ['correct'].'</br></br></br></br>';
}
}

else
{

echo 'You have not attempted question. </br></br>';
echo 'Correct answer is '.$res ['correct'].'</br></br></br></br>';


}

 
}


else if($i==3) 
	{
		
	//$i=$i+1;

	if(isset( $_POST['q3'] ) &&   $res['option1']==$name3){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q3" value='.$res['option1'].' checked="checked">'.$res['option1'].'</br><input type="radio" name="q3" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q3" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q3" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}


  else if( isset( $_POST['q3'] ) && $res['option2']==$name3){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q3" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q3" value='.$res['option2'].' checked="checked">'.$res['option2'].'</br><input type="radio" name="q3" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q3" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}



	else if(isset( $_POST['q3'] ) && $res['option3']==$name3){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q3" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q3" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q3" value='.$res['option3'].' checked="checked">'.$res['option3'].'</br><input type="radio" name="q3" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}



	else if(isset( $_POST['q3'] ) && $res['option4']==$name3){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q3" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q3" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q3" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q3" value='.$res['option4'].' checked="checked">'.$res['option4'] ;
echo '</br></br>';
}

else
{

echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q3" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q3" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q3" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q3" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
 }

if(isset( $_POST['q3'] )){ 
if($name3==$res ['correct'])
{
echo "Your answer is Correct</br></br></br></br>";
$corr=$corr+1;
}
else
{
echo 'Your answer is Wrong </br></br>';
echo 'Correct answer is  '.$res ['correct'].'</br></br></br></br>';

}
}

else
{

echo 'You have not attempted question. </br></br>';
echo 'Correct answer is '.$res ['correct'].'</br></br></br></br>';


}



}

else if($i==4) 
	{
		
	//$i=$i+1;

	if(isset( $_POST['q4'] ) &&   $res['option1']==$name4){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q4" value='.$res['option1'].' checked="checked">'.$res['option1'].'</br><input type="radio" name="q4" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q4" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q4" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}


  else if( isset( $_POST['q4'] ) && $res['option2']==$name4){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q4" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q4" value='.$res['option2'].' checked="checked">'.$res['option2'].'</br><input type="radio" name="q4" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q4" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}



	else if(isset( $_POST['q4'] ) && $res['option3']==$name4){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q4" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q4" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q4" value='.$res['option3'].' checked="checked">'.$res['option3'].'</br><input type="radio" name="q4" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}



	else if(isset( $_POST['q4'] ) && $res['option4']==$name4){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q4" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q4" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q4" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q4" value='.$res['option4'].' checked="checked">'.$res['option4'] ;
echo '</br></br>';
}

else
{

echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q4" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q4" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q4" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q4" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
 }

if(isset( $_POST['q4'] ))
{ 
if($name4==$res ['correct'])
{
echo "Your answer is Correct</br></br></br></br>";
$corr=$corr+1;
}
else
{
echo 'Your answer is Wrong </br></br>';
echo 'Correct answer is  '.$res ['correct'].'</br></br></br></br>';

}
}

else
{

echo 'You have not attempted question. </br></br>';
echo 'Correct answer is '.$res ['correct'].'</br></br></br></br>';


}


}




else if($i==5) 
	{
		
	//$i=$i+1;

	if(isset( $_POST['q5'] ) &&   $res['option1']==$name5){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q5" value='.$res['option1'].' checked="checked">'.$res['option1'].'</br><input type="radio" name="q5" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q5" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q5" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}


  else if( isset( $_POST['q5'] ) && $res['option2']==$name5){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q5" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q5" value='.$res['option2'].' checked="checked">'.$res['option2'].'</br><input type="radio" name="q5" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q5" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}



	else if(isset( $_POST['q5'] ) && $res['option3']==$name5){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q5" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q5" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q5" value='.$res['option3'].' checked="checked">'.$res['option3'].'</br><input type="radio" name="q5" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}



	else if(isset( $_POST['q5'] ) && $res['option4']==$name5){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q5" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q5" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q5" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q5" value='.$res['option4'].' checked="checked">'.$res['option4'] ;
echo '</br></br>';
}

else
{

echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q5" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q5" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q5" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q5" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
 }

if(isset( $_POST['q5'] ))
{ 
if($name5==$res ['correct'])
{
echo "Your answer is Correct</br></br></br></br>";
$corr=$corr+1;
}
else
{
echo 'Your answer is Wrong </br></br>';
echo 'Correct answer is  '.$res ['correct'].'</br></br></br></br>';

}
}

else
{

echo 'You have not attempted question. </br></br>';
echo 'Correct answer is '.$res ['correct'].'</br></br></br></br>';


}


}


else if($i==6) 
	{
		
	//$i=$i+1;

	if(isset( $_POST['q6'] ) &&   $res['option1']==$name6){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q6" value='.$res['option1'].' checked="checked">'.$res['option1'].'</br><input type="radio" name="q6" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q6" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q6" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}


  else if( isset( $_POST['q6'] ) && $res['option2']==$name6){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q6" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q6" value='.$res['option2'].' checked="checked">'.$res['option2'].'</br><input type="radio" name="q6" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q6" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}



	else if(isset( $_POST['q6'] ) && $res['option3']==$name6){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q6" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q6" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q6" value='.$res['option3'].' checked="checked">'.$res['option3'].'</br><input type="radio" name="q6" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}



	else if(isset( $_POST['q6'] ) && $res['option4']==$name6){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q6" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q6" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q6" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q6" value='.$res['option4'].' checked="checked">'.$res['option4'] ;
echo '</br></br>';
}

else
{

echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q6" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q6" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q6" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q6" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
 }

if(isset( $_POST['q6'] ))
{ 
if($name6==$res ['correct'])
{
echo "Your answer is Correct</br></br></br></br>";
$corr=$corr+1;
}
else
{
echo 'Your answer is Wrong </br></br>';
echo 'Correct answer is  '.$res ['correct'].'</br></br></br></br>';

}
}

else
{

echo 'You have not attempted question. </br></br>';
echo 'Correct answer is '.$res ['correct'].'</br></br></br></br>';


}

}

else if($i==7) 
	{
		
	//$i=$i+1;

	if(isset( $_POST['q7'] ) &&   $res['option1']==$name7){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q7" value='.$res['option1'].' checked="checked">'.$res['option1'].'</br><input type="radio" name="q7" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q7" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q7" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}


  else if( isset( $_POST['q7'] ) && $res['option2']==$name7){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q7" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q7" value='.$res['option2'].' checked="checked">'.$res['option2'].'</br><input type="radio" name="q7" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q7" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}



	else if(isset( $_POST['q7'] ) && $res['option3']==$name7){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q7" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q7" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q7" value='.$res['option3'].' checked="checked">'.$res['option3'].'</br><input type="radio" name="q7" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}



	else if(isset( $_POST['q7'] ) && $res['option4']==$name7){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q7" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q7" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q7" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q7" value='.$res['option4'].' checked="checked">'.$res['option4'] ;
echo '</br></br>';
}

else
{

echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q7" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q7" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q7" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q7" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
 }

if(isset( $_POST['q7'] ))
{ 
if($name7==$res ['correct'])
{
echo "Your answer is Correct</br></br></br></br>";
$corr=$corr+1;
}
else
{
echo 'Your answer is Wrong </br></br>';
echo 'Correct answer is  '.$res ['correct'].'</br></br></br></br>';

}
}

else
{

echo 'You have not attempted question. </br></br>';
echo 'Correct answer is '.$res ['correct'].'</br></br></br></br>';


}

}



else if($i==8) 
	{
		
	//$i=$i+1;

	if(isset( $_POST['q8'] ) &&   $res['option1']==$name8){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q8" value='.$res['option1'].' checked="checked">'.$res['option1'].'</br><input type="radio" name="q8" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q8" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q8" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}


  else if( isset( $_POST['q8'] ) && $res['option2']==$name8){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q8" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q8" value='.$res['option2'].' checked="checked">'.$res['option2'].'</br><input type="radio" name="q8" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q8" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}



	else if(isset( $_POST['q8'] ) && $res['option3']==$name8){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q8" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q8" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q8" value='.$res['option3'].' checked="checked">'.$res['option3'].'</br><input type="radio" name="q8" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}



	else if(isset( $_POST['q8'] ) && $res['option4']==$name8){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q8" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q8" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q8" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q8" value='.$res['option4'].' checked="checked">'.$res['option4'] ;
echo '</br></br>';
}

else
{

echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q8" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q8" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q8" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q8" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
 }

if(isset( $_POST['q8'] ))
{ 
if($name8==$res ['correct'])
{
echo "Your answer is Correct</br></br></br></br>";
$corr=$corr+1;
}
else
{
echo 'Your answer is Wrong </br></br>';
echo 'Correct answer is  '.$res ['correct'].'</br></br></br></br>';

}
}

else
{

echo 'You have not attempted question. </br></br>';
echo 'Correct answer is '.$res ['correct'].'</br></br></br></br>';


}

}







else if($i==9) 
	{
		
	//$i=$i+1;

	if(isset( $_POST['q9'] ) &&   $res['option1']==$name9){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q9" value='.$res['option1'].' checked="checked">'.$res['option1'].'</br><input type="radio" name="q9" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q9" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q9" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}


  else if( isset( $_POST['q9'] ) && $res['option2']==$name9){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q9" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q9" value='.$res['option2'].' checked="checked">'.$res['option2'].'</br><input type="radio" name="q9" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q9" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}



	else if(isset( $_POST['q9'] ) && $res['option3']==$name9){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q9" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q9" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q9" value='.$res['option3'].' checked="checked">'.$res['option3'].'</br><input type="radio" name="q9" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}



	else if(isset( $_POST['q9'] ) && $res['option4']==$name9){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q9" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q9" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q9" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q9" value='.$res['option4'].' checked="checked">'.$res['option4'] ;
echo '</br></br>';
}

else
{

echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q9" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q9" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q9" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q9" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
 }

if(isset( $_POST['q9'] ))
{ 
if($name9==$res ['correct'])
{
echo "Your answer is Correct</br></br></br></br>";
$corr=$corr+1;
}
else
{
echo 'Your answer is Wrong </br></br>';
echo 'Correct answer is  '.$res ['correct'].'</br></br></br></br>';

}
}

else
{

echo 'You have not attempted question. </br></br>';
echo 'Correct answer is '.$res ['correct'].'</br></br></br></br>';


}

}



else if($i==10) 
	{
		
	//$i=$i+1;

	if(isset( $_POST['q10'] ) &&   $res['option1']==$name10){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q10" value='.$res['option1'].' checked="checked">'.$res['option1'].'</br><input type="radio" name="q10" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q10" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q10" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}


  else if( isset( $_POST['q10'] ) && $res['option2']==$name10){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q10" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q10" value='.$res['option2'].' checked="checked">'.$res['option2'].'</br><input type="radio" name="q10" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q10" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}



	else if(isset( $_POST['q10'] ) && $res['option3']==$name10){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q10" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q10" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q10" value='.$res['option3'].' checked="checked">'.$res['option3'].'</br><input type="radio" name="q10" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
}



	else if(isset( $_POST['q10'] ) && $res['option4']==$name10){
echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q10" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q10" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q10" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q10" value='.$res['option4'].' checked="checked">'.$res['option4'] ;
echo '</br></br>';
}

else
{

echo 'Question '.$i.'</br>'.$res ['question'].'</br><input type="radio" name="q10" value='.$res['option1'].' disabled>'.$res['option1'].'</br><input type="radio" name="q10" value='.$res['option2'].' disabled>'.$res['option2'].'</br><input type="radio" name="q10" value='.$res['option3'].' disabled>'.$res['option3'].'</br><input type="radio" name="q10" value='.$res['option4'].' disabled>'.$res['option4'] ;
echo '</br></br>';
 }

if(isset( $_POST['q10'] ))
{ 
if($name10==$res ['correct'])
{
echo "Your answer is Correct</br></br></br></br>";
$corr=$corr+1;
}
else
{
echo 'Your answer is Wrong </br></br>';
echo 'Correct answer is  '.$res ['correct'].'</br></br></br></br>';

}
}

else
{

echo 'You have not attempted question. </br></br>';
echo 'Correct answer is '.$res ['correct'].'</br></br></br></br>';


}

}












$i=$i+1;
}


echo 'Total Correct Answers are :'.$corr.'</br></br></br>'  ;
$tempi=0;
while($res = $res3->fetchArray(SQLITE3_ASSOC)){

$tempi=$res['questions'];
}
$temp=$tempi+$corr;
//echo 'Now correct answers are :'.$temp;
$myname = $_GET['username'];
$sql4 = "UPDATE registration
        SET questions='$temp'
        WHERE username='$myname'";
$res4 = $db->query($sql4);		
		
$sql5 = "SELECT COUNT(*)  from registration
         where  questions>='$temp'";

$res5 = $db->query($sql5);
		 $rankk=0;
while($res = $res5->fetchArray(SQLITE3_ASSOC)){
  $rankk=$res['COUNT(*)'];
}

//echo "Heee".$rankk;

$myname = $_GET['username'];
$sql9 = "SELECT * FROM registration WHERE username='$myname'" ;

$res9 =$db->query($sql9);
$orank=0;
while($res = $res9->fetchArray(SQLITE3_ASSOC)){
  $orank=$res['rank'];
}



//echo 'Hooooooooooooooooiiiiiiiiiiiiiiiiiiiiiiiiiiii ';
$sql7 = "UPDATE registration
        SET rank=rank+1
        WHERE questions< '$temp' AND rank < '$orank'";
$res7 = $db->query($sql7);		



$myname = $_GET['username'];
$sql6 = "UPDATE registration
        SET rank='$rankk'
        WHERE username='$myname'";
$res6 = $db->query($sql6);		





?>


</br>
</br>

	  
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