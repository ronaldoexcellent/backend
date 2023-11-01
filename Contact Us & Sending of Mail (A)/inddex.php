<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sending email with PHP</title>
    </head>
    <body>
        <form method="post" action="send_script.php">
            Name: <imput type="text" name="name"> <br />
            Email: <input type="email" name="email"> <br />
            Subject: <input type="text" name="subjext"> <br />
            Message: <textarea name="msg"></textarea>
            <input type="submit" name="send_message_btn" value="Send">
        </form>
    </body>
</html>