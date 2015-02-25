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

$head_line = file_get_contents('../innertxt/index_innertxt/headline');
$sub_para = file_get_contents('../innertxt/index_innertxt/index_detailed');

$fbaddr = file_get_contents('../innertxt/index_innertxt/fbaddr');
$twaddr = file_get_contents('../innertxt/index_innertxt/twaddr');
$phoneaddr = file_get_contents('../innertxt/index_innertxt/phoneaddr');
$mailaddr = file_get_contents('../innertxt/index_innertxt/mailaddr');

$screen2_title= nl2br(file_get_contents('../innertxt/index_innertxt/screen2_title'));
$screen3_title= nl2br(file_get_contents('../innertxt/index_innertxt/screen3_title'));
$screen4_title= nl2br(file_get_contents('../innertxt/index_innertxt/screen4_title'));
$screen5_title= nl2br(file_get_contents('../innertxt/index_innertxt/screen5_title'));
$screen6_title= nl2br(file_get_contents('../innertxt/index_innertxt/screen6_title'));

$edu_title1= nl2br(file_get_contents('../innertxt/index_innertxt/edu_title1'));
$edu_title2= nl2br(file_get_contents('../innertxt/index_innertxt/edu_title2'));
$edu_title3= nl2br(file_get_contents('../innertxt/index_innertxt/edu_title3'));

$edu2_stream = nl2br(file_get_contents('../innertxt/index_innertxt/edu2_stream'));
$edu3_stream = nl2br(file_get_contents('../innertxt/index_innertxt/edu3_stream'));

$edu1_sub_list = nl2br(file_get_contents('../innertxt/index_innertxt/edu1_sub_list'));
$edu1_marks_list = nl2br(file_get_contents('../innertxt/index_innertxt/edu1_marks_list'));
$edu1_percentage = nl2br(file_get_contents('../innertxt/index_innertxt/edu1_percentage'));

$edu2_sub_list = nl2br(file_get_contents('../innertxt/index_innertxt/edu2_sub_list'));
$edu2_marks_list = nl2br(file_get_contents('../innertxt/index_innertxt/edu2_marks_list'));
$edu2_percentage = nl2br(file_get_contents('../innertxt/index_innertxt/edu2_percentage'));

$edu3_sub_list = nl2br(file_get_contents('../innertxt/index_innertxt/edu3_sub_list'));
$edu3_marks_list = nl2br(file_get_contents('../innertxt/index_innertxt/edu3_marks_list'));
$edu3_percentage = nl2br(file_get_contents('../innertxt/index_innertxt/edu3_percentage'));

echo "
<html>
<head>
</head>
<body style='font-family:sans-serif;'>
<div style='width:100%;height:10%;background:navy;'>
<img src='../pics/required/admin_home_logo_main.png' style='width:40%;height:100%;'>
</div>
<div style='width:19%;height:2000%;position:absolute;top:11%;background:lightpink;'>
<br>
<center><font style='color:mediumblue;font-size:20px;width:15%;'>Page Manager </font></center>
</div>
<div style='width:79%;height:2000%;position:absolute;top:11%;background:lightblue;left:20%;'>
<center><h2>Main Heading for Web Site <br>Current Value :  $head_line </h2>
<input placeholder='The main heading here' type='text' style='font-size:20px;width:70%' value=''> &#160 &#160 &#160 <input type='submit' value='Save Changes' style='font-size:20px;border-radius:8px;border:none;'>
</center>
<br>
<hr/>
<center>
<h2>The main introductory paragraph for the first screen.
</h2>
</center>
<center><textarea style='width:40%;height:100px;resize:none;'>$sub_para</textarea></center>
<BR>
<center><input type='submit' value='Save Changes' style='font-size:20px;border-radius:8px;border:none;'>
</center>
<br>
<HR/>

<center>
<table style='width:80%;text-align:center;'>
<tr>
<td>
<font style='font-size:20px;'>Facebook Link</font>
</td><td><input placeholder='Your facebook page Link' type='text' style='font-size:20px;width:90%' value='$fbaddr'></td></tr>
<tr>
<td>
<font style='font-size:20px;'>Email Address</font>
</td><td><input placeholder='Your Email address here' type='text' style='font-size:20px;width:90%' value='$mailaddr'></td></tr>
<tr>
<td>
<font style='font-size:20px;'>WhatsApp / Phone</font>
</td>
<td>
<input placeholder='Your Phone Number here' type='text' style='font-size:20px;width:90%' value='$phoneaddr'></td></tr>
<tr>
<td>
<font style='font-size:20px;'>Twitter</font>
</td>
<td><input placeholder='Your twitter @ here' type='text' style='font-size:20px;width:90%' value='$twaddr'></td></tr>
<tr><td colspan='2'>
<br>
<input type='submit' value='Save Changes' style='font-size:20px;border-radius:8px;border:none;'>
</td></tr>
</table>
</center>
<hr/>
<center>
<h2>
Resume pdf File Upload
</h2>
</center>
<center>
<input type='file' style='background:lightyellow;border:solid 1px blue;'> &#160 &#160 &#160 &#160 <input type='submit' value='Upload Resume File' style='font-size:20px;border-radius:8px;border:none;'>
</center>
<br>
<hr/>";

$menuFile = file('../innertxt/index_innertxt/menu_options');
$targFile = file('../innertxt/index_innertxt/menu_targets');

$line_count = count($menuFile);
$unListOptions = '';
for($x = 0; $x < $line_count; $x++)
{
	//echo "$menuFile[$x]" . "<br>";
	if(strlen($menuFile[$x]) > 2)
	{
		$ourBoy = $menuFile[$x];		
		$ourTown = $targFile[$x];
		$unListOptions = $unListOptions . "<tr>
		<td>
		$ourBoy
		</td>
		<td>
		$ourTown
		</td>
		</tr>"; 
		
	}
}

echo "
<center>
<h2>
Menu Option and their Current target links
</h2>
</CENTER>
<center><table style='width:60%;text-align:center;' border='1' cellspacing='0'>
<tr>
<th>Menu Option to be displayed
</th>
<th>Link
</th>
</tr>
$unListOptions
<tr>
<td>New Option : <input type='text'>
</td>
<td>Link for the Option : <input type='text'>
</td>
</tr>
<tr>
<td colspan='2'>
<input type='submit' value='Save Menu Option' style='font-size:20px;border-radius:8px;border:none;'>
</td>
<tr>
</table>
</center>
<hr/>
<center><h2>Main Heading for Screen 2 <br>Current Value :  \" $screen2_title \"</h2>
<input placeholder='Screen 2 heading here' type='text' style='font-size:20px;width:70%' value=''> &#160 &#160 &#160 <input type='submit' value='Save Changes' style='font-size:20px;border-radius:8px;border:none;'>
</center>
<hr/>
<center>
<h2>Images Currently in slide show
</h2>
</center>
";

$clounge = 0;
foreach (glob("../slider-master/*.*") as $filenamex)
{
	if(is_file($filenamex))
	{
		$clounge = $clounge + 1;
		if(is_image($filenamex))
		{
			$img_sld = $img_sld . "<center><img class='photo' style='width:80%;height:400px;' src='$filenamex'></center><br><br>";
		}
	}
}							

echo "
$img_sld
<center>
<h2>
Add a new image to slide show
</h2>
</center>
<center>
<input type='file' style='background:lightyellow;border:solid 1px blue;'> &#160 &#160 &#160 &#160 <input type='submit' value='Upload Slide Show Image' style='font-size:20px;border-radius:8px;border:none;'>
</center>
<hr/>
<center><h2>Main Heading for Screen 3 <br>Current Value :  \" $screen3_title \"</h2>
<input placeholder='Screen 2 heading here' type='text' style='font-size:20px;width:70%' value=''> &#160 &#160 &#160 <input type='submit' value='Save Changes' style='font-size:20px;border-radius:8px;border:none;'>
</center>
<br>
<center>
<h2>
Caption for Project 1
</h2>
<input type='text'>
<br>
<h2>
Caption for Project 2
</h2>
<input type='text'>
<br>
<h2>
Caption for Project 3
</h2>
<input type='text'>
<br>
<h2>
Caption for Project 4
</h2>
<input type='text'>
</center>
<hr/>
<center>
<h2>
Description for Project 1
</h2>
<textarea style='width:30%;height:100px;resize:none;'>
</textarea>
<br>
<h2>
Description for Project 2
</h2>
<textarea style='width:30%;height:100px;resize:none;'>
</textarea>
<br>
<h2>
Description for Project 3
</h2>
<textarea style='width:30%;height:100px;resize:none;'>
</textarea>
<br>
<h2>
Description for Project 4
</h2>
<textarea style='width:30%;height:100px;resize:none;'>
</textarea></center>
<hr/>
<center>
<h2>
Image for Project 1
</h2>
<input type='file'>
<br>
<h2>
Image for Project 2
</h2>
<input type='file'>
<br>
<h2>
Image for Project 3
</h2>
<input type='file'>
<br>
<h2>
Image for Project 4
</h2>
<input type='file'>
</center>
<hr/>
<center><h2>Main Heading for Screen 4 <br>Current Value :  \" $screen4_title \"</h2>
<input placeholder='Screen 4 heading here' type='text' style='font-size:20px;width:70%' value=''> &#160 &#160 &#160 <input type='submit' value='Save Changes' style='font-size:20px;border-radius:8px;border:none;'>
</center>
<center>
<h2>
Graduation College Name aand Location
</h2>
<textarea style='width:30%;height:100px;resize:none;'>
</textarea>
<br>
<h2>
Junior College Name and Location
</h2>
<textarea style='width:30%;height:100px;resize:none;'>
</textarea>
<br>
<h2>
High School Name and Location
</h2>
<textarea style='width:30%;height:100px;resize:none;'>
</textarea>
<br>
</center>
<!-- ===================================================================================================================
								Graduation Details
===================================================================================================================== -->
<br>
<center>
<hr/>
<h1>Graduation Details
</h1>
<hr/>
</center>
<br>
<center>
<table style='text-align:center;width:90%;border-color:#48C9B0;border:solid 1px #48C9B0;' cellspacing='0'  border='1'>
<tr>
<td>
Name Of The Graduation Degree : $edu3_stream
</td>
</tr>
<tr>
<td>
<input type='text'>
</td>
</tr>
<tr>
<td colspan='2'>
<input type='submit' value='Update Name of Graduation Degree' style='font-size:20px;border-radius:8px;border:none;'>
</td>
</tr>
</table>
<br>
<center>
<h2>List Of Subjects and Corresponding mark obtained in Graduation.
</h2>
</center>
<center>
<table style='text-align:center;width:90%;border-color:#48C9B0;border:solid 1px #48C9B0;' cellspacing='0'  border='1'>";

$subFile = file('../innertxt/index_innertxt/edu3_sub_list');
$marksFile = file('../innertxt/index_innertxt/edu2_marks_list');
$line_count = count($subFile);x
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
<tr>
<td>Name Of subject : <input type='text'>
</td>
<td>Marks / Grade Obtained : <input type='text'>
</td>
</tr>
<tr>
<td colspan='2'>
<input type='submit' value='Add Subject' style='font-size:20px;border-radius:8px;border:none;'>
</td>
</tr>
</table>
</center>
<br>
<center>
<table style='text-align:center;width:90%;border-color:#48C9B0;border:solid 1px #48C9B0;' cellspacing='0'  border='1'>
<tr>
<td>
Current Overall Percentage : $edu3_percentage
</td>
<td>
<input type='text'>
</td>
</tr>
<tr>
<td colspan='2'>
<input type='submit' value='Update Percentage' style='font-size:20px;border-radius:8px;border:none;'>
</td>
</tr>
</table>
<br>

<!-- ===================================================================================================================
								Graduation Details
===================================================================================================================== -->
<br>
<center>
<hr/>
<h1>Junior College Details
</h1>
<hr/>
</center>
<br>
<center>
<table style='text-align:center;width:90%;border-color:#48C9B0;border:solid 1px #48C9B0;' cellspacing='0'  border='1'>
<tr>
<td>
Name Of The Junior College Stream : $edu2_stream
</td>
</tr>
<tr>
<td>
<input type='text'>
</td>
</tr>
<tr>
<td colspan='2'>
<input type='submit' value='Update Name of Junior College Stream' style='font-size:20px;border-radius:8px;border:none;'>
</td>
</tr>
</table>
<br>
<center>
<h2>List Of Subjects and Corresponding mark obtained in Junior College.
</h2>
</center>
<center>
<table style='text-align:center;width:90%;border-color:#48C9B0;border:solid 1px #48C9B0;' cellspacing='0'  border='1'>";

$subFile = file('../innertxt/index_innertxt/edu2_sub_list');
$marksFile = file('../innertxt/index_innertxt/edu2_marks_list');
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
<tr>
<td>Name Of subject : <input type='text'>
</td>
<td>Marks / Grade Obtained : <input type='text'>
</td>
</tr>
<tr>
<td colspan='2'>
<input type='submit' value='Add Subject' style='font-size:20px;border-radius:8px;border:none;'>
</td>
</tr>
</table>
</center>
<br>
<center>
<table style='text-align:center;width:90%;border-color:#48C9B0;border:solid 1px #48C9B0;' cellspacing='0'  border='1'>
<tr>
<td>
Current Overall Percentage : $edu3_percentage
</td>
<td>
<input type='text'>
</td>
</tr>
<tr>
<td colspan='2'>
<input type='submit' value='Update Percentage' style='font-size:20px;border-radius:8px;border:none;'>
</td>
</tr>
</table>
<br>
</div>
</body>
</html>
";
?>