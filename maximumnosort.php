<?php
$ap=$_POST['physics'];
$ah=$_POST ['history'];
$ag=$_POST ['geography'];
$am=$_POST ['maths'];
$ab=$_POST ['biology'];
$numArray=array($ap,$ah,$ag,$am,$ab);

$largestNumber=$numArray[0];


foreach ($numArray as $num)
{
	if($num>$largestNumber)
		$largest=$num;
}
echo "Largest Number is: $largest <br />";
?>