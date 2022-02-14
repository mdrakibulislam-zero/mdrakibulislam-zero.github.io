<?php
    $to = "mdrakibulislam.zero@gmail.com";
    $from = $_SERVER['PHP_SELF']." ".$_POST["email"];
    $fname = $_POST["name"];
    $email = $_POST["email"];
    $lname = $_POST["subject"];
    $headers = "From: $from";
    $message = $_POST["message"];

    $body = "User Message \n";
    $body .= " \n\n\t Name: ".$name;
    $body .= " \n\n\t Email: ".$email;
    $body .= " \n\n\t Subject: ".$subject;
    $body .= " \n\n\t Message: ".$message;

    if(mail($to, $subject, $body, $headers)){
        echo '<label class="success">Email Sent!</label>';
    }else{
        echo '<label class="error">Something went wrong! Please try again.</label>';
    }
?>