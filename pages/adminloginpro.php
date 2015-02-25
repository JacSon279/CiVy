<?php

$a = $_POST['usrnme'];
$b = $_POST['usrpas'];

@$c = file_get_contents('../admin/alpha');
@$d = file_get_contents('../admin/beta');


if($a == $c)
{
	$flag1 = 1;
}
else
{
	$flag1 = 0;
}

if($b == $d)
{
	$flag2 = 1;
}
else
{
	$flag2 = 0;
}

if($flag1 == 1 and $flag2 == 1)
{
	header('location:adminhome.php');
}
else
{
	header('location:../index.php');
}
?>