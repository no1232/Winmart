<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
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

        <form action="xulydangki.php" method="post">
            <div class="form-inner">
                 <div class="div"><h2>đăng kí </h2></div>
                <div class="ip">

                    <input type="text" name="username" id="username" placeholder="Tên đăng nhập" required>
                    <div class="loi">                
                    <span> <?php echo isset($error['username']) ? $error['username'] : ''; ?></span>        
                    </div>  
    
                </div>
                <div class="ip ippass">

                    <input type="password" class="pass" id="pass" name="pass" placeholder="Mật khẩu" required>
                    <div class="loi" id="loi2"></div>
                </div>
                <div class="ip">

                    <input type="password" name="apass" placeholder="xác nhận mật khẩu" required>
                    <div class="loi" id="loi3"></div>
                </div>
                <div class="ip">

                    <input type="email" name="email" id="email" placeholder="email" required>
                    <div class="loi" id="loi4"></div>
                </div>
                <div class="ip">

                    <input type="tel" name="sdt" id="sdt" placeholder="Số điện thoại">
                    <div class="loi" id="loi5"></div>
                </div>
                <button type="submit" onclick="check()" name="dangki">Đăng kí</button>
                <p>Đã có tài khoản <a href="login.php">Đăng nhập ngay</a></p>
            </div>
        </form>
    </div>


    <!-- <script src="js/check.js"></script> -->
</body>

</html>