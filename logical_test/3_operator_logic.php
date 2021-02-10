<?php

function bagi($num1, $num2)
{
	$res = 0;
	if($num2 > $num1){
		$res = 0;
	}else{
		$inc = 0;
		for($i = $num2;$i <= $num1;$i += $num2){
			if($num2 <= $num1){
				$inc++;
			}
		}
		$res = $inc;
	}
	return "$num1 : $num2 = $res" . "<br>";
}

echo bagi(7,2);
echo bagi(8,4);

?>