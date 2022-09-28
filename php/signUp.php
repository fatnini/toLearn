<?php

if (isset($_GET['account']) && $_GET['action'] == 'add') {
    $action = $_GET['action'];
    $account = $_GET['account'];
    $password = $_GET['password'];
    $email = $_GET['email'];
    $name = $_GET['name'];
    $phone = $_GET['phone'];
    // 資料庫連線
    include_once('./conn.php');
    // 新增資料
    $sql = "INSERT INTO signUp (account, password, email, name, phone) VALUES ('{$account}', '{$password}', '{$email}', '{$name}', '{$phone}')";
    $result = $db_link -> query($sql);
} else {
    // 錯誤訊息
    echo '資料填寫未完成';
}

if ($result) {
    header('location:../signUpOk.html');
} else {
    // 錯誤訊息
    echo '資料填寫未完成';
}



?>