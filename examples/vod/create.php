<?php
$api = new \Dacast\Api('YOUR_APIKEY');
$vod = $api->vod->uploadVod(
    [
        "originalFilename" => 'NAME OF YOUR FILE',
        "file" => "./test/test.mp4" //vod source
    ],
    function ($progress) {
        return $progress;
    },
    function ($success) {
        return $success;
});
var_dump($vod);