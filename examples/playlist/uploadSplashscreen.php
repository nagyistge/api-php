<?php
$api = new \Dacast\Api('YOUR_APIKEY');

$playlist = $api->playlist->uploadSplashscreen([
    "id" => 'SET_YOUR_OWN_PLAYLIST_ID',
    "file" => "./test/test.jpg" //image source
]);*/
var_dump($playlist);