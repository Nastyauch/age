<?php
$dateFrom = '06/05/1996';
$dateTill = '27/06/2017'; //time();

$dayFrom = mb_strcut( $dateFrom, 0,2 );
$dayTill = mb_strcut( $dateTill, 0,2 );

$monthFrom = mb_strcut( $dateFrom, 3,2 );
$monthTill = mb_strcut( $dateTill, 3,2 );

$yearFrom = mb_strcut( $dateFrom, 6,4 ); //date('Y', strtotime($date_from))
$yearTill = mb_strcut( $dateTill, 6,4 );

if ($dayFrom <= $dateTill) {
	$dn = $dateTill - $dayFrom;
	$days= $days + $dn;
	}
else { $dateTill= $dntill+30;
	$monthTill= $monthTill-1;
	$dn = $dateTill - $dayFrom;
	$days= $days + $dn;
	}
if ($monthFrom <= $monthTill) {	
	for ($i=$monthFrom; $i<=$monthTill;$i++){
		switch ($i) {
			case 1:
			case 3:
			case 5:
			case 7:
			case 8:
			case 10:
			case 11:
				$days++;
				break;
			case 2:
				$days= $days-2;
		}
	}
	$month = (($monthTill - $monthFrom)*30);
	$days= $days + $month;
}	
else { $monthTill= $monthTill+12;
$yearTill= $yearTill-1;
for ($i=$monthFrom; $i<=$monthTill;$i++){
		switch ($i) {
			case 1:
			case 3:
			case 5:
			case 7:
			case 8:
			case 10:
			case 11:
				$days++;
				break;
			case 2:
				$days= $days-2;
		}
	}
	$month = (($monthTill - $monthFrom)*30);
	$days= $days + $month;
}

for ($i=$yearFrom; $i<=$yearTill; $i++){
		if (((($i%4)==0)&&(($i%100)!==0))||(($i%400)==0)) {
			$days++;
		}
	}
	$year= (($yearTill - $yearFrom)*365);
	$days= $days + $year; 
	echo "Vozrast v dnyah: $days ";





/*if ($mesfrom > $mestill) {
	$iteration_count = 
}*/

?>
