<?php
require_once(dirname(__DIR__) ."../../dbconnect.php");
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
  </header>
  <!-- /.l-header .p-header -->

  <main class="l-main">
    <div class="l-container">

      <section class="question-table-container">
        <h1 class="question-table__title">ログイン</h1>
        <form action="">
          <div>
            <h2>Email</h2>
            <input type="text" placeholder="example@posse.com">
          </div>
          <div>
            <h3>パスワード</h3>
            <input type="text" placeholder="password">
          </div>
          <input type="submit"  value="ログイン">
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
