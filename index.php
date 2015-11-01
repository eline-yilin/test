<?php
$arr = array('a','b','c');
var_dump($arr);
echo 'isset 1 ';
var_dump(isset($arr[1]));
echo 'key exist 1 ';
var_dump(key_exists(1, $arr));
unset($arr[1]);
var_dump($arr);
echo 'isset 1 ';
var_dump(isset($arr[1]));
echo 'key exist 1 ';
var_dump(key_exists(1, $arr));
die;

for ($j=0;$j<10000;$j++){
	for($i=0;$i<6;$i++){
		$tempArray[$i] = rand(1, 6);
	}
	$temp = array_count_values($tempArray);
	for ($i=1;$i<7;$i++){
		isset($temp[$i])?0:$temp[$i]=0;
	}
	print_r($temp);
}
die;

$a = 123;
echo 'abcd\'def\ngg$axyz';
echo ".........abcd\'def\ngg{$a}xyz\$arst";die;
?>