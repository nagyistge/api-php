<?php
$api = new \Dacast\Api('YOUR_APIKEY');

$vod = $api->vod->uploadThumbnail([
    "id" => 'SET_YOUR_OWN_VOD_ID',
    "file" => "./test/test.jpg" //image source
]);
var_dump($vod);