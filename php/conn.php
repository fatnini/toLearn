<?php

$db_host = 'localhost';
$db_username = 'root';
$db_password = '';

// 伺服器連線
$db_link = @mysqli_connect($db_host,$db_username,$db_password);

if(!$db_link) {
    die('資料庫連線失敗');
} else {
    echo '資料庫連線成功';
    // 設定資料庫查詢編碼
    mysqli_query($db_link, 'SET NAMES "utf8"');
}

// 選擇資料庫
$seldb = mysqli_select_db($db_link, 'toLearn');

if(!$seldb) {
    die('<br>資料庫選擇失敗');
} else {
    echo('<br>資料庫選擇成功');
}

?>