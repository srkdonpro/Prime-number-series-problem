<?php

//		Prime Numbers: 1+3+5+7+11+...(total 10 prime number)=?
$count=0;
$sum=0;

for($i=1;;$i++){
	if($count==10){
		break;
	}
	if($i%2==0){
		continue;
	}
	else{
		if($i==1){
			$count++;
			$sum=$sum+$i;
			echo $i."+";
		}
		else{
			$prime="Checking";
			for($j=2;$j<$i;$j++){
				if($i%$j==0){
					$prime="No";
					break;
				}
			}
			if($prime=="Checking"){
				$count++;
				$sum=$sum+$i;
				if($count<10){
					echo $i."+";
				}
				elseif($count==10){
					echo $i."=";
				}
			}
		}
	}
}
echo $sum;

?>