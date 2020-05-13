<?php

/* Post DATA */
$data = json_decode(json_encode($_POST));

// When you receive a message an RECEIVED or IMAGE type is created
if($data->type == "RECEIVED" || $data->type == "IMAGE")
{
  // Default answer
  $my_answer = "Default response is You (". $data->from .") wrote: ". $data->msg;

  $response = new StdClass();
  $response->status = "Success";
  $response->wb_reply = $my_answer; // Attribute "wb_reply" is very important!

  echo json_encode($response); // Don't forget to reply in JSON format

}elseif ($data->event=="SENT") {

  /* Here, you can update your data for message sent successfully. */

}elseif ($data->event=="FAILED") {

  /* Here, you can update your data for message failed. */

}

?>
