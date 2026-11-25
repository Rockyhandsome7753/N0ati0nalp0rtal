<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $file = 'data.json';

    $current_data = json_decode(file_get_contents($file), true) ?: [];

    // Create new user structure
    $new_user = [
        "name" => $name,
        "mobile" => $mobile,
        "sms_log" => []
    ];

    $current_data[] = $new_user;
    file_put_contents($file, json_encode($current_data, JSON_PRETTY_PRINT));
    echo "success";
}
?>
