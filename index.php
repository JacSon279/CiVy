<?php

function is_image($path)
{
	$a = getimagesize($path);
	$image_type = $a[2];
	
	if(in_array($image_type , array(IMAGETYPE_JPEG ,IMAGETYPE_PNG)))
	{
		return true;
	}
	return false;
}

//===================================================================================================
//									PAGE RELATED SETTINGS 
//===================================================================================================
//


// BACKGROUND IMAGE
$clount = 0;
foreach (glob("pics/bg/*.jpg") as $filename)
{
	if(is_file($filename))
	{
		$clount = $clount + 1;
		$target_bg_file[$clount] = $filename;
	}
}


//============== creating target bgs ================================================
$rand_val = mt_rand(1,$clount);
$target_bg2 = $target_bg_file[$rand_val];

$rand_val = mt_rand(1,$clount);
$target_bg3 = $target_bg_file[$rand_val];

$rand_val = mt_rand(1,$clount);
$target_bg4 = $target_bg_file[$rand_val];

$rand_val = mt_rand(1,$clount);
$target_bg5 = $target_bg_file[$rand_val];

$rand_val = mt_rand(1,$clount);
$target_bg6 = $target_bg_file[$rand_val];

$rand_val = mt_rand(1,$clount);
$target_bg7 = $target_bg_file[$rand_val];
//===================================================================================


// DP IMAGE
$dp_border_color = file_get_contents('pics/dp/dp_border');

foreach (glob("pics/dp/*.jpg") as $filename)
{
	if(is_file($filename))
	{
		$target_dp = $filename;
	}
}


foreach (glob("pics/mainbg/*.jpg") as $filename)
{
	if(is_file($filename))
	{
		$main_bg = $filename;
	}
}


//MAIN TITLE LOGO
$main_logo = 'pics/index_content/main_logo.png';
//===================================================================================================




//===================================================================================================
//									RETRIEVING CONTENT FROM FILES
//===================================================================================================
//

$headline = file_get_contents('innertxt/index_innertxt/headline');
$index_detailed = file_get_contents('innertxt/index_innertxt/index_detailed');


$fbaddr = file_get_contents('innertxt/index_innertxt/fbaddr');
$twaddr = file_get_contents('innertxt/index_innertxt/twaddr');
$phoneaddr = file_get_contents('innertxt/index_innertxt/phoneaddr');
$mailaddr = file_get_contents('innertxt/index_innertxt/mailaddr');
$high_school  = nl2br(file_get_contents('innertxt/index_innertxt/high_school'));
$jr_college  = nl2br(file_get_contents('innertxt/index_innertxt/jr_college'));
$grad_college= nl2br(file_get_contents('innertxt/index_innertxt/grad_college'));

$screen2_title= nl2br(file_get_contents('innertxt/index_innertxt/screen2_title'));
$screen3_title= nl2br(file_get_contents('innertxt/index_innertxt/screen3_title'));
$screen4_title= nl2br(file_get_contents('innertxt/index_innertxt/screen4_title'));
$screen5_title= nl2br(file_get_contents('innertxt/index_innertxt/screen5_title'));
$screen6_title= nl2br(file_get_contents('innertxt/index_innertxt/screen6_title'));

$work1_title= nl2br(file_get_contents('innertxt/index_innertxt/work1_title'));
$work2_title= nl2br(file_get_contents('innertxt/index_innertxt/work2_title'));
$work3_title= nl2br(file_get_contents('innertxt/index_innertxt/work3_title'));
$work4_title= nl2br(file_get_contents('innertxt/index_innertxt/work4_title'));

$work1_content= nl2br(file_get_contents('innertxt/index_innertxt/work1_content'));
$work2_content= nl2br(file_get_contents('innertxt/index_innertxt/work2_content'));
$work3_content= nl2br(file_get_contents('innertxt/index_innertxt/work3_content'));
$work4_content= nl2br(file_get_contents('innertxt/index_innertxt/work4_content'));

$edu_title1= nl2br(file_get_contents('innertxt/index_innertxt/edu_title1'));
$edu_title2= nl2br(file_get_contents('innertxt/index_innertxt/edu_title2'));
$edu_title3= nl2br(file_get_contents('innertxt/index_innertxt/edu_title3'));

$edu2_stream = nl2br(file_get_contents('innertxt/index_innertxt/edu2_stream'));
$edu3_stream = nl2br(file_get_contents('innertxt/index_innertxt/edu3_stream'));

$edu1_sub_list = nl2br(file_get_contents('innertxt/index_innertxt/edu1_sub_list'));
$edu1_marks_list = nl2br(file_get_contents('innertxt/index_innertxt/edu1_marks_list'));
$edu1_percentage = nl2br(file_get_contents('innertxt/index_innertxt/edu1_percentage'));

$edu2_sub_list = nl2br(file_get_contents('innertxt/index_innertxt/edu2_sub_list'));
$edu2_marks_list = nl2br(file_get_contents('innertxt/index_innertxt/edu2_marks_list'));
$edu2_percentage = nl2br(file_get_contents('innertxt/index_innertxt/edu2_percentage'));

$edu3_sub_list = nl2br(file_get_contents('innertxt/index_innertxt/edu3_sub_list'));
$edu3_marks_list = nl2br(file_get_contents('innertxt/index_innertxt/edu3_marks_list'));
$edu3_percentage = nl2br(file_get_contents('innertxt/index_innertxt/edu3_percentage'));

$screen5_main= file_get_contents('innertxt/index_innertxt/screen5_main');
$screen6_main= file_get_contents('innertxt/index_innertxt/screen6_main');


//
//===================================================================================================


//===================================================================================================
//									FETCHING MENU OPTIONS
//===================================================================================================
//

$menuFile = file('innertxt/index_innertxt/menu_options');
$targFile = file('innertxt/index_innertxt/menu_targets');

$line_count = count($menuFile);
$unListOptions = '';
for($x = 0; $x < $line_count; $x++)
{
	//echo "$menuFile[$x]" . "<br>";
	if(strlen($menuFile[$x]) > 2)
	{
		$ourBoy = $menuFile[$x];		
		$ourTown = $targFile[$x];
		$unListOptions = $unListOptions . "<a data-scroll href='$ourTown' style='text-decoration:none;'><li class='menuBlockMinions'><span>$ourBoy</span></li></a>"; 
	}
}

//
//===================================================================================================
echo "
<html>
<head>

       <link rel='stylesheet' href='imports/uikit.docs.min.css' />
        <script src='imports/jquery.js'></script>
        <script src='imports/uikit.min.js'></script>

<style>
#hellangel {
width:100%;
height:100%;
position:absolute;
top:0px;
left:0px;
}


.container{
  margin:50px auto;
  width:80%;
  height:80%;
  overflow:hidden;
  position:absolute;
  top:102%;
  left:5%;
}

.edublock{
	background:#EFF0F2;
	box-shadow:5px 5px 1px black;
}


.photo{
  position:absolute;
  -webkit-animation:round 21s infinite;
  animation:round 21s infinite;
  opacity:0;
  width:100%;
  height:100%;
}

@-webkit-keyframes round{   
  25%{opacity:1;}
  40%{opacity:0;}
} 


img:nth-child(3){-webkit-animation-delay:14s;}
img:nth-child(2){-webkit-animation-delay:7s;}
img:nth-child(1){-webkit-animation-delay:0s;}



#wrkPic1{
	background:url('pics/index_content/screen2/work_img_1.jpg');
}

body{
	font-family:sans-serif
}
.workBanners{
	background: #E55D5A;
	background: linear-gradient(top, #E55D5A 0%, #B81B16 100%);
	background: -moz-linear-gradient(top, #E55D5A 0%, #B81B16 100%);
	background: -webkit-linear-gradient(top, #212121 0%, #000000 100%);
	padding:10px 0px 0px 0px;
	color:white;
	font-weight:bold;
	text-align:center;
	opacity:0.9;
}

#works-container{
	background: #E55D5A;
	background: linear-gradient(top, #E55D5A 0%, #B81B16 100%);
	background: -moz-linear-gradient(top, #E55D5A 0%, #B81B16 100%);
	background: -webkit-linear-gradient(top, #BDBDBD 0%, #212121 100%);
	box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
}
#work1{
	background-image:url(pics/index_content/screen2/work_img_1.jpg);
	background-size: cover;
	-webkit-background-size: cover;
	-o-background-size: cover;
	-moz-background-size: cover;
}
#work2{
	background-image:url(pics/index_content/screen2/work_img_2.jpg);
	background-size: cover;
	-webkit-background-size: cover;
	-o-background-size: cover;
	-moz-background-size: cover;
}
#work3{
	background-image:url(pics/index_content/screen2/work_img_3.jpg);
	background-size: cover;
	-webkit-background-size: cover;
	-o-background-size: cover;
	-moz-background-size: cover;
}
#work4{
	background-image:url(pics/index_content/screen2/work_img_4.jpg);
	background-size: cover;
	-webkit-background-size: cover;
	-o-background-size: cover;
	-moz-background-size: cover;
}
.works:hover {
	opacity:0.7;
	background:'black';
	border:solid 3px aqua;
}

.menuBlockMinions{
	background: #E55D5A;
	background: linear-gradient(top, #E55D5A 0%, #B81B16 100%);
	background: -moz-linear-gradient(top, #E55D5A 0%, #B81B16 100%);
	background: -webkit-linear-gradient(top, #E55D5A 0%, #B81B16 100%);
	box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
	padding: 10 20px;
	border-radius: 10px;
	list-style:none;
	position:relative;
	right:30px;
	width:90%;
	color:white;
	font-weight:bold;
	font-size:20px;
	text-align:center;
	border:solid 5px #01BCD6;

	
}

.menuBlockMinions:hover{
	background: #E55D5A;
	background: linear-gradient(top, #FFFF01 0%, #FFAC00 100%);
	background: -moz-linear-gradient(top, #FFFF01 0%, #FFAC00 100%);
	background: -webkit-linear-gradient(top, #FFFF01 0%, #FFAC00 100%);
	box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
	padding: 10 20px;
	border-radius: 10px;
	list-style:none;
	position:relative;
	right:30px;
	width:90%;
	color:#B81B16;
	font-weight:bold;
	font-size:20px;
	text-align:center;
	border:solid 5px #01BCD6;

}

</style>
<script src='smooth-scroll.js'></script>
<script>


function optionBlockHide(){
	var entireCity = document.getElementsByClassName('optionBlock'),i;
	for(var i=0;i< entireCity.length;i++)
	{
		entireCity[i].style.display = 'block';
		entireCity[i].style.visibility = 'hidden';
	}
}

function optionBlockShow(){
	var entireCity = document.getElementsByClassName('optionBlock'),i;
	for(var i=0;i< entireCity.length;i++)
	{
		entireCity[i].style.display = 'block';
		entireCity[i].style.visibility = 'visible';
	}
}
</script>
</head>
<body onload='optionBlockHide();'>

<!--
//===================================================================================================
//									DISPLAY BACKGROUND 
//===================================================================================================
// -->

<img id='hellangel' src='$main_bg'>

<!--
//===================================================================================================
//									DISPLAY TOP STRIP 
//===================================================================================================
// -->
<div style='position:absolute;top:0px;left:0px;width:100%;height:15%;background:black;opacity:0.8;'>
</div>


<!--
//===================================================================================================
//									DISPLAY HEAD LINE
//===================================================================================================
// -->
<div style='position:absolute;top:7%;left:22%;'>
<font style='font-size:650%;color:white;font-weight:bold;'>
$headline
</font>
</div>



<!--
//===================================================================================================
//									DISPLAY MAIN CONTENT
//===================================================================================================
// -->
<div style='position:absolute;top:47%;left:22%;width:60%;text-align:center;'>
<h2><font class='uk-text-bold'>
$index_detailed
</font></h2>
</div>

<a href='downloads/resume.pdf' style='text-decoration:none;'>
<font style='position:absolute;top:85%;right:10%;color:white;background:#23272B;font-weight:bold;font-size:20px;padding:10px 20px 10px 20px;border-radius:8px;'>
Download Resume
</font>
</a>
<!--
//===================================================================================================
//									DISPLAY TOP RIGHT DIV CONTAINING OPEN MENU BUTTON 
//===================================================================================================
// -->

<div style='position:absolute;top:0px;right:0px;width:8%;height:15%;background:#01BCD6;opacity:1;' >
<img src='pics/index_content/option_block_open.gif' style='position:absolute;top:0px;right:0px;width:100%;height:100%;background:#01BCD6;' onclick='optionBlockShow();' >
</div>


<!--
//===================================================================================================
//									DISPLAY PROFILE PICTURE 
//===================================================================================================
// -->

<img src='$target_dp' style='width:150px;height:160px;border:solid 5px $dp_border_color;border-radius:0px 10px 0px 10px;position:absolute;top:50px;left:50px;'>


<!--
//===================================================================================================
//									DISPLAY PREVIOUS NEXT ARROW BUTTONS FOR SCREEN 1
//===================================================================================================
// -->

<a data-scroll href='#'><img src='pics/required/arrow_up.png' style='position:absolute;top:42%;right:2%;width:70px;height:70px;background:black;border-radius:40px;opacity:0.9;' class='roundbuts' ></a>
<a data-scroll href='#bg2'><img src='pics/required/arrow_down.png' style='position:absolute;top:54%;right:2%;width:70px;height:70px;opacity:0.9;background:black;border-radius:40px;' class='roundbuts' ></a>

<!--
//===================================================================================================
//									DISPLAY HIDEABLE MENU 
//===================================================================================================
// -->
<div style='position:fixed;top:0px;right:0px;width:20%;height:94%;background:#01BCD6;opacity:1;border:solid 5px #006065;' class='optionBlock'>
<ul>
$unListOptions
</ul>
<img src='pics/index_content/option_block_close.png' style='position:absolute;bottom:0px;left:0px;width:50px;height:50px;background:#006065;' onclick='optionBlockHide();'  class='optionBlock'>
</div>

<a href='#bg7' data-scroll>
<img src='pics/index_content/fblink.png' style='position:absolute;top:77%;left:41%;width:4%;' data-uk-tooltip='' title='$fbaddr' data-cached-title='$fbaddr' >
<img src='pics/index_content/maillink.png' style='position:absolute;top:80%;left:47%;width:4%;' data-uk-tooltip='' title='$mailaddr' data-cached-title='$mailaddr'>
<img src='pics/index_content/phlink.png' style='position:absolute;top:80%;left:53%;width:4%;' data-uk-tooltip='' title='$phoneaddr' data-cached-title='$phoneaddr'>
<img src='pics/index_content/twlink.png' style='position:absolute;top:77%;left:59%;width:4%;' data-uk-tooltip='' title='$twaddr' data-cached-title='$twaddr'>
</a>





<!-- *+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+   PAGE 2    *+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+ -->
<!--
//===================================================================================================
//									DISPLAY BACKGROUND 2
//===================================================================================================
// -->

<img id='bg2' src='$target_bg2' style='width:100%;height:100%;position:absolute;top:100%;left:0px;'>


<!--
//===================================================================================================
//									DISPLAY SCREEN2 TOP STRIP 
//===================================================================================================
// -->
<div style='position:absolute;top:100%;left:0px;width:100%;height:5%;background:black;opacity:0.8;'>
<h2 style='position:absolute;top:1%;left:40%;color:white;'>
$screen2_title
</h2>
</div>


<!--
//===================================================================================================
//									DISPLAY IMAGE SLIDER
//===================================================================================================
// -->

							<div class='container' >";
							
$clounge = 0;
foreach (glob("slider-master/*.*") as $filenamex)
{
	if(is_file($filenamex))
	{
		$clounge = $clounge + 1;
		if(is_image($filenamex))
		{
			$img_sld = $img_sld . "<img class='photo' src='$filenamex'>";
		}
	}
}							
														
echo "							
$img_sld
</div>



<!--
//===================================================================================================
//									DISPLAY PREVIOUS NEXT ARROW BUTTONS FOR SCREEN 2
//===================================================================================================
// -->

<a data-scroll href='#hellangel'><img src='pics/required/arrow_up.png' style='position:absolute;top:142%;right:2%;width:70px;height:70px;background:black;border-radius:40px;opacity:0.9;' class='roundbuts' ></a>
<a data-scroll href='#bg3'><img src='pics/required/arrow_down.png' style='position:absolute;top:154%;right:2%;width:70px;height:70px;opacity:0.9;background:black;border-radius:40px;' class='roundbuts' ></a>






<!-- *+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+   PAGE 3    *+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+ -->
<!--
//===================================================================================================
//									DISPLAY BACKGROUND 3
//===================================================================================================
// -->

<img id='bg3' src='$target_bg3' style='width:100%;height:100%;position:absolute;top:200%;left:0px;'>


<!--
//===================================================================================================
//									DISPLAY SCREEN3 TOP STRIP 
//===================================================================================================
// -->
<div style='position:absolute;top:200%;left:0px;width:100%;height:5%;background:black;opacity:0.8;'>
<h2 style='position:absolute;top:1%;left:40%;color:white;'>
$screen3_title
</h2>
</div>



<!--
//===================================================================================================
//									DISPLAY WORKS GALLERY
//===================================================================================================
// -->

<script>
function brick1(){
	document.getElementById('brickcaller1').click();
}


function brick2(){
	document.getElementById('brickcaller2').click();
}


function brick3(){
	document.getElementById('brickcaller3').click();
}


function brick4(){
	document.getElementById('brickcaller4').click();
}
</script>


<table id='works-container' style='position:absolute;top:220%;left:15%;border-radius:8px;' border='1' cellspacing='20px'>
	<tr>		
		<td style='width:200px;height:200px;border-radius:8px;' id='work1' class='works' valign='top' onclick='brick1();'>
		<a href='#brickbox1' data-uk-modal style='text-decoration:none;' id='brickcaller1'>
			<div style='width:200px;height:30px;border-radius:8px 8px 0px 0px;' class='workBanners'>
			<span>
				$work1_title
			</span>
			</div>
		</a>
		</td>
		
		<td style='width:200px;height:200px;border-radius:8px;' id='work2' class='works' valign='top' onclick='brick2();'>
		<a href='#brickbox2' data-uk-modal style='text-decoration:none;' id='brickcaller2'>
			<div style='width:200px;height:30px;border-radius:8px 8px 0px 0px;' class='workBanners'>
			<span>
				$work2_title
			</span>	
			</div>		
		</a>
		</td>
		
		<td style='width:200px;height:200px;border-radius:8px;' id='work3' class='works' valign='top' onclick='brick3();'>
		<a href='#brickbox3' data-uk-modal style='text-decoration:none;' id='brickcaller3'>
			<div style='width:200px;height:30px;border-radius:8px 8px 0px 0px;' class='workBanners'>
			<span>
				$work3_title
			</span>
			</div>		
		</a>
		</td>
		<td style='width:200px;height:200px;border-radius:8px;' id='work4' class='works' valign='top' onclick='brick4();'>
		<a href='#brickbox4' data-uk-modal style='text-decoration:none;' id='brickcaller4'>
			<div style='width:200px;height:30px;border-radius:8px 8px 0px 0px;' class='workBanners'>
			<span>
				$work4_title
			</span>
			</div>		
		</a>
		</td>		
	</tr>
</table>




<!--
//===================================================================================================
//									DISPLAY PREVIOUS NEXT ARROW BUTTONS FOR SCREEN 3
//===================================================================================================
// -->

<a data-scroll href='#bg2'><img src='pics/required/arrow_up.png' style='position:absolute;top:242%;right:2%;width:70px;height:70px;background:black;border-radius:40px;opacity:0.9;' class='roundbuts' ></a>
<a data-scroll href='#bg4'><img src='pics/required/arrow_down.png' style='position:absolute;top:254%;right:2%;width:70px;height:70px;opacity:0.9;background:black;border-radius:40px;' class='roundbuts' ></a>




<!-- *+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+   PAGE 4    *+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+ -->
<!--
//===================================================================================================
//									DISPLAY BACKGROUND 4
//===================================================================================================
// -->

<img id='bg4' src='$target_bg4' style='width:100%;height:100%;position:absolute;top:300%;left:0px;'>


<!--
//===================================================================================================
//									DISPLAY SCREEN4 TOP STRIP 
//===================================================================================================
// -->
<div style='position:absolute;top:300%;left:0px;width:100%;height:5%;background:black;opacity:0.8;'>
<h2 style='position:absolute;top:1%;left:40%;color:white;'>
$screen4_title
</h2>
</div>


<!--
//===================================================================================================
//									DISPLAY EDUCATION LIST
//===================================================================================================
// -->

<div style='position:absolute;top:310%;left:1%;width:20%;height:80%;padding:20px 0px 0px 20px;' id='edu1' class='edublock'>

<h2>Graduation</h2>
<hr/ style='width:80%;border-color:#48C9B0;border:solid 1px #48C9B0;'>
<h3>
$grad_college
</h3>

<h2>Junior College</h2>
<hr/ style='width:80%;border-color:#48C9B0;border:solid 1px #48C9B0;'>
<h3>
$jr_college
</h3>

<h2>High School</h2>
<hr/ style='width:80%;border-color:#48C9B0;border:solid 1px #48C9B0;'>
<h3>
$high_school
</h3>
</div>


<!--
//===================================================================================================
//									DISPLAY HGH SCHOOL
//===================================================================================================
// -->

<div style='position:absolute;top:310%;left:24%;width:20%;height:80%;padding:20px 0px 0px 20px;' id='edu1' class='edublock'>
<h2>$edu_title1</h2>
<hr/ style='width:80%;border-color:#48C9B0;border:solid 1px #48C9B0;'>
<table style='text-align:center;width:90%;border-color:#48C9B0;border:solid 1px #48C9B0;' cellspacing='0'  border='1'>";

$subFile = file('innertxt/index_innertxt/edu1_sub_list');
$marksFile = file('innertxt/index_innertxt/edu1_marks_list');
$line_count = count($subFile);
for($x = 0; $x < $line_count; $x++)
{
	echo "
	<tr>
		<td>
			$subFile[$x]
		</td>
		<td>
			$marksFile[$x]
		</td>
	</tr>	
	";
}
	
	echo "
</table>


<br>
<table style='background:#E74C3C;color:white;font-weight:bold;padding:10px;width:90%;'>
<tr>
	<td>
		Percentage
	</td>
	<td>
		$edu1_percentage
	</td>	
</tr>
</table>

</div>

<!--
//===================================================================================================
//									DISPLAY JUNIOR COLLEGE
//===================================================================================================
// -->

<div style='position:absolute;top:310%;left:47%;width:20%;height:80%;padding:20px 0px 0px 20px;' id='edu1' class='edublock'>
<h2>$edu_title2
</h2>
<hr/ style='width:80%;border-color:#48C9B0;border:solid 1px #48C9B0;'>
<h3>Stream : $edu2_stream</h3>
<hr/ style='width:80%;border-color:#48C9B0;border:solid 1px #48C9B0;'>
<table style='text-align:center;width:90%;border-color:#48C9B0;border:solid 1px #48C9B0;' cellspacing='0'  border='1'>";

$subFile = file('innertxt/index_innertxt/edu2_sub_list');
$marksFile = file('innertxt/index_innertxt/edu2_marks_list');
$line_count = count($subFile);
for($x = 0; $x < $line_count; $x++)
{
	echo "
	<tr>
		<td>
			$subFile[$x]
		</td>
		<td>
			$marksFile[$x]
		</td>
	</tr>	
	";
}


echo "
</table>

<br>
<table style='background:#E74C3C;color:white;font-weight:bold;padding:10px;width:90%;'>
<tr>
	<td>
		Percentage
	</td>
	<td>
		$edu2_percentage
	</td>	
</tr>
</table>
</div>

<!--
//===================================================================================================
//									DISPLAY GRADUATION COLLEGE
//===================================================================================================
// -->

<div style='position:absolute;top:310%;left:70%;width:20%;height:80%;padding:20px 0px 0px 20px;' id='edu1' class='edublock'>
<h2>Graduation Degree
</h2>
<hr/ style='width:80%;border-color:#48C9B0;border:solid 1px #48C9B0;'>
<h3>Degree : $edu_title3
<hr/ style='width:80%;border-color:#48C9B0;border:solid 1px #48C9B0;'>
<table style='text-align:center;width:90%;border-color:#48C9B0;border:solid 1px #48C9B0;' cellspacing='0'  border='1'>";

$subFile = file('innertxt/index_innertxt/edu3_sub_list');
$marksFile = file('innertxt/index_innertxt/edu3_marks_list');
$line_count = count($subFile);
for($x = 0; $x < $line_count; $x++)
{
	echo "
	<tr>
		<td>
			$subFile[$x]
		</td>
		<td>
			$marksFile[$x]
		</td>
	</tr>	
	";
}


echo "
</table>

<br>
<table style='background:#E74C3C;color:white;font-weight:bold;padding:10px;width:90%;'>
<tr>
	<td>
		Percentage
	</td>
	<td>
		$edu3_percentage
	</td>	
</tr>
</table>
</div>






<!--
//===================================================================================================
//									DISPLAY PREVIOUS NEXT ARROW BUTTONS FOR SCREEN 4
//===================================================================================================
// -->

<a data-scroll href='#bg3'><img src='pics/required/arrow_up.png' style='position:absolute;top:342%;right:2%;width:70px;height:70px;background:black;border-radius:40px;opacity:0.9;' class='roundbuts' ></a>
<a data-scroll href='#bg5'><img src='pics/required/arrow_down.png' style='position:absolute;top:354%;right:2%;width:70px;height:70px;opacity:0.9;background:black;border-radius:40px;' class='roundbuts' ></a>



<!-- *+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+   PAGE 5    *+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+ -->
<!--
//===================================================================================================
//									DISPLAY BACKGROUND 5
//===================================================================================================
// -->

<img id='bg5' src='$target_bg5' style='width:100%;height:100%;position:absolute;top:400%;left:0px;'>


<!--
//===================================================================================================
//									DISPLAY SCREEN5 TOP STRIP 
//===================================================================================================
// -->
<div style='position:absolute;top:400%;left:0px;width:100%;height:5%;background:black;opacity:0.8;'>
<h2 style='position:absolute;top:1%;left:40%;color:white;'>
$screen5_title
</h2>
</div>







<!--
//===================================================================================================
//									DISPLAY PREVIOUS NEXT ARROW BUTTONS FOR SCREEN 5
//===================================================================================================
// -->

<a data-scroll href='#bg4'><img src='pics/required/arrow_up.png' style='position:absolute;top:442%;right:2%;width:70px;height:70px;background:black;border-radius:40px;opacity:0.9;' class='roundbuts' ></a>
<a data-scroll href='#bg6'><img src='pics/required/arrow_down.png' style='position:absolute;top:454%;right:2%;width:70px;height:70px;opacity:0.9;background:black;border-radius:40px;' class='roundbuts' ></a>


<!--
//===================================================================================================
//									DISPLAY CONTENT
//===================================================================================================
// -->

<div style='position:absolute;top:410%;left:1%;width:85%;height:80%;padding:20px 0px 0px 20px;' id='edu1' class='edublock'>
$screen5_main
</div>



<!-- *+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+   PAGE 6    *+*+*+*+*+*+*+*+*+*+*+*+*+*+*+ -->
<!--
//===================================================================================================
//									DISPLAY BACKGROUND 6
//===================================================================================================
// -->

<img id='bg6' src='$target_bg6' style='width:100%;height:100%;position:absolute;top:500%;left:0px;'>


<!--
//===================================================================================================
//									DISPLAY SCREEN6 TOP STRIP 
//===================================================================================================
// -->
<div style='position:absolute;top:500%;left:0px;width:100%;height:5%;background:black;opacity:0.8;'>
<h2 style='position:absolute;top:1%;left:40%;color:white;'>
$screen6_title
</h2>
</div>







<!--
//===================================================================================================
//									DISPLAY PREVIOUS NEXT ARROW BUTTONS FOR SCREEN 6
//===================================================================================================
// -->

<a data-scroll href='#bg5'><img src='pics/required/arrow_up.png' style='position:absolute;top:542%;right:2%;width:70px;height:70px;background:black;border-radius:40px;opacity:0.9;' class='roundbuts' ></a>
<a data-scroll href='#bg7'><img src='pics/required/arrow_down.png' style='position:absolute;top:554%;right:2%;width:70px;height:70px;opacity:0.9;background:black;border-radius:40px;' class='roundbuts' ></a>


<div style='position:absolute;top:510%;left:1%;width:85%;height:80%;padding:20px 0px 0px 20px;' id='edu1' class='edublock'>
$screen6_main
</div>


<!-- *+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+*+   PAGE 7    *+*+*+*+*+*+*+*+*+*+*+*+*+*+*+ -->
<!--
//===================================================================================================
//									DISPLAY BACKGROUND 7
//===================================================================================================
// -->

<img id='bg7' src='$target_bg7' style='width:100%;height:100%;position:absolute;top:600%;left:0px;'>


<!--
//===================================================================================================
//									DISPLAY SCREEN7 TOP STRIP 
//===================================================================================================
// -->
<div style='position:absolute;top:600%;left:0px;width:100%;height:5%;background:black;opacity:0.8;'>
<h2 style='position:absolute;top:1%;left:40%;color:white;'>
Contact Information
</h2>
</div>

<div style='background:#ECF0F1;width:80%;height:80%;position:absolute;top:610%;left:10%;border-radius:15px;'>
</div>


<div style='background:#0A246A;width:30%;height:20%;position:absolute;top:615%;left:15%;'>
<img src='pics/index_content/icons/fb.png' style='width:20%;height:40%;'>
<br><br>
<center><h2 style='color:white;'>
$fbaddr
</h2></center>
</div>

<div style='background:#3498DB;width:30%;height:20%;position:absolute;top:615%;left:50%;'>
<img src='pics/index_content/icons/tw.png' style='width:20%;height:40%;'>
<br><br>
<center><h2 style='color:white;'>
$twaddr
</h2></center>
</div>

<div style='background:#E74C3C;width:30%;height:20%;position:absolute;top:640%;left:15%;'>
<img src='pics/index_content/icons/gmail.png' style='width:20%;height:50%;'>
<br><br>
<center><h2 style='color:white;'>
$mailaddr
</h2></center>
</div>

<div style='background:#F1C40F;width:30%;height:35%;position:absolute;top:640%;left:50%;padding:5px 0px 0px 0px;'>
<form action='msnger.php' method='post'>
<center><h2 style='color:white;'>
Leave a message ...
</h2></center>

<center>
<font style='color:white;font-size:20px;'>
Name
</font>
&#160 &#160 
<input type='text' style='font-size:20px;border-radius:15px;border:none;padding:5px;' name='whodis' placeholder='Your Name ...'>
</center>
<br>
<center>
<textarea style='font-size:20px;border-radius:15px;border:none;padding:5px;width:90%;height:40%;resize:none;' name='whatdis' placeholder='Your Message ...'>
</textarea>
</center>
<br>
<center>
<input type='submit' style='background:#26B99A;border:none;padding:5px;color:navy;font-weight:bold;font-size:15px;border-radius:8px;' value='Send'>
&#160 &#160 &#160
<input type='reset' style='background:#26B99A;border:none;padding:5px;color:navy;font-weight:bold;font-size:15px;border-radius:8px;' value='Clear'>
</center>
</form>
</div>

<div style='background:#2ECC71;width:30%;height:20%;position:absolute;top:665%;left:15%;'>
<img src='pics/index_content/icons/phone.png' style='width:20%;height:50%;'>
<br><br>
<center><h2 style='color:white;'>
$phoneaddr
</h2></center>
</div>

<a href='downloads/resume.pdf' style='text-decoration:none;'>
<div style='background:#9B59B6;width:30%;height:5%;position:absolute;top:680%;left:50%;'>
<center><h2 style='color:white;'>
Download Resume
</h2></center>
</div>
</a>


<a data-scroll href='#hellangel'><img src='pics/required/arrow_fast_up.png' style='position:absolute;top:684%;right:2%;width:70px;height:70px;opacity:0.9;background:#0D89E0;border-radius:40px;' class='roundbuts' ></a>

<!--
//===================================================================================================
//									DISPLAY PREVIOUS NEXT ARROW BUTTONS FOR SCREEN 7
//===================================================================================================
// -->

<a data-scroll href='#bg6'><img src='pics/required/arrow_up.png' style='position:absolute;top:642%;right:2%;width:70px;height:70px;background:black;border-radius:40px;opacity:0.9;' class='roundbuts' ></a>
<a data-scroll href='#bg7'><img src='pics/required/arrow_down.png' style='position:absolute;top:654%;right:2%;width:70px;height:70px;opacity:0.9;background:black;border-radius:40px;' class='roundbuts' ></a>

<!--
//===================================================================================================
//									DISPLAY FIXED FOOTER 
//===================================================================================================
// -->
<div style='width:100%;background:black;opacity:0.8;position:fixed;bottom:0px;height:30px;left:0px;'>
<font style='color:white;font-family:sans-serif;position:fixed;bottom:3px;right:30px;'>Powered by Civy ... a custom C.V. Management System by Jackson N ... Made with love and coffee. </font>
</div>




<!-- This is the 1st modal -->
<div id='brickbox1' class='uk-modal'>
    <div class='uk-modal-dialog'>
		<div class='uk-modal-header'><h2>FeedBack Engine</h2>
		</div>
		<br>
		<center>
			<img src='pics/index_content/screen2/work_img_1.jpg' style='width:70%;height:40%;border:none;'>
		</center>
		<br>
		<font class='uk-text-large'>
			$work1_content
		</font>
    </div>
</div>


<!-- This is the 2nd modal -->
<div id='brickbox2' class='uk-modal'>
    <div class='uk-modal-dialog'>
		<div class='uk-modal-header'><h2>DreamCatcher</h2>
		</div>
		<center>
			<img class='uk-thumbnail' src='pics/index_content/screen2/work_img_2.jpg' style='width:70%;height:40%;border:none;'>
		</center>
		<font class='uk-text-large'>
			$work2_content
		</font>
    </div>
</div>

<!-- This is the 3rd modal -->
<div id='brickbox3' class='uk-modal'>
    <div class='uk-modal-dialog'>
		<div class='uk-modal-header'><h2>CivY</h2>
		</div>
		<br>
		<center>
			<img src='pics/index_content/screen2/work_img_3.jpg' style='width:70%;height:40%;border:none;'>
		</center>
		<font class='uk-text-large'>
			$work3_content
		</font>
    </div>
</div>

<!-- This is the 4th modal -->
<div id='brickbox4' class='uk-modal'>
    <div class='uk-modal-dialog'>
		<div class='uk-modal-header'><h2>VotesApp</h2>
		</div>
		<br>
		<center>
			<img src='pics/index_content/screen2/work_img_4.jpg' style='width:70%;height:40%;border:none;'>
		</center>
		<font class='uk-text-large'>
			$work4_content
		</font>
    </div>
</div>


<script>
	smoothScroll.init();
</script>
</body>
</html>

";
?>