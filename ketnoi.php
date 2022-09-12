<?php
    $conn=mysqli_connect('localhost', 'root', '', 'data') or die('lỗi kết nối');
    mysqli_set_charset($conn,'UTF8');
    if($conn==false){
        die("ERROR: không kết nối được nha pro".mysqli_connect_errno());
    }else{
        echo "Đã kết nối";
    }
?>
//kethuc
