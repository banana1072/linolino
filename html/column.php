<?php
///*DB接続*/////////////////////////////////////
/**/
/**/require_once("../html/CRUD/common.php");
/**/
/**/$sql = "SELECT * FROM columns ORDER BY id ASC;";
/**/$stmt = $pdo->query($sql);
/**/$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
/**/
/**/
/**/
///////////////////////////////////////////////////

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linolino</title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300" rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/column.css">
    <link href="https://use.fontawesome.com/releases/v6.2.1/css/all.css" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="../img/rabbit.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/rabbit.png">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../js/index.js"></script>

</head>

<body>
    <div class="left-name-wrapper">
        <p class="left-name">Linolino</p>
    </div>
    <div class="navi">
        <nav class="g-navi">
            <div class="container nav-wrapper">
                <ul>
                    <li class="nav-item">
                        <a href="../index.html">TOP</a>
                    </li>
                    <li class="nav-item"><a href="../html/news.html">NEWS</a></li>
                    <li class="nav-item">
                        <a href="../html/about.html">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a href="../html/movie.html">MOVIE</a>
                    </li>
                    <li class="nav-item">
                        <a href="../html/discograpy.html">DISCOGRAPYH</a>
                    </li>
                    <li class="nav-item"><a href="../html/live.html">LIVE</a></li>
                </ul>
            </div>
        </nav>
        <nav class="g-navi-sp">
            <div class="menu-trigger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
        <nav class="top-nav">
            <a><img src="../img/icon/guitar.png"></a>
        </nav>
    </div>
    <section id="column">
        <h1>COLUMN</h1>
        <div class="column-wrapper">
            <?php foreach ($result as $list) { ?>
            <div class="text-contents">
                <h2><?php echo $list["title"]; ?></h2>
                <p style="white-space:pre-wrap;"><?php echo $list["content"]; ?></p>
            </div>
            <div class="line"></div>
            <?php } ?>
            <ul class="sns">
                <li><a class="twitter" href="https://twitter.com/Linolino_?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter"></i></a></li>
                <li><a class="insta" href="https://www.instagram.com/xlinolinox/"><i class="fab fa-instagram"></i></a></li>
                <li><a class="youtube" href="https://www.youtube.com/@LinolinoLove"><i class="fab fa-youtube"></i></a></li>
                <li><a class="tiktok" href="https://www.tiktok.com/@linolinolove"><i class="fa-brands fa-tiktok"></i></a></li>

            </ul>
        </div>
    </section>
    <footer>
        <hr class="cp_hr07">

        <p class="footer-top">Linolino</p>
        <p class="footer-text">このホームページに掲載されている一切の文書・図版・写真等を、手段や形態を問わず複製、転載することを禁じます。</p>
        <p class="copyright"><i class="fa-regular fa-copyright"></i>Linlino</p>
    </footer>
</body>

</html>
