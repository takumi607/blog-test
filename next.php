<?php
$servername = 'localhost';
$username = "root";
$password = "root";
$dbname = "blog_test";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
  echo "Error: ".$conn->error;
}



/*$sql = "INSERT INTO article(title,sentence)
VALUES('$title','$text')";
if ($conn ->query($sql) == TRUE){
}
else{
  echo "Failed: \n".$conn->error;}*/

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>blog</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand px-3" href="home.php"><h4>Mogi's Blog</h4></a>
          <ul class="navbar-nav px-3z">
            <li class="nav-item ">
              <a class="nav-link d-none d-lg-block" href="#">Sign Out</a>
            </li>
          </ul>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                      <ul class="navbar-nav ">
                        <li class="nav-item">
                          <a class="nav-link  d-block d-lg-none" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active d-block d-lg-none" href="next.php">Post blog</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link d-block d-lg-none" href="#">Sign out</a>
                        </li>

                      </ul>
                </div>
        </nav>

      </header>
      <div class="container-fluid">
        <div class="row">
          <nav class="col-md-2 d-none d-lg-block sidebar p-2">
            <div class="sidebar-sticky">
              <ul class="nav flex-column ">
                <li class="nav-item "><a class="nav-link  text-muted"href="home.php"><h5>Home</h5></a></li>
                <li class="nav-item "><a class="nav-link active text-dark"href="next.php"><h5>Post blog</h5></a></li>
              </ul>
            </div>
      </nav>
        <div id="main" class="col ">
          <div class="row justify-content-center">
            <form class="col-11 p-2 bg-light m-4" action="home.php" method="post">
              <div class="form-group p-1">
                <input type="text" class="form-control" name="input_title" placeholder="Input title">
              </div>
              <div class="form-group p-1">
                <textarea class="form-control" style="height:600px" name="input_text" rows="3" placeholder="Input your text"></textarea>
              </div>
              <div class="text-right">



                <input class="btn btn-secondary" type="submit" value="Upload">
              </div>
            </form>


          </div>
        </div>
      </div>
    </div>
    <div class="footer bg-dark" style="height:200px">
      <div class="row h-100">
        <div class="col text-white">
          <h1>こんにちは</h1>

        </div>
        <div class="col text-white">
          <h1>こんにちは</h1>

        </div>
        <div class="col text-white">
          <h1>こんにちは</h1>

        </div>

      </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
      -->
  </body>
  </html>
