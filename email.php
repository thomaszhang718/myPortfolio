<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['text'];

//send email
    mail("warhammerkid@gmail.com", "Message from" .$email, $message);
}
?>