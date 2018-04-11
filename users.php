<head>
    <meta
        charset="utf-8">
</head>
<?php
    include'./config.php';
    if (!empty($_POST['username']) && !empty($_POST['password'])):
    foreach($users as $item):
        if (($item['username'] == $_POST['username']) && ($item['password'] == $_POST['password'])):
       echo ('Username:'.$_POST['username'].'<br>');
       echo ('Password:'.$_POST['password'].'<br>');
            endif;
            endforeach;
        else:
            echo 'CHƯA NHẬP USERNAME VÀ PASSWORD';
        endif;
?>
<body style="text-align: center; background: hotpink">
    <br><br><a href="login.php">Quay Lại Trang Đăng Nhập </a>
</body>