
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="charset=UTF-8" />
    <title>top</title>
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/buttonn.css">
  </head>
  <style>
  form {
  text-align: center;
  margin: 0px 0px 0px 0px;
  padding: 220px 0;
  color: #ffffe0;
  width: 90%;
  object-fit: cover;
}
</style>
<body background=../photo/s.jpeg>
<form method="POST" action="xxx.cgi">
  <div class="loginbun">
    <h2>会員様　ログイン画面はこちらから</h2>
    <p>ユーザID、パスワードをご入力の上、「ログイン」ボタンをクリックしてください。</p>
  </div>
  <div class="login_btn">
    <p><label>ユーザID</label><input type="id" name="user_id" required></p>
    <p><label>パスワード</label><input type="password" name="password" required></p>
  </div>
  <button type="submit" class="btn03 pushdown"><span>ログイン</span></button>
  <a href="../top.html" class="btn03 pushdown"><span>戻る</span></a>
</form>
<div>
  <nav>
    <ul>
      <li>
        <a href="../top.html">トップページ</a>
      </li>
      <li>
        <a href="member.php">会員登録</a>
      </li>
      <li>
        <a href="page.php">マイページ</a>
      </li>
      <li>
        <a href="goods.php">お店</a>
      </li>
    </ul>
  </nav>
</div>
</body>
</html>