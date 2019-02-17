<?php
$name = $_POST['user__name'];
$phone = $_POST['user__phone'];
$email = $_POST['user__email'];
$token = "";
$chat_id = "";
$arr = array(
    'User name: ' => $name,
    'Phone: ' => $phone,
    'Email' => $email 
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
  };
  
  $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
  
  if ($sendToTelegram) {
    header('Location: thank-you.html');
  } else {
    echo "Error";
  }
?>
