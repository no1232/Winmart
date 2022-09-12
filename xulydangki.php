<?php
    session_start();
    header('Content-Type: text/html; charset=utf-8');
    //kết nối database
    $conn = mysqli_connect('localhost', 'root', '', 'data') or die('Lỗi kết nối');
    mysqli_set_charset($conn, "utf8");
    $err = array();
    $check=true;
    if(isset($_POST['dangki'])){
       $username=trim($_POST['username']);
        $pass=trim($_POST['pass']);
        $apass=trim($_POST['apass']);
        $email=trim($_POST['email']);
        $sdt=trim($_POST['sdt']);
        $username = $_POST['username'];
        
        if(strlen($username)>30||strlen($username)<10){
            $check=false;
            $err['username'] = 'Bạn chưa nhập tên';
         echo '<script language="javascript">alert("Tên phải trong khoảng từ 10 đến 30 kí tự "); window.location="dangki.php";</script>';
        }
        
        if(strlen($pass)>30||strlen($pass)<5){
            $check=false;
             $err1='Tên không được lớn hơn 50 ký tự';
             echo '<script language="javascript">alert("Mật khẩu phải trong khoảng từ 6 đến 30 kí tự "); window.location="dangki.php";</script>';
        }
        if(strlen($apass)>30||strlen($apass)<5){
            $check=false;
             $err1='Tên không được lớn hơn 50 ký tự';
             echo '<script language="javascript">alert("Xác nhận mật khẩu phải trong khoảng từ 6 đến 30 kí tự "); window.location="dangki.php";</script>';
        }
        if($pass!=$apass){
            $err1="Mật khẩu phải trùng với mật khẩu nhập lại";
            $check=false;
            echo '<script language="javascript">alert("Mật khẩu phải trùng với mật khẩu nhập lại"); window.location="dangki.php";</script>';
        }
        if(!is_numeric($_POST['sdt'])){
            $err1="Mật khẩu phải trùng với mật khẩu nhập lại";
            $check=false;
            echo '<script language="javascript">alert("Số điện thoại phải là  số"); window.location="dangki.php";</script>';
             }
        if(strlen($_POST['sdt'])!=10){
            $err1="Mật khẩu phải trùng với mật khẩu nhập lại";
            $check=false;
            echo '<script language="javascript">alert("Số điện thoại phải là 10 số"); window.location="dangki.php";</script>';
        }
       

        if($check==true){
           

                $sql = "SELECT * FROM duan WHERE username = '$username' OR email = '$email'"; 
                $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="dangki.php";</script>';
                
                        // Dừng chương trình
                        die();
                    } else {
                        $sql = "INSERT INTO duan (username, pass, email, sdt) VALUES ('$username','$pass','$email','$sdt')";
                         echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="login.php";</script>';
                         if (mysqli_query($conn, $sql)) {
                            echo "Tên đăng nhập: " . $_POST['username'] . "<br/>";
                            echo "Mật khẩu: " . $_POST['pass'] . "<br/>";
                            echo "Email đăng nhập: " . $_POST['email'] . "<br/>";
                            echo "Số điện thoại: " . $_POST['sdt'] . "<br/>";
                          
                            header("location:login.php");
                           
                        } else {
                            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="dangki.php";</script>';
                        }
                }
            }
             
        }
       



?>