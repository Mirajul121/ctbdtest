<?php 
##//
$name1 ="Jho";
$name2 ="Asadee";
$name3 ="Abdur Rahman";

$length1 = strlen($name1);
$length2 = strlen($name2);
$length3 = strlen($name3);

if($length1 < $length2 &&  $length1< $length3){
	if ($length1 % 2== 0) {
		echo "You are general";
	} else{
		echo "You are different";
	}

	}elseif ( $length2 < $length1 &&  $length2<$length3) {
		if ($length2 % 2== 0) {
		echo "You are general";
	} else{
		echo "You are different";
	}}

	else{
		if ($length3 % 2== 0) {
		echo "You are general";
	} else{
		echo "You are different";
	}
		
	}  
//


 ?>
