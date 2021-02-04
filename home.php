<?php
$servername = 'localhost';
$username = "root";
$password = "root";
$dbname = "blog_test";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
  echo "Error: ".$conn->error;
}

$title = htmlspecialchars($_POST['input_title']);
$text = $_POST['input_text'];
if($title||$text){
  $sql = "INSERT INTO article(title,sentence)
  VALUES('$title','$text')";
  if ($conn ->query($sql) == TRUE){
  }
  else{
    echo "Failed: \n".$conn->error;}
}



/*$title = array();
$text = array();
$title[] = "【速報】日本からの渡航を原則再禁止発表　EU コロナ感染拡大を受け";
$title[] = "新型コロナが引き起こす身体の異常が次々発覚";
$title[] = "中国国防省「台湾の独立は戦争を意味する」";
$text[] = "EUが日本からの渡航を再び原則禁止。EU（ヨーロッパ連合）は28日、日本からの渡航を原則禁止すると発表した。EUは2020年3月、新型コロナウイルスの感染拡大を受けて、EU域外からの渡航を原則禁止した。その後、2020年7月に、日本はこの禁止措置の対象から除外されたが、国内の感染者が増えていることを受け、再び適用された。ただ、日本からの渡航者に対する入国管理は、今回のEUの方針を受け、加盟各国が最終的に判断する。";
$text[] = "スペインの研究チームが感染初期の兆候として「コロナ舌」と呼ばれる異常が発生する事があるとした報告書をまとめました。どんな症状なのでしょうか。舌にできた大きな斑点。これは、新型コロナウイルスによる体の異常だといいます。確認されたのはスペイン。世界各地で“コロナ舌”と報じられています。スペインの研究チームが新型コロナウイルスの304人の感染者を調査すると、感染者の4人中1人が舌に異常を感じたといいます。舌が腫れることもあり、歯形が付いてしまうほどです。感染初期に起こる兆候で、味覚を失うといいます。そして、10人中4人は手や足に異常を感じ、手の平には小さなしみ。熱を感じたり、赤く変色していることも確認されました。さらに、アメリカではたとえ陰性が出てもウイルスが脳に残り、死に至る可能性があることを発表しました。";
$text[] = "アメリカのバイデン政権が台湾との関係を重視する姿勢を打ち出す中、中国国防省は「台湾の独立は戦争を意味する」と強くけん制しました。中国国防省の報道官は２８日開いた会見で、台湾海峡で行っている中国軍の軍事活動について、アメリカを念頭に外部勢力の干渉と「台湾独立」勢力の挑発に対する厳正な対応であると表明。その上で、「台湾の独立は戦争を意味する」と、これまでにない強い表現で関係強化を進めるアメリカと台湾をけん制しました。";
date_default_timezone_set("Asia/Tokyo");*/


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
    <header>
      <!--<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Features</a>
                <a class="nav-item nav-link" href="#">Pricing</a>
                <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </div>
            </div>
          </nav>-->

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
                        <a class="nav-link active d-block d-lg-none" href="home.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link d-block d-lg-none" href="next.php">Post blog</a>
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
              <li class="nav-item"><a class="nav-link text-dark"href="home.php"><h5>Home</h5></a></li>
              <li class="nav-item"><a class="nav-link  text-muted"href="next.php"><h5>Post blog</h5></a></li>
            </ul>
          </div>
        </nav>
        <div id="main" class="col">
          <div class="row">

            <div class="col-fluid   p-4">
              <?php
                $sql = "SELECT id , title ,sentence,reg_data FROM article ORDER by id DESC";//WHERE条件にあった物を探す　ORDERで指定した順に並べる
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){?>
              <ul class="border border-2 p-2 bg-light">
                <h3 id="Title"><?php if (!$row['title']) {
                  echo "No title";
                }else {echo $row['title'];}?></h3>
                <h5 class="text-muted"><?php echo $row['reg_data'];?></h5>
                <p id="text"><?php if (!$row['sentence']) {
                  echo "No text.";
                }else{echo $row['sentence'];}?></p>

              </ul>
            <?php  }
              }else{?>
              <ul class="border border-2 p-2 bg-light">
              <h3><?php echo "No data in database.".$result->error;}?></h3>
                </ul>
            </div>

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
