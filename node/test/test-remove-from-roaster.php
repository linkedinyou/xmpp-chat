<?php 
/**
 * Example how to remove user from shared roaster
 * */
$data = array(
    "user" => "visitor5",
    "host" => "xmpp.livehelperchat.com",
    "group" => "visitors",
    "grouphost" => "xmpp.livehelperchat.com",
);

$data_string = json_encode($data);

$ch = curl_init('http://localhost:4567/xmpp-delete-user-from-roaster');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);

$result = curl_exec($ch);

echo $result;

?>