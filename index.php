<?php
require "vendor/autoload.php";
$access_token = '5AlCUC043hOJqKAofMoPLcdvATJH2BLdlwJ3/lBlKOM2/7FpjTTA/NNFjTSrGCnHwOzB7jmQhPD5upGPH9uunYoTRCvsAMoID62PkBhRAppFEUQklhq48wJOngZTep4kungvsl/n0F9CCP1hOEihBAdB04t89/1O/w1cDnyilFU=';
$channelSecret = '86fdda7e68a0484a6d79a81640dd1871';
$idPush = 'Ue8c4c0ea11b3c76c1f787be5e384b496'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage('Ue8c4c0ea11b3c76c1f787be5e384b496', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
