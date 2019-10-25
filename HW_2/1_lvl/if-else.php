<?php

echo "Enter your IQ\n";
$handle = fopen("php://stdin","r");
$iq = fgets($handle);



	if ($iq < 20){
		echo "Coffee from MCDonalds\n";
		}
	elseif (($iq >= 20)&&($iq <50)){
		echo "Coffee from Aroma Kava\n";
		}
	elseif (($iq >= 50)&&($iq <100)){
		echo "Coffee from home\n";
		}
	else echo "Coffee from A-level ";
	
?>