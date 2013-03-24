<?php

if($_POST['Count']=='Count'){
	$firstdate=$_POST['tgl1'];
	$secondate=$_POST['tgl2'];
	
	$pecah1=explode("-",$firstdate);
	$tgl1=$pecah1[2];
	$bln1=$pecah1[1];
	$thn1=$pecah1[0];
	
	$pecah2=explode("-",$secondate);
	$tgl2=$pecah2[2];
	$bln2=$pecah2[1];
	$thn2=$pecah2[0];
	
	$jd1 = GregorianToJD($bln1, $tgl1, $thn1);
	$jd2 = GregorianToJD($bln2, $tgl2, $thn2);
	
	$jeda=$jd2-$jd1;
	
	$tarif=$jeda*250000;
	
	//echo $jeda;
	echo "<br/>Date ".$firstdate." and ".$secondate." have difference: ".$jeda;


} else {
echo "Failed to send data!";
}

?>