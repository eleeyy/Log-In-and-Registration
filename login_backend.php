<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'regform_db');

if (mysqli_connect_errno()) {
    echo 'MySQL Error: ' . mysqli_connect_error();
} else {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $query = "SELECT * FROM users WHERE uname='$uname' AND pass='$pass'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $uname;
        header('Location: display-user.php');
        exit;
    } else {
        echo 'Invalid username or password.';
    }
}

mysqli_close($conn);
?>
