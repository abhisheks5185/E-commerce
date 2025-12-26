<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(120deg, #2980b9, #8e44ad);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-box {
      background-color: white;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
      width: 300px;
      text-align: center;
    }

    .login-box h2 {
      margin-bottom: 20px;
      color: #1a1b1a;
    }

    .login-box input[type="text"],
    .login-box input[type="password"] {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .login-box input[type="submit"] {
      width: 100%;
      padding: 12px;
      background-color: #2980b9;
      border: none;
      border-radius: 4px;
      color: white;
      font-size: 16px;
      cursor: pointer;
    }

    .login-box input[type="submit"]:hover {
      background-color: #2471a3;
    }

    .login-box p {
      margin-top: 15px;
      font-size: 14px;
      color: #777;
    }

    .login-box a {
      color: #2980b9;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <form action="logpost.php" method="POST">
    <div class="login-box">
      <h2>Login</h2>
      <input type="text" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" name="login" value="Login">
      <p>Don't have an account? <a href="http://localhost/shop/signin.php">Sign Up</a></p>
    </div>
  </form>
</body>
</html>
