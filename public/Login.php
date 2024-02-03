<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image : url('login2.jpg');
            background-repeat : no-repeat;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background-color: #f6948e;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
        }

        .login-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #4d89ca;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-form button:hover {
            background-color: #444b8e;
        }

        .login-email {
            margin-top: 10px;
            margin-left : 50px;
        }

        .login-email a {
            text-decoration: none;
            color: #333;
            display: block;
            background-color: #f6948e;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
        }

        .login-email a:hover {
            background-color: #4d89ca;
        }

    </style>
</head>
<body>

<div class="login-container">
    <h1>Login</h1>
    <form class="login-form" action="Dashboard.php" method="post" onsubmit="return validateLogin()">
        <input type="text" name="username" id="username" placeholder="Username" required>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>

<div class="login-email">
    <a href="index.php"><font size ="6"><b>Login By Email</b></font></a>
</div>

<script>
    function validateLogin() {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        if (username === 'admin' && password === 'Logo!8') {
            return true; // อนุญาตให้ส่งฟอร์ม
        } else {
            alert('Invalid username or password');
            return false; // ป้องกันการส่งฟอร์ม
        }
    }
</script>


</body>
</html>
