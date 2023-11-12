<?php

    require '../database/db.php';

    function input_data_video($title, $channel, $rating, $duration, $type_vid, $vid_status, $link){

        global $connection;
        $sql = "INSERT INTO watchlist (title, channel, duration, type_vid, vid_status, link) VALUES ('$title', '$channel', '$rating', '$duration', '$type_vid', '$vid_status', '$link')";

    }

?>