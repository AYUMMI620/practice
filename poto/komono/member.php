
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="charset=UTF-8" />
        <title>top</title>
        <link rel="stylesheet" href="../CSS/style.css" />
    </head>
    <style>
    h2{
        text-align: center;
        position: relative;
        top:100px;
    }
    p{
        text-align: center;
        padding: 4px 0;
        position: relative;
        top:100px;
    }
    .men{
        padding: 5px 0;
    }
    </style>
    <body background=../photo/otya.jpeg>
    <h2>お客様情報を登録してください</h2>
    <form name="mem" method="post" action="study_member_add.html">
        <p><label>名前</label><input type="text"  name="name" required></p>
        <p><label>ユーザーID</label><input type="text"  name="ID" required></p>
        <p><label>　メール　</label><input type="email" name="mail" required></p>
        <p><label>　住所　　</label><input type="address" name="address" required></p>
        <p><label>パスワード</label><input type="password" name="pass" id="pass" required></p>
        <p><label>パスワード(確認)</label><input type="password" name="pass2" id="pass2" required></p>
        <p><label>利用規約に同意します。</label><input type="checkbox" name="kiyaku" required ></p>
    </form>
    </body>
</html>