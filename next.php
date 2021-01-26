<?php
$servername = 'localhost';
$username = "root";
$password = "root";
$dbname = "blog_test";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
  echo "Error: ".$conn->error;
}

$title = htmlspecialchars($_POST['title']);
$text = $_POST['text'];

$sql = "INSERT INTO article(title,sentence)
VALUES('$title','$text')";
if ($conn ->query($sql) == TRUE){
}
else{
  echo "Failed: \n".$conn->error;}



$sql = "SELECT id , title ,sentence,reg_data FROM article ORDER by id DESC";//WHERE条件にあった物を探す　ORDERで指定した順に並べる
$result = $conn->query($sql);
if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    echo "title : " . $row['title']." time: ".$row['reg_data']."<br>"
    .$row['sentence'].'<br><br>';
  }
}else{
  echo "0".$result->error;}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>title</title>
  <link rel="stylesheet" href="test_blog.css">
</head>

<body>
  <form action="practice.php" method="post">
 <input type="submit" value="back"/>
</form>
</body>

</html>
