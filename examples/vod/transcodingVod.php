<?php
$api = new \Dacast\Api('YOUR_APIKEY');

$vod = $api->vod->encodeVod([
    "vod_id" => 'VOD_ID',
    "template_id" => 'TRANCODING_ID'
]);
var_dump($vod);