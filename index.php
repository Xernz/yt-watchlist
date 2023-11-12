<?php
    require './functions/get_data.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <div>
                <a href="/">
                    <img src="./images/logo/logo.png" alt="">
                </a>
            </div>
            <div class="d-flex" role="search">
                <a href="input">
                <button class="btn btn-outline-success" type="submit">+ Tambah video</button>
                </a>
            </div>
        </div>
    </nav>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Duration</th>
            </tr>
        </thead>
        <tbody>
            <tr>

            </tr>
        </tbody>
    </table>
                <button>Edit</button>
                <button>Delete</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>