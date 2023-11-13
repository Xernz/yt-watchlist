<?php

    require '../functions/input.php';

    if(isset($_POST['submit'])){
        
        $title = $_POST['nama'];
        $channel_title = $_POST['deskripsi'];
        $duration = $_POST['rating'];
        $thumbnails = $_POST['status'];
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Youtube Watchlist Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        h3 {color: white}
    </style>
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <h3 style>Input Form</h3>
        <a href="/WAD/yt watchlist" type="button" class="btn-close btn-close-white" aria-label="Close"></a>
    </div> 
  </nav><br>
  <div class="container-fluid">
    <form action="submit" method="post" enctype="multipart/form-data">
    <div class="container-fluid">
        <div class="row">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Link</span>
            <input type="text" class="form-control" placeholder="Insert Youtube Video Link" aria-label="link" aria-describedby="basic-addon1">
            <button type="check" class="btn btn-outline-success">Check Video</button>
        </div>
        </div>
        <div class="row">
        <div class="col-8">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <!-- <h5 class="card-title">Video title</h5>
                        <p class="card-text">Channel: </p>
                        <p class="card-text"><small class="text-muted">Duration: </small></p> -->
                        <?php
                        echo "Video title <br>";
                        echo "Channel: ";
                        ?>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <select class="form-select" aria-label="Default select example">
            <option selected>Select Video type</option>
            <option value="1">Study</option>
            <option value="2">Knowledge</option>
            <option value="3">Podcast</option>
            </select><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" rel="stylesheet" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  </html>