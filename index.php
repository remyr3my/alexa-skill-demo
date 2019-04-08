<?php




if (isset($_GET['username'])) {
    echo $_GET['empid'];
}else{
    // else part
}


$text = "hello Alexa, Remy " . $name;

$array = array("version" => "1.0", "response" => array("outputSpeech" => array("type" => "PlainText", "text" => $text)));

echo json_encode($array);
?>
