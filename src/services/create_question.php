<?php
require_once(dirname(__DIR__) ."/dbconnect.php");

try {
  // questionsテーブルの挿入
  $stt = $dbh->prepare("INSERT INTO questions VALUE (NULL, :content, :image, :supplement)");
  $stt->bindValue(":content", $_POST['content']);
  $stt->bindValue(":supplement", $_POST['supplement']);
  // 画像
  if (isset($_FILES)) {
    //アップロードされたファイルの拡張子を取得
    //ファイル名をユニーク化
    $image = uniqid(mt_rand(), true) . '.' .  substr(strrchr($_FILES['image']['name'], '.'), 1);
    $file = "../assets/img/quiz/" . $image;
    $stt->bindValue(":image", $image, PDO::PARAM_STR);
    move_uploaded_file($_FILES['image']['tmp_name'], $file);
  }
  $stt->execute();

  // choicesテーブルの挿入
  $sql = "SELECT MAX(id) FROM questions";
  $question_id = $dbh->query($sql)->fetchColumn();

  for ($questionNum = 1; $questionNum <= 3; $questionNum++) {
    $stt = $dbh->prepare("INSERT INTO choices VALUE (NULL, :question_id, :name, :valid)");
    $stt->bindValue(":question_id", $question_id);
    $stt->bindValue(":name", $_POST['choice' . $questionNum]);
    if ((int)$_POST['choice'] === $questionNum) {
      $stt->bindValue(":valid", 1);
    } else {
      $stt->bindValue(":valid", 0);
    }
    $stt->execute();
  }
  
  header('Location: http://' . $_SERVER['HTTP_HOST'] . '/admin/');
} catch(PDOException $e) {
  die("エラーメッセージ：{$e->getMessage()}");
} 

