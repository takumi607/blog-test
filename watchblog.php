<?php
$servername = 'localhost';
$username = "root";
$password = "root";
$dbname = "blog_test";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
  echo "Error: ".$conn->error;
}

$id = htmlspecialchars($_GET['id']);

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
                          <a class="nav-link  d-block d-lg-none" href="next.php">Post blog</a>
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
                <li class="nav-item "><a class="nav-link  text-muted"href="next.php"><h5>Post blog</h5></a></li>
              </ul>
            </div>
      </nav>
        <div id="main" class="col ">
          <div class="row justify-content-center">
            <div id="blog">
              <div class="col p-4">
                <?php
                  $sql = "SELECT id , title ,sentence,reg_data FROM article WHERE id = $id";//WHERE条件にあった物を探す　ORDERで指定した順に並べる
                  $result = $conn->query($sql);
                  if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                      ?>
                    <img class="col-8 col-md-7 col-lg-6 d-block mx-auto" src="sample.png" alt="Card image cap">
                      <h4 class="text-center"><?php if (!$row['title']) {
                        echo "No title";
                      }else {echo $row['title'];}?></h4>
                      <h6 class="text-muted"><?php echo $row['reg_data'];?></h6>
                      <p class="mt-4"><?php if (!row['sentence']) {
                        echo "No title";
                      }else {
                        echo $row['sentence'];
                      }?></p>
                      <?php  }
                        }else{?>
                      <h3><?php echo "No data in database.".$result->error;}?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer mt-5 py-4 bg-dark">
      <div class="row ">
        <div class=" text-white mx-4 ">
          <img src="smile.png" class="img-fluid" style="height:100px;" alt="user icon">
        </div>
        <div class="text-white ">
            <h5>Takumi Mogi</h5>
            <p>0900123456</p>
            <p>example@gmail.com</p>
        </div>
        <div class="text-white">
          <a href="https://twitter.com/home" target="_blank" class="m-1"><i class="fab fa-twitter fa-3x"></i></a>
          <a href="https://github.com/" target="_blank" class="m-1"><i class="fab fa-github fa-3x"></i></a>
          <a href="https://www.linkedin.com/feed/" target="_blank" class="m-1">  <i class="fab fa-linkedin fa-3x"></i></a>
        </div>

      </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/d776b4cbc2.js" crossorigin="anonymous"></script>
      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
      -->
  </body>
  </html>
