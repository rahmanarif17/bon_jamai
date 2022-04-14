<?php

include_once './connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $sql = "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    if ($conn->query($sql)) {
        echo '<script>
                alert("Message Send Successful");
                location.href="../index.php";
            </script>';
    } else {
        echo '<script>
                alert("Message Send Failed");
                location.href="../index.php";
            </script>';
    }
}

?>