<?php

for ($i=1; $i <= 50; $i++) { 
	if($i % 3 == 0 and $i % 5 == 0){
		echo "FooBar" . "<br>"; 
	}else if($i % 3 == 0){
		echo "Foo" . "<br>"; 
	}else if($i % 5 == 0){
		echo "Bar" . "<br>"; 
	}else{
		echo $i . "<br>";
	}
}
