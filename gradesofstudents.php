<?php
$score=$_POST['marks'];


switch($score/10)
{
	case 10;
	{
		echo "O";
		break;
	}
	case 9;
	{
		echo "E";
		break;
	}
	case 8;
	{
		echo "A";
		break;
	}
	case 7;
	{
		echo "B";
		break;
	}
	case 6;
	{
		echo "C";
		break;
	}
	case 5;
	{
		echo "D";
		break;
	}
	defaul ;
	{
		echo "F";
	}
}
?>


