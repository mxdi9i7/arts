<?php

if(isset($_POST['email'])){
    $to = "peter.zheng88228@gmail.com";
    $fn = $_POST['first_name'];
    $ln = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $send_message = "From ".$fn." ".$ln." / ".$email.", Message :".$message."";
    if(mail($to,"Art Message From ".$fn."".$ln,$send_message)){
        echo "sent";
    }else{
        http_response_code(500);
    }
}

?>