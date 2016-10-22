<?php


$a = 'a';

function problem_1($a)

{
$a = array(
	"1" => "one ",
	"2" => "two ",
	"3" => "three",
);
echo $a["1"], $a["2"], $a["3"], "\n";
}
echo problem_1($a);

/*
function problem_2($a)
{
$Mass[] = '2';
$Mass[] = '5';
$Mass[] = '9';
$count = count($Mass);
	for ($i=0; $i<$count; $i++)
	{
		if ($Mass[$i] > $Mass[$i+1])
			echo "max= $Mass[$i]";	
	for ($i = count; $i < $0; $i--)
	{
		if ($Mass[$i] > $Mass[$i+1])
			echo "min= $Mass[$i]";	
	}
}

echo problem_2($a);
*/
?>