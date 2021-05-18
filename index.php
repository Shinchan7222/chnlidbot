<?php
/*
CREDIT TO @Shinchan7222
CHANNEL @MafiaBot_Support
PLEASE DONT REMOVE THIS CREDITS
*/

ob_start();
define('API_KEY','1879977540:AAHq0N9WJ-Lm7vFX_uVyDjpO0LYCPRgjt24'); // put your token here
ini_set("log_errors","off");
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));}else{
return json_decode($res);}}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$message_id = $message->message_id;
$text = $message->text;
$indusbots = $message->forward_from_chat->id;
//////////////////Mafia////////////////////////////Mafia///////Mafia///////////Mafia////////
if($text == "/start"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"
***Hello 👋
I CAN GET ANY PUBLIC AND PRIVATE CHANNEL ID
FORWARD A MESSAGE FROM YOUR CHANNEL TO GET YOUR CHANNEL ID.
FOR USER ID USE:- /id @MafiaBot_Support***",
 'parse_mode'=>"MarkDown",
 'reply_to_message_id'=>$message_id,
  ]);  
 }
elseif(isset($message->forward_from_chat)){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"Your CHANNEL ID is:$indusbots @MafiaBot_Support",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
]); 
}
/////////Mafia////////Mafia///////Mafia///////Mafia////
if ($text == '/id')
bot ('sendMessage' ,[
'chat_id'=>$chat_id,'text'=>"This chat id is $chat_id @MafiaBot_Support"
]);
/*
CREDITS:- @Shinchan7222
CHANNEL:- @MafiaBot_Support
*/
?>
