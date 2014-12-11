<?php 
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "ryan@ryanmckinnon.com";
    $to = "ryan@ryanmckinnon.com";
    $subject = "Submit from Ryan.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];;
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "Thanks! Message Sent";
?>