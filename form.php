<?php
    $to = 'iamronitmishra@gmail.com';
    $subject = 'New booking!';
    $trim = $_POST['trim'];
    $fullname = $_POST['fullname']
    $phonenumber = $_POST['phonenumber']
    $email = $_POST['email']
    $fromlocation = $_POST['fromlocation']
    $tolocation = $_POST['tolocation']
    $datetime = $_POST['datetime']
    $senderaddress = $_POST['senderaddress'] 




    $message =  'Trim: ' . $trim . '\n' . 'Name: ' . $fullname . '\n' . 'Phone Number: ' . $phonenumber . '\n' . 'Email: ' . $email . '\n' . 'From Location: ' . $fromlocation . '\n' . 'To location: ' . $tolocation . '\n' . 'Date and Time: ' . $datetime . '\n' . 'Sender Address: ' . $senderaddress . '\n' .
    //sending mail
    if(mail($to, $subject, $message)){
        echo 'successful'
    }
    else{
        echo 'try again'
    }
?>