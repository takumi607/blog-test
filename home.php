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
              <li class="nav-item border"><a class="nav-link active"href="home.php">Home</a></li>
              <li class="nav-item border"><a class="nav-link active"href="next.php">Post blog</a></li>
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
