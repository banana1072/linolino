<!DOCTYPE html>
<html>
<?php
header("X-FRAME-OPTIONS: DENY");
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linolino</title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300" rel="stylesheet">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/post_form.css">
    <link href="https://use.fontawesome.com/releases/v6.2.1/css/all.css" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="../img/rabbit.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/rabbit.png">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body>
    <div class="left-name-wrapper">
        <p class="left-name">Linolino</p>
    </div>
    <div class="post_form">
        <form class="post-form" action="create.php" onsubmit="return check()" method="post">
            <div class="field">
                <label class="label" for="name">タイトル</label>
                <input id="name" class="inputfield title" type="text" name="title">
            </div>
            <div class="field">
                <label class="label" for="message">文章</label>
                <textarea id="content" class="inputfield content" cols="30" name="content" ></textarea>
            </div>
            <div class="field">
                <div class="form_return_btn">
                    <p class="return"><a href="list.php">リスト表に戻る</a></p>
                </div>
                <button type="submit" class="submit">送信</button>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        function check() {
            if (window.confirm('登録をしてよろしいですか？')) {
                return true;
            } else {
                window.alert('登録がキャンセルされました');
                return false;
            }
        }
    </script>
    <script src="../../js/column.js"></script>

</body>

</html>
