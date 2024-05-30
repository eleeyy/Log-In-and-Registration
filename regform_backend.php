<?php

    $conn = mysqli_connect('localhost', 'root', '', 'regform_db');

    if (mysqli_connect_errno()) {
        echo 'MySQL Error: ' . mysqli_connect_error();
    } else {
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $cpno = $_POST['cpno'];
        $bdate = $_POST['bdate'];
        $sex = $_POST['sex'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $brgy = $_POST['brgy'];
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $confirmpass = $_POST['confirmpass'];
        $mem = $_POST['mem'];

        $check_query = "SELECT * FROM users WHERE uname='$uname'";
        $check_result = mysqli_query($conn, $check_query);
        if (mysqli_num_rows($check_result) > 0) {
            echo 'Error: Username is already taken.';
            exit;
        }
        
        if ($pass !== $confirmpass) {
            echo 'Error: Passwords do not match.';
            exit;
        }

        if (strlen($pass) < 8) {
            echo 'Error: Password must be at least 8 characters long.';
            exit;
        }
    

        $query = "INSERT INTO users (fname, mname, lname, cpno, bdate, sex, address, city, brgy, uname, email, pass, mem) 
                  VALUES ('$fname', '$mname', '$lname', '$cpno', '$bdate', '$sex', '$address', '$city', '$brgy', '$uname', '$email', '$pass', '$mem')";

        if (mysqli_query($conn, $query)) {
            header('Location: login.php');
            exit;
        } else {
            echo 'Error: Record not added. ' . mysqli_error($conn);
        }
    }
    mysqli_close($conn)
?>
