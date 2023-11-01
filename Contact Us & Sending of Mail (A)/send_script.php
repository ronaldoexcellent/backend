<?php
    if (isset($_POST['send_message_btn'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['msg'];
        // Content-Type helps email client to parse file as HTML therefore retaining styles
        $headers = "NIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $message = "<html> <head> <title> New message from website contact form </title> </head> <body> <h1>" . $subject . "</h1> <p>" . $msg . "</p> </body> </html>";
        if (mail('website_owner@example.com', $subject, $message, $headers)) {
            echo "Email sent";
        } else {
            echo "Failed to send email. Please try again later";
        }
    }
    /* $to
        ======= user@example.com
        ======= user@example.com, anotheruser@example.com (to multiple users)
        ======= User <user@example.com> specifying the user's username)
    */
    /* $message
        ======= Should contain no more than 70 characters. Each line should be seperated with a CRLF (\r\n). You could solve this simply by wrapping the message text around the PHP wordwrap() function..... $message = wordwrap($message, 70);
    */
    /* $headers
        ======= Optional
        To tell email clients to parse the email as HTML, specify the Content-Type in the header as text/html;charset=UTF-8
    */
?>