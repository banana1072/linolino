
<?php

///*DB接続*/////////////////////////////////////
/**/
/**/require_once("common.php");
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
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" rel="stylesheet">
    <title>コラムリスト</title>
</head>
<body>
            <div id="content">
                <div class="create_btn">
                    <button>
                        <a href="create_form.php"><i class="fas fa-plus-circle"> コラム追加はこちら</i></a>
                    </button>
                </div>
            <?php if(!empty($_POST["search"])){ ?>
                <p class="return_empty">
                    <a href="list.php">
                        <i class="fa fa-angle-double-left"></i>
                        一覧表示に戻る
                    </a>
                </p>
            <?php } ?>
                <div id="search">
                    <form action="list.php" method="post" >
                        <input type="text" name="search" value placeholder="タイトル名で検索">
                        <button id="sbtn" type="submit" name="search_btn">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
<?php
if(isset($_POST["search_btn"])) {
    if(empty($_POST["search"])){
        header("Location: list.php");
    }
    try{
        $title = $_POST["search"];
        $sql = "SELECT * FROM columns WHERE title LIKE '%$title%'";
        $stmt = $pdo->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>
                <table style="border-collapse: separate">
                        <tr>
                            <td class="id">ID</td>
                            <td class="title">TITLE</td>
                            <td class="content">CONTENT</td>
                            <td class="up">EDIT</td>
                            <td class="dele">DELETE</td>
                        </tr>
                    <?php foreach ($result as $list) { ?>
                        <tr>
                            <td class="id"><?php echo htmlspecialchars($list["id"]); ?></td>
                            <td class="title"><?php echo htmlspecialchars($list["title"]); ?></td>
                            <td class="content"><div class="overflow"><?php echo htmlspecialchars($list["content"]); ?></div></td>
                            <td class="up">
                                <a href="update_form.php?id=<?php echo htmlspecialchars($list["id"]); ?>" >
                                    <i class="fas fa-file-alt"></i>
                                </a>
                            </td>
                            <td class="dele">
                                <a href="delete.php?id=<?php echo htmlspecialchars($list["id"]); ?>"onclick="return confirm('このレコードを削除します。よろしいでしょうか？')">
                                <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
        <?php
        exit;
    } catch (Exception $e) {
    echo $e->getMessage();
    }

}
?>
                <table style="border-collapse: separate">
                        <tr>
                            <td class="id">ID</td>
                            <td class="title">タイトル</td>
                            <td class="content">内容</td>
                            <td class="up">更新</td>
                            <td class="dele">削除</td>
                        </tr>
                    <?php foreach ($result as $list) { ?>
                        <tr>
                            <td class="id"><?php echo htmlspecialchars($list["id"]); ?></td>
                            <td class="title"><?php echo htmlspecialchars($list["title"]); ?></td>
                            <td class="content"><div class="overflow"><?php echo htmlspecialchars($list["content"]); ?></div></td>
                            <td class="up">
                                    <a href="update_form.php?id=<?php echo htmlspecialchars($list["id"]);?>&title=<?php echo htmlspecialchars($list["title"]);?>&content=<?php echo htmlspecialchars($list["content"]);?>" >
                                        <i class="fas fa-file-alt"></i>
                                    </a>
                            </td>
                            <td class="dele">
                                <a href="delete.php?id=<?php echo htmlspecialchars($list["id"]); ?>"onclick="return confirm('このレコードを削除します。よろしいでしょうか？')">
                                <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
</body>
</html>
