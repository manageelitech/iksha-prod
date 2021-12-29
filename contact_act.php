<?php
    $to = "info@ikshasupportservices.com";
    $subject = "New enquiry from IKSHA";
    $message = "
    <html>
    <head>
    <title>Enquiry</title>
    </head>
    <body>
    <p>Enquiry Form</p>
    <table width='100%'>
    <tr>
    <th>Name</th>
    <th>".$_POST['name']."</th>
    </tr>
    <tr>
    <td>Email</td>
    <td>".$_POST['email']."</td>
    </tr>
    <tr>
    <td>Message</td>
    <td>".$_POST['message']."</td>
    </tr>
    </table>
    </body>
    </html>
    ";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <info@ikshasupportservices.com>' . "\r\n";
    $headers .= 'Cc: rudra.pranay@gmail.com' . "\r\n";
    mail($to,$subject,$message,$headers);
?>