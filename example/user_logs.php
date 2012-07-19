<?php
$logs = array();

$logs[0]['cnt_user']['uid'] = 146;
$logs[0]['cnt_user']['data'] = array('book1', 'book3', 'book6');

$logs[0]['cmp_users'][123] = array('book1', 'book3', 'book16', 'book7');

$logs[0]['cmp_users'][245] = array('book1', 'book2', 'book6');

$logs[0]['cmp_users'][3] = array('book1', 'book6');


$logs[1]['cnt_user']['uid'] = 148;
$logs[1]['cnt_user']['data'] = array('book1', 'book2', 'book6');

$logs[1]['cmp_users'][1231] = array('book1', 'book3', 'book6', 'book7');

$logs[1]['cmp_users'][2452] = array('book1', 'book2', 'book6', 'book8');

$logs[1]['cmp_users'][3] = array('book1', 'book6');


$logs1[0]['cnt_user']['uid'] = 146;
$logs1[0]['cnt_user']['data'] = array('book1', 'book3', 'book6');

$logs1[0]['cmp_users'][1232] = array('book1', 'book3', 'book6', 'book7', 'book17');

$logs1[0]['cmp_users'][2451] = array('book1', 'book12', 'book6');


$logs2[1]['cnt_user']['uid'] = 149;
$logs2[1]['cnt_user']['data'] = array('book1', 'book7', 'book6');

$logs2[1]['cmp_users'][1231] = array('book1', 'book3', 'book6', 'book7');

$logs2[1]['cmp_users'][24522] = array('book1', 'book7', 'book6', 'book9');

$logs2[1]['cmp_users'][3] = array('book1', 'book6');

$logs = serialize($logs);
$logs1 = serialize($logs1);
$logs2 = serialize($logs2);

print "$logs\n";
print "$logs1\n";
print "$logs2\n";
