<?php

$text = "hello Alexa, Remy  here ";

$array = array("version" => "1.0", "response" => array("outputSpeech" => array("type" => "PlainText", "text" => $text)));

echo json_encode($array);
?>
