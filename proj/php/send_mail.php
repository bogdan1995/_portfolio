<?

require 'phpmailer/phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail -> isSMTP();
$mail -> Host = 'smtp.timeweb.ru';
$mail -> SMTPAuth = true;
$mail -> Username = 'support@ponomarenko-bogdan.ru';
$mail -> Password = 'bogdan1995';
$mail->SMTPSecure = 'ssl';
$mail -> Port = 465;
$mail -> From = 'support@ponomarenko-bogdan.ru';
$mail -> FromName = trim(strip_tags($_POST['name']));
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
        <p><strong>Сообщение:</strong><br/> '. strip_tags($_POST['about']).'</p>
    </body>
</html>';
$mail -> AltBody = 'Alternative text';
if(!$mail->send()) {;
    echo 'Error code: ' . $mail -> ErrorInfo;
} else {
    echo 'OK';
}