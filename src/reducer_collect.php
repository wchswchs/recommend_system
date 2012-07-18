#!/usr/bin/php
<?php
$results = array();
$results_num = array();
$compared_user = array();

$in = fopen("php://stdin", "r");

while($line = fgets($in, 4096)) {
	list($key, $num, $cmp_uid, $data) = preg_split("/\t/", trim($line), 4);
	$results_num[$key.'_'.$cmp_uid] += $num;
	$compared_user[$cmp_uid] = $data;
}

fclose($in);
arsort($results_num);

foreach($results_num as $k => $value) {
	$keys = explode('_', $k);
	if(isset($results[$keys[0]])) {
		continue;
	}
	$results[$keys[0]] = $compared_user[$keys[1]];
	$rs_recommend = $results[$keys[0]];
	
	print "$keys[0]\t$rs_recommend\n";	
}
