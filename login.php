<?php
include './config.php';
?>		
<!DOCTYPE html>		
<html>		
    <head>		
        <meta charset="utf-8">		
    </head>		
    
    <body style="text-align: center; background: bisque">		
        <h1>		
            ĐĂNG NHẬP ĐỂ XEM TK ADMIN VA USER	
        </h1>	
        <form action="users.php" method="POST">		
            Username: <input type="text" name="username"><br><br>	
            Password: <input type="password" name="password"><br><br>		
            <input type="submit" name="submit" value="Đăng nhập">		
        </form>		 		
    </body>		
</html>		
