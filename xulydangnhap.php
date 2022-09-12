<?php
//Khai báo sử dụng session
session_start();
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
//Xử lý đăng nhập
$check=true;
if(isset($_POST['dangnhap'])){
    include('ketnoi.php');

    $username = addslashes($_POST['username']);
    $pass = addslashes($_POST['pass']);
    if(strlen($username)>30||strlen($username)<10){
        $check=false;
        $err['username'] = 'Bạn chưa nhập tên';
     echo '<script language="javascript">alert("Tên phải trong khoảng từ 10 đến 30 kí tự "); window.location="login.php";</script>';
    }
    
    if(strlen($pass)>30||strlen($pass)<5){
        $check=false;
         $err1='Tên không được lớn hơn 50 ký tự';
         echo '<script language="javascript">alert("Mật khẩu phải trong khoảng từ 6 đến 30 kí tự "); window.location="login.php";</script>';
    }
    if (!$username || !$pass) {
        echo '<script language="javascript">alert("Vui lòng nhập đủ thông tin"); window.location="login.php";</script>';
        exit;
    }
    
    $query = "SELECT username, pass FROM duan WHERE username='$username'";
     $result = mysqli_query($conn, $query) or die(mysqli_error($conn));


    if (!$result) {
        echo "Tên đăng nhập hoặc mật khẩu không đúng!";
    } else {
        echo "Đăng nhập thành công!";
     
    }
    $row = mysqli_fetch_array($result);
    if ($pass != $row['pass']) {
        echo '<script language="javascript">alert("sai mật khẩu"); window.location="login.php";</script>';
        exit;
    }
        // $_SESSION['username'];
        //  header('location:index.php');

    //Lưu tên đăng nhập
     if($check==true){
        $_SESSION['username'] = $username;
        header('location:index.php');
     }
   
    // die();
    // $connect->close();
}

?>