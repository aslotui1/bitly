<?php
// https://t.me/ENCyber

// Telegram function which you can call
function telegram($msg) {
        global $telegrambot,$telegramchatid;
        $url='https://api.telegram.org/bot'.$telegrambot.'/sendMessage';$data=array('chat_id'=>$telegramchatid,'text'=>$msg);
        $options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);
        $context=stream_context_create($options);
        $result=file_get_contents($url,false,$context);
        return $result;
}
$telegrambot='6922644862:AAFf2Fd195rq6-cHL40Kg244g4qfsm_Wuho'; // TOKEN BOT
  $telegramchatid='-5747846440'; // CHAT ID 
?>