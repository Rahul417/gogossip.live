<?php

/* Include Class for call gogossip.live API */
require_once('whatsapp_class.php');


// 1. Code for send simple text message
$whatsapp_obj = new WhatsAppAPI();
$apiResponse = $whatsapp_obj->sendText($country_code = '91', $to_mobile = '987654****', $message = 'Simple Text Message');

// 2. Code for send image (.png or .jpg file allowed)
$whatsapp_obj = new WhatsAppAPI();
$apiResponse = $whatsapp_obj->sendImage($country_code = '91', $to_mobile = '987654****', $message = 'https://www.gogossip.live/front-assets/img/logo.png');

// 3. Code for send pdf file (.pdf)
$whatsapp_obj = new WhatsAppAPI();
$apiResponse = $whatsapp_obj->sendImage($country_code = '91', $to_mobile = '987654****', $message = 'https://www.gogossip.live/dummy.pdf');
