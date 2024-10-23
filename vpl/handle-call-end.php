#!/usr/bin/php -q

<?php

require(__DIR__ . '/vendor/autoload.php');

$agi = new AGI();

$call_id = $agi->get_variable("SIPCALLID");
$caller_number = $agi->request['agi_callerid'];
$call_timestamp = date('Y-m-d H:i:s');
$remote_ip = $agi->request['agi_peer'];
$called_number = $agi->request['agi_extension'];

$base_url = 'http://dialify.dgtlid.com';
$sip_secret = 'abcdefghijklmnopqrstuvwxyz';

$url = $base_url . "/call-end/{$call_id}/{$sip_secret}?timestamp={$call_timestamp}";

$response = file_get_contents($url);
