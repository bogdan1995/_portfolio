<?php
session_start();

$postCaptcha = $_POST['captcha'];
$captcha = $_SESSION['randStrn'];

echo $postCaptcha;
echo $captcha;

if ($postCaptcha != $captcha) {
    echo 'Error';
    exit;
} else {

    require_once 'PHPMailer-master/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail -> isSMTP();
    $mail -> Host = 'smtp.timeweb.ru';
    $mail -> SMTPAuth = true;
    $mail -> Username = 'support@ponomarenko-bogdan.ru';
    $mail -> Password = 'bogdan1995';
    $mail->SMTPSecure = 'ssl';
    $mail -> Port = 465;
    $mail -> From = 'support@ponomarenko-bogdan.ru';

    $mail -> FromName = stripslashes($_POST['name']);
    $mail -> addAddress('ponomarenko.bogdan@yandex.ru', 'Богдан Пономаренко');
    $mail -> CharSet = 'UTF-8';

    $mail -> WordWrap = 50;
    $mail -> isHTML(true);

    $mail -> Subject = 'ponomarenko-bogdan.ru | Сообщение';
    $mail -> Body =
        '<html>
    <head>
        <titile>ponomarenko-bogdan.ru | Сообщение</title>
    </head>
    <body>
        <p><strong>Имя:</strong><br/>'.$mail -> FromName.'</p>
        <p><strong>Email:</strong><br/> '.($_POST['email']).'</p>
        <p><strong>Сообщение:</strong><br/> '.($_POST['about']).'</p>
    </body>
</html>';
    $mail -> AltBody = 'Alternative text';

    if(!$mail->send()) {;
        echo 'Error code: ' . $mail -> ErrorInfo;
    } else {
        echo 'Send mail!';
    }
}
?>