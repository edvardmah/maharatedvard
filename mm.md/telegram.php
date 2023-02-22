<?php

/* https://api.telegram.org/bot5206221559:AAFSUOJvSrfWiOoH4LHTS5Yo3jgx-M0TvxM/getUpdates,
 */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$msg = $_POST['user_msg'];
$img = $_POST['user_img'];
$token = "5206221559:AAFSUOJvSrfWiOoH4LHTS5Yo3jgx-M0TvxM";
$chat_id = "-789763716";
$arr = array(
  'Numele de utilizator: ' => $name,
  'Număr de contact: ' => $phone,
  'Email:' => $email,  
  'Mesaj:' => $msg,
  'Este deacord:' => $img
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: ../index.html');
} else {
  echo "Error";
}
?>
