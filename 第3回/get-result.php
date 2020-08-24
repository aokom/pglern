<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>

<?php 
    $users = array(
        "ゆうた"=>array(
            "id"=>"0001",
            "age" => 18
        ),
        "まさき" => array(
            "id"=> "0002",
            "age" => 38
        )
    );
?>
名前は <?php echo $_GET["name"]; ?>、
idは <?php echo $users[$_GET["name"]]["id"]; ?>、
年齢は  <?php echo $users[$_GET["name"]]["age"]; ?>です
</body>
</html>