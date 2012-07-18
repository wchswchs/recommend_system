#!/usr/bin/php
<?php
$compute_logs_arr = array();
$compute_common_num = 0;
$log_info = "";

$file = fopen("php://stdin", "r");
while($content = fread($file, 4096)) {
	$log_info .= $content;
}

fclose($file);
$person_logs = unserialize($log_info);

if(!$person_logs) {
	exit;	
}

foreach($person_logs as $log) {
	foreach($log['cmp_users'] as $cmp_uid => $user_log) {
		if(count($log['cnt_user']['data']) >= count($user_log)) {
			$compute_logs_arr = array_diff($log['cnt_user']['data'], $user_log);
		}else {
			$compute_logs_arr = array_diff($user_log, $log['cnt_user']['data']);
		}
		
		$compute_logs = serialize($compute_logs_arr);
		
		if(count($log['cnt_user']['data']) >= count($user_log)) {
			$compute_common_num = count($log['cnt_user']['data']) - count($compute_logs_arr);
		}else {
			$compute_common_num = count($user_log) - count($compute_logs_arr);
		}

		$current_uid = $log['cnt_user']['uid'];
		
		print "$current_uid\t$compute_common_num\t$cmp_uid\t$compute_logs\n";
	} 
}