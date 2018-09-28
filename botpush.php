<?php



require "vendor/autoload.php";

$access_token = 'Gpvk0HPjYHHQCKDfE1Q9xd8FLHVCLvWAGEhH13r6WiOEBrRRrrjs/1VPTNKf6iY9bgvN7PuGEm/syR5/sCfsMfAh5hN1IhXo9F4F+vUAhmqs305jnXJbFmBe1QmGfJlsd/x3OsU2CJ0ZLnDhhAD6jAdB04t89/1O/w1cDnyilFU='
$channelSecret = '1f8228abac39c865b30ca3ad79333260';

$pushID = 'U352191a57d9c37a94cc3936ad5b6e210';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







