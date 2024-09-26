<?php
require_once(dirname(__DIR__) ."/dbconnect.php");

try {
  $question_id = (int)$_GET['id'];

  $stt = $dbh->prepare("DELETE FROM choices WHERE question_id = :question_id");
  $stt->bindValue(":question_id", $question_id);
  $stt->execute();

  $stt = $dbh->prepare("DELETE FROM questions WHERE id = :question_id");
  $stt->bindValue(":question_id", $question_id);
  $stt->execute();
  
  header('Location: http://' . $_SERVER['HTTP_HOST'] . '/admin/');
} catch(PDOException $e) {
  die("エラーメッセージ：{$e->getMessage()}");
}

