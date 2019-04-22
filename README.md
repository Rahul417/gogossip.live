# Steps to configure
## Generate Token from (whatsappapi.in)[https://www.whatsappapi.in] & Configure parameter in whatsapp_class.php file as below
```php
/* Change This Parameter */
$apiToken = 'Your-Token'; // eg. 3546534354354
$fromNumber = 'Your-WhatsApp-Number'; eg. 919876****
/* Change This Parameter */
```
## Call functions as below to send text message, image or pdf file in whatsapp

```php
/* Include Class for call whatsappapi.in API */
require_once('whatsapp_class.php');


// 1. Code for send simple text message
$whatsapp_obj = new WhatsAppAPI();
$apiResponse = $whatsapp_obj->sendText($country_code = '91', $to_mobile = '987654****', $message = 'Simple Text Message');


// 2. Code for send image (.png or .jpg file allowed)
$whatsapp_obj = new WhatsAppAPI();
$apiResponse = $whatsapp_obj->sendImage($country_code = '91', $to_mobile = '987654****', $message = 'https://www.whatsappapi.in/front-assets/img/logo.png');


// 3. Code for send pdf file (.pdf)
$whatsapp_obj = new WhatsAppAPI();
$apiResponse = $whatsapp_obj->sendImage($country_code = '91', $to_mobile = '987654****', $message = 'https://www.whatsappapi.in/dummy.pdf');
```
