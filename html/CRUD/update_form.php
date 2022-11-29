<!DOCTYPE html>
<html>
<?php
header("X-FRAME-OPTIONS: DENY");
$id = intval($_GET["id"]);
$title = $_GET["title"];
$content = $_GET["content"];
?>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>コラムの更新</title>
</head>

<body>
    <header>
        <h1>コラムの更新<br><span class="sub">-update-</span></h1>
    </header>
    <div id="content">
        <form action="update.php" method="post" onsubmit="return check()" id="content">
            <h2><span class="strong">「タイトル:<span class="orange"><?php echo $title;?></span>」</span>の登録情報を以下に変更します。</h2>
            <div class="form_input">
                <div class="title">
                    <label>タイトル</label>
                    <input type="text" name="title" value="<?php echo $title; ?>">
                </div>
                <div class="content">
                    <label>文章の内容</label>
                    <input type="text" name="content" value="<?php echo $content; ?>"></input>
                </div>
                <input type="hidden" name="id" value="<?php echo $id;?>">
            </div>
            <div class="form_btn">
                <div class="form_return_btn">
                    <p class="return"><a href="list.php">リスト表に戻る</a></p>
                </div>
                <div class="form_create_btn">
                    <input type="submit" value="更新する">
                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        function check() {
            if (window.confirm('更新をしてよろしいですか？')) {
                return true;
            } else {
                window.alert('更新がキャンセルされました');
                return false;
            }
        }
    </script>
</body>

</html>
