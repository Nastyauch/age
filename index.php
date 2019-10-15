<?php
$date_from = '06/05/1996';
$date_till = '27/06/2017'; //time();

$dnfrom = mb_strcut( $date_from, 0,2 );
$dntill = mb_strcut( $date_till, 0,2 );

$mesfrom = mb_strcut( $date_from, 3,2 );
$mestill = mb_strcut( $date_till, 3,2 );

$godfrom = mb_strcut( $date_from, 6,4 ); //date('Y', strtotime($date_from))
$godtill = mb_strcut( $date_till, 6,4 );

if ($dnfrom <= $dntill) {
	$dn = $dntill - $dnfrom;
	$dni= $dni + $dn;
	}
else { $dntill= $dntill+30;
	$mestill= $mestill-1;
	$dn = $dntill - $dnfrom;
	$dni= $dni + $dn;
	}
if ($mesfrom <= $mestill) {	
	for ($i=$mesfrom; $i<=$mestill;$i++){
		switch ($i) {
			case 1:
			case 3:
			case 5:
			case 7:
			case 8:
			case 10:
			case 11:
				$dni++;
				break;
			case 2:
				$dni= $dni-2;
		}
	}
	$mes = (($mestill - $mesfrom)*30);
	$dni= $dni + $mes;
}	
else { $mestill= $mestill+12;
$godtill= $godtill-1;
for ($i=$mesfrom; $i<=$mestill;$i++){
		switch ($i) {
			case 1:
			case 3:
			case 5:
			case 7:
			case 8:
			case 10:
			case 11:
				$dni++;
				break;
			case 2:
				$dni= $dni-2;
		}
	}
	$mes = (($mestill - $mesfrom)*30);
	$dni= $dni + $mes;
}

for ($i=$godfrom; $i<=$godtill; $i++){
		if (((($i%4)==0)&&(($i%100)!==0))||(($i%400)==0)) {
			$dni++;
		}
	}
	$god= (($godtill - $godfrom)*365);
	$dni= $dni + $god; 
	echo "Vozrast v dnyah: $dni ";





/*if ($mesfrom > $mestill) {
	$iteration_count = 
}*/

?>
