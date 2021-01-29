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
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>blog</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand px-3" href="">Mogi's Blog</a>
      <ul class="navbar-nav d-none d-md-none d-lg-flex px-3 float-right">
        <li class="nav-item text-nowrap">
          <a class="nav-link " href="#">Sign Out</a>
        </li>
      </ul>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar p-0">
          <div class="sidebar-sticky">
            <ul class="nav flex-column bg-light">
              <li class="nav-item border "><a class="nav-link active"href="home.php">Home</a></li>
              <li class="nav-item border"><a class="nav-link active"href="next.php">Post blog</a></li>
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
                <input class="btn btn-primary" type="submit" value="Upload">
              </div>
            </form>


          </div>
        </div>
      </div>
    </div>
    <div class="footer text-primary">

    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
