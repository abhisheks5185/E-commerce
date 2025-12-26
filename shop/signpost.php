<?php

include_once "conn.php";   


  if (isset($_POST['submit'])) {
    $name     = $_POST["name"];
    $email    = $_POST["email"];
    $mobile   = $_POST["mobile"];
    $password = $_POST["password"];

    // Check if email already exists
    $check_email = "SELECT * FROM user_detail WHERE email = '$email'";
    $result = mysqli_query($conn, $check_email);

    if (mysqli_num_rows($result) > 0) {
        echo "Email already exists!";
    } else {
        // Insert record (without username)
        $sql = "INSERT INTO user_detail (name, email, mobile, password)
                VALUES ('$name', '$email', '$mobile', '$password')";

        if (mysqli_query($conn, $sql)) {
            echo "Registration successful!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
mysqli_close($conn);
?>