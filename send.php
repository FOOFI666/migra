<?php

$text = $_POST['text'];
$textTo = $_POST['textTo'];
$tel = $_POST['tel'];

$textTo = htmlspecialchars($textTo);
$tel = htmlspecialchars($tel);
$text = htmlspecialchars($text);

$textTo = urldecode($textTo);
$tel = urldecode($tel);
$text = urldecode($text);

$textTo = trim($textTo);
$tel = trim($tel);
$text = trim($text);

if (mail("foofi.gg777@gmail.com",
        "Новое письмо с сайта",
        "Логин: ".$text."\n".
        "Телефон: ".$tel."\n".
        "Город: ".$text."\n".
        "Form: no-replay@mydomain.ru \r\n")
   ) {
    echo ('Заявка отправленна на рассмотрение');
}

else {
    echo ('Проверьте правильность данных');
}

?>