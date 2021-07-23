<?php
    $name = $_POST['fullname'];
    $email = $_POST['emailaddress'];
    $message = $_POST['message'];

    $to = "admin@itsmdshahin.xyz";
    $subject =  "Mail Form itsmdshahin";
    $txt = "Name: ". $name ."\r\n Email: " . $email . "\r\n Message: " . $message . "\r\n";
    $header = "Form: noreplay@itsmdshahin.xyz" . "\r\n" .
    "CC: admin@itsmdshahin.xyz";
    if($email!=NULL){
        mail($to,$subject,$txt,$header);
    }
    header("Location:thankyou.html");
?>