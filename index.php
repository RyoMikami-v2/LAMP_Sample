<?php
$dsn = 'mysql:dbname=user;host=127.0.0.1;';
$user = 'otsubo';
$password = 'morijyobi';
try {
    $dbh = new PDO($dsn, $user, $password);
    $sql = "select * from user";
    $result = $dbh->query($sql);

    echo "接続成功\n";
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}
?>