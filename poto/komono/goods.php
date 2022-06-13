
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
    .gallery{/**位置*/
        position: relative;
        top:100px;
    }
    .btn03{
        text-align: center;
        position: relative;
        top:120px;
        left: 500px;
    }
    </style>
    <body background="../photo/tatami.jpeg">
        <h2>当店ではこのような商品を扱っております</h2>
        <ul class="gallery">
            <li><a href="../photo/komono.jpeg" data-lightbox="gallery1" data-title="小物"><img src="../photo/komono.jpeg" alt=""></a></li>
            <li><a href="../photo/daruma.jpeg" data-lightbox="gallery1" data-title="ダルマさん"><img src="../photo/daruma.jpeg" alt=""></a></li>
            <li><a href="../photo/tsu.jpeg" data-lightbox="gallery1" data-title="包"><img src="../photo/tsu.jpeg" alt=""></a></li>
            <li><a href="../photo/ramp.jpeg" data-lightbox="gallery1" data-title="ランプ"><img src="../photo/ramp.jpeg" alt=""></a></li>
        </ul>
        <ul class="gallery">
            <li><a href="../photo/sensu.jpeg" data-lightbox="gallery1" data-title="扇子"><img src="../photo/sensu.jpeg" alt=""></a></li>
            <li><a href="../photo/trip.jpeg" data-lightbox="gallery1" data-title="写真"><img src="../photo/trip.jpeg" alt=""></a></li>
            <li><a href="../photo/piace.jpeg" data-lightbox="gallery1" data-title="ピアス"><img src="../photo/piace.jpeg" alt=""></a></li>
            <li><a href="../photo/kanzashi.jpeg" data-lightbox="gallery1" data-title="かんざし"><img src="../photo/kanzashi.jpeg" alt=""></a></li>
        </ul>
        <a href="../top.html" class="btn03 pushdown"><span>トップに戻る</span></a>
        <a href="page.php" class="btn03 pushdown"><span>マイページに戻る</span></a>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>
        
        <script src="js/sli.js"></script>
    </body>
    </html>