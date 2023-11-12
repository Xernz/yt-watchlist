<?php
$video_id = '6lnS-8FVod4'; // Replace with your YouTube video ID
$api_key = 'AIzaSyCdt-gisbN8JptjfD6yx1ZCKhEDhBIhxBo'; // Replace with your YouTube Data API key

function get_youtube_info($video_id, $api_key){
    $json = file_get_contents("https://www.googleapis.com/youtube/v3/videos?id=$video_id&key=$api_key&part=snippet,contentDetails");
    $details = json_decode($json, true);

    $title = $details['items'][0]['snippet']['title'];
    $channel_title = $details['items'][0]['snippet']['channelTitle'];
    $duration = $details['items'][0]['contentDetails']['duration']; // get video duration

    return array('title' => $title, 'channel' => $channel_title, 'duration' => $duration);
}
$info = get_youtube_info($video_id, $api_key);
var_dump($info);

?>