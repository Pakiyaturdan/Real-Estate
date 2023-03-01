<?php
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' && !empty($_POST['name'])){
    $message = 'Имя: ' . $_POST['name'] . ' <br> ';
    $message = 'Фамилия: ' . $_POST['second_name'] . ' <br> ';
    $message = 'Телефон: ' . $_POST['phone'] . ' <br> ';
    $message = 'Email: ' . $_POST['email'] . ' <br> ';
    $message = 'Как мы можем вам помочь: ' . $_POST['coment'] . ' <br> ';

    $mailTo = "garantgayrimenkul@gmail.com";
    $subject = "Письмо с сайта"
    $headers= "MIME-Versione: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: info@site.ru <info@site.ru>\r\n";
    if(mail($mailTo, $subject, $message, $headers)) {
        echo "Сообщение отправлено!";
    } else {
        echo "Сообщение не отправлено!";
    }
}
?>
