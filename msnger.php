<?php
$a = $_POST['whodis'];
$b = $_POST['whatdis'];
//echo "$a $b ";
if($a != '' and $b != '')
{
	$msg = "Name : $a" . "\r\n" . "Message : $b";
	$ex = 0;
	foreach (glob("messages/*.txt") as $filename)
	{
		if(is_file($filename))
		{
			$ex = $ex + 1;;
		}
	}
	//echo "$ex";

	$targ_name = $ex + 1;
	$targ_name = "messages/msg" . $targ_name . ".txt";
	//echo "$targ_name<br>$msg";

	file_put_contents($targ_name,$msg);
}
echo "
<center>
<h1>
Message sent successfully ...
</h1>
<a href='index.php'>
<h2>
Click here to go back
</h2>
</a>
</center>
";
?>