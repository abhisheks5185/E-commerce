<?php
include_once "conn.php";  // DB connection

if (isset($_POST['login'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user_detail WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        header("Location: http://localhost/shop/front.php");  
        exit;
        // echo "sumit";
    } else {
        echo " Invalid email or password!";
    }
}

mysqli_close($conn);
?>
