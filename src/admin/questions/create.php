<?php
require_once(dirname(__DIR__) ."/../dbconnect.php");

session_start();
if (!isset($_SESSION['id'])) {
  header('Location: /admin/auth/signin.php');
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POSSE 初めてのWeb制作</title>
  <!-- スタイルシート読み込み -->
  <link rel="stylesheet" href="../../assets/styles/common.css">
  <link rel="stylesheet" href="../../styles/admin/style.css">
  <!-- Google Fonts読み込み -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Plus+Jakarta+Sans:wght@400;700&display=swap"
    rel="stylesheet">
  <script src="../../assets/scripts/common.js" defer></script>
</head>

<body>
  <header id="js-header" class="l-header p-header">
    <div class="p-header__logo"><img src="../../assets/img/logo.svg" alt="POSSE"></div>
    <button class="p-header__button" id="js-headerButton"></button>
    <div class="p-header__inner">
      <nav class="p-header__nav">
        <ul class="p-header__nav__list">
          <? if (isset($_SESSION['name'])):?>
            <li class="p-header__nav__item">
              <p class="p-header__nav__item__link"><?= $_SESSION['name'] ?>さん</p>
            </li>
          <? endif; ?>
          <li class="p-header__nav__item">
            <a href="./" class="p-header__nav__item__link">ログアウト</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- /.l-header .p-header -->

  <main class="l-main">
    <div class="l-container">
      <nav class="menu__container">
        <ul class="menu__inner">
          <li class="menu__inner--list">
            <a href="./">ユーザー招待</a>
          </li>
          <li class="menu__inner--list">
          <a href="../">問題一覧</a>
          </li>
          <li class="menu__inner--list">
          <a href="./create.php">問題作成</a>
          </li>
        </ul>
      </nav>

      <section class="question-table-container">
        <h1 class="question-table__title">問題作成</h1>
        <form method="post" action="../../services/create_question.php" enctype="multipart/form-data">
          <div>
            <h2>問題文：</h2>
            <input type="text" name="content" placeholder="問題文を入力してください">
          </div>
          <div>
            <h2>選択肢：</h2>
            <input type="text" name="choice1" placeholder="選択肢1を入力してください">
            <input type="text" name="choice2" placeholder="選択肢2を入力してください">
            <input type="text" name="choice3" placeholder="選択肢3を入力してください">
          </div>
          <div>
            <h2>正解の選択肢</h2>
            <input type="radio" name="choice" value="1">選択肢1
            <input type="radio" name="choice" value="2">選択肢2
            <input type="radio" name="choice" value="3">選択肢3
          </div>
          <div>
            <h2>問題の画像</h2>
            <input type="file" name="image">
          </div>
          <div>
            <h2>補足：</h2>
            <input type="text" name="supplement" placeholder="補足を入力してください">
          </div>
          <input type="submit" value="送信" />
        </form>
      </section>
    </div>
  </main>
  <!-- /.l-main -->
  <!-- /.p-line -->

  <footer class="l-footer p-footer">
    <div class="l-footer__inner">
      <span class="p-footer__logo">
        <img src="../../assets/img/logo.svg" alt="POSSE">
      </span>
      <a href="https://posse-ap.com/" target="_blank" rel="noopener noreferrer" class="p-footer__siteinfo__link">POSSE公式サイト</a>
    </div>
    <div class="p-footer__copyright">
      <small lang="en">©︎2022 POSSE</small>
    </div>
  </footer>
  <!-- /.l-footer .p-footer -->
</body>
</html>
