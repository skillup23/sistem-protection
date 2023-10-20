<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

// $name = $_POST['user_name'];
$phone = $_POST['user_phone'];
// $email = $_POST['user_email'];
$token = "5433783089:AAEWmrOB6WXTn8EzgUZV_hKOFg5KD0W52ZY";
$chat_id = "-715506484";
$txt = "";
$arr = array(
//   'Имя пользователя: ' => $name,
  'Сообщение с сайта',
  'Телефон: ' => $phone
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  alert('Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.');
} else {
  alert("Во время отправки произошла ошибка. Ошибка: " + response);
}
?>