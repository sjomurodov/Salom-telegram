<?php

/**
 * @pcode kanali uchun salom telegram bot kodi
 * @author ShaXzod Jomurodov <shah9409@gmail.com>
 * @contact https://t.me/idFox AND https://t.me/ads_buy
 * @date 12.05.2021 14:30
 */

include 'Telegram.php';
include 'config.php';

$telegra = new Telegram($bot_token);
$efede3 = $telegra->getdate();

//basic
$text = $efede3["message"]["text"];
$foto = $efede3["message"]["photo"];
$msg = $efede3["message"]["message_id"];
$sana = $efede3["message"]["date"];
$chat_id = $efede3["message"]["chat"]["id"];

if ($text == '/start') {
    $content = ['chat_id' => $chat_id, 'text' => 'Xush kelibsiz botga', 'parse_mode' => 'markdown'];
    $telegram->sendMessage($content);
}