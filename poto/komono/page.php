
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="charset=UTF-8" />
        <title>goods</title>
        <link rel="stylesheet" href="../CSS/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css" />
        <link rel="stylesheet" type="text/css" href="../CSS/sli.css">
        <link rel="stylesheet" type="text/css" href="../CSS/buttonn.css">
    </head>
    <style>
    h2{
        text-align: center;
        position: relative;
        top:100px;
    }
    form{
        text-align: center;
        position: relative;
        top:100px;
    }
    .gallery{
        position: relative;
        top:100px;
    }
    .btn03{
        text-align: center;
        position: relative;
        top:120px;
        left: 500px;
    }
    /*ボタン共通設定 */
    .btn03{
        text-align: center;
        position: relative;
        top:120px;
        left: 500px;
    }
</style>
<body background="../photo/tatami.jpeg">
    <h2>こちらがお客様の情報です</h2>
    <form name="mem" method="post" action="study_member_add.html">
        <p><label>名前　　　:</label></p>
        <p><label>ユーザーID:</label></p>
        <p><label>メール　　:</label></p>
        <p><label>住所　　　:</label></p>
    </form>
    <a href="../top.html" class="btn03 pushdown"><span>トップに戻る</span></a>
        <a href="page.php" class="btn03 pushdown"><span>マイページに戻る</span></a>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>
    
    <script src="js/sli.js"></script>
</body>
</html>