<?php

    require '../database/db.php';

    function input_data_video($title, $channel, $rating, $duration, $type_vid, $vid_status, $link, $thumbnails){
        global $connection;
        $sql = "INSERT INTO watchlist (title, channel, duration, type_vid, vid_status, link, thumbnails) VALUES ('$title', '$channel', '$rating', '$duration', '$type_vid', '$vid_status', '$link', '$thumbnails')";
    }

?>