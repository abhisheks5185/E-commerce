<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up Page</title>
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
    .signup-box {
      background-color: white;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
      width: 320px;
      text-align: center;
    }
    .signup-box h2 {
      margin-bottom: 20px;
      color: #333;
    }
    .signup-box input[type="text"],
    .signup-box input[type="email"],
    .signup-box input[type="password"] {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .signup-box input[type="submit"] {
      width: 100%;
      padding: 12px;
      background-color: #16a085;
      border: none;
      border-radius: 4px;
      color: white;
      font-size: 16px;
      cursor: pointer;
    }
    .signup-box input[type="submit"]:hover {
      background-color: #138d75;
    }
    .signup-box p {
      margin-top: 15px;
      font-size: 14px;
      color: #777;
    }
    .signup-box a {
      color: #16a085;
      text-decoration: none;
    }
    .message {
      color: red;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <form action="signpost.php" method="POST">
    <div class="signup-box">
      <h2>Sign Up</h2>
      <input type="text" name="name" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="mobile" name="mobile" placeholder="mobile" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" name="submit" value="Register">
      <p>Already have an account? <a href="http://localhost/shop/login.php">Login</a></p>

    </div>
  </form>
</body>
</html>