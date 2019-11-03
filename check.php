<?php
//print_r($_POST);
$email = $_POST['email'];
$massage = $_POST['massage'];

$error = '';

if (trim($email) == '' && trim($massage) == '') {
    $error = 'Введите Ваш Email и Ваше сообщение';
} elseif (trim($massage) == '') {
    $error = 'Введите само сообщение';
} elseif (strlen($massage) < 10) {
    $error = 'Ваше сообщение должно быть более 10 символов!';
} elseif (trim($email) == '') {
    $error = 'Введите Ваш Email';
}

if($error != '') {
    echo $error;
    exit;
}

$subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

mail('norddd@mail.ru', $subject, $message, $headers);

header('Location: /about.php');

?>