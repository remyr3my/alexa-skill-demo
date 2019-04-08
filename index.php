<?php




if (isset($_POST['username'])) {
    echo $_POST['username'];
}else{
    // else part
}


$text = "hello Alexa, Remy " ;

$array = array("version" => "1.0", "response" => array("outputSpeech" => array("type" => "PlainText", "text" => $text)));

echo json_encode($array);
?>
