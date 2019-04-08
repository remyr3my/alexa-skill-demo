<?php

 $text = "hello Alexa, Remy ";

if (isset($_POST['username'])) {
    $text = "hello Alexa, Remy here with  " . $_POST['username'] ;
}

$array = array("version" => "1.0", "response" => array("outputSpeech" => array("type" => "PlainText", "text" => $text)));

echo json_encode($array);
?>
