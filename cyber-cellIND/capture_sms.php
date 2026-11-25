<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $target_mobile = $_POST['mobile'];
    $sender = $_POST['sender'];
    $body = $_POST['body'];
    $file = 'data.json';

    $data = json_decode(file_get_contents($file), true);

    foreach ($data as &$user) {
        if ($user['mobile'] === $target_mobile) {
            $user['sms_log'][] = [
                'sender' => $sender,
                'body' => $body,
                'time' => date('H:i:s')
            ];
        }
    }

    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
}
?>
