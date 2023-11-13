<?php
    require './functions/get_data.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Youtube Watchlist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <img src= 'https://th.bing.com/th/id/R.fc92e0a3836171aeee46f3094c0d9b39?rik=vRFM2eXuDM4KmQ&riu=http%3a%2f%2fclipart-library.com%2fimages_k%2fyoutube-logo-white-transparent%2fyoutube-logo-white-transparent-24.png&ehk=5eySAirWEU8Z5JfNSNnBDZgCuYR5l8hx0qUE65mt93U%3d&risl=&pid=ImgRaw&r=0' alt="" width="34" height="32">
            <a class="navbar-brand">By Daffa</a>
        </div>
    </nav><br> 
    
        <div class="row">
            <div class="col-10"><h1>Watchlist</h1></div>
            <div class="col-2"> <a href="/WAD/yt watchlist/input" type="button" class="btn btn-outline-primary">Add new</a></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="table-responsive"><br>
        <table class="table align-middle table-dark table-hover table-sm">
            <thead>
                <tr class="table">
                <th scope="col">Thumbnail</th>
                <th scope="col">Title</th>
                <th scope="col">Duration</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="col">Thumbnail</th>
                <th scope="col">Title</th>
                <th scope="col">Duration</th>
                </tr>
            </tbody>
        </table>
        </div>
    <div>
        <button>Edit</button>
        <button>Delete</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>