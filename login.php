<?php
session_start();
  if(isset($_SESSION['username'])){
        
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    
</head>

<body>
    <div class="container">

        <form action="xulydangnhap.php" method="post">
            <div class="form-inner">
               <div class="div"> <h2>đăng nhập </h2></div>
                <div class="ip">

                    <input type="text" name="username" placeholder="Tên đăng nhập" required>
                </div>
                <div class="ip ippass">

                    <input type="password" class="pass" name="pass" placeholder="Mật khẩu" required>
                 
                </div>
                
             
                <button type="submit" name="dangnhap">Đăng nhập</button>
                <p>Chưa cái tài khoản <a href="dangki.php">Đăng kí ngay</a></p>
            </div>
        </form>
    </div>



</body>

</html>