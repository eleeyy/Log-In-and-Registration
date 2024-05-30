<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'regform_db');

if (mysqli_connect_errno()) {
    echo 'MySQL Error: ' . mysqli_connect_error();
} else {
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
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

        $query = "UPDATE users SET fname='$fname', mname='$mname', lname='$lname', cpno='$cpno', bdate='$bdate', sex='$sex', address='$address', city='$city', brgy='$brgy', uname='$uname', email='$email', pass='$pass' WHERE id='$id'";

        if (mysqli_query($conn, $query)) {
            header('Location: display-user.php');
            exit;
        } else {
            echo 'Error updating record: ' . mysqli_error($conn);
        }
    } else {
        $id = $_GET['id'];
        $query = "SELECT * FROM users WHERE id='$id'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
        } else {
            echo 'Error fetching record: ' . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Details</title>
    <link rel="stylesheet" href="styles-edit.css">
</head>
<body>
    <div class="content">
        <h1>Edit User Details</h1>

        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <div class="input-box">
                <div class="input-field">
                    <label for="fname"><h4>* First Name :</h4></label>
                    <input type="text" name="fname" id="fname" value="<?php echo $row['fname']; ?>" required>
                </div>
                <div class="input-field">
                    <label for="mname"><h4>* Middle Name :</h4></label>
                    <input type="text" name="mname" id="mname" value="<?php echo $row['mname']; ?>" required>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <label for="lname"><h4>* Last Name :</h4></label>
                    <input type="text" name="lname" id="lname" value="<?php echo $row['lname']; ?>" required>
                </div>
                <div class="input-field">
                    <label for="cpno"><h4>* Cellphone Number :</h4></label>
                    <input type="tel" name="cpno" id="cpno" value="<?php echo $row['cpno']; ?>" required>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <label for="bdate"><h4>* Birthdate :</h4></label>
                    <input type="date" name="bdate" id="bdate" value="<?php echo $row['bdate']; ?>" required>
                </div>
                <div class="input-field">
                    <label for="sex"><h4>* Sex :</h4></label>
                    <select name="sex" id="sex" required>
                        <option value="male" <?php if ($row['sex'] == 'Male') echo 'selected'; ?>>Male</option>
                        <option value="female" <?php if ($row['sex'] == 'Female') echo 'selected'; ?>>Female</option>
                        <option value="other" <?php if ($row['sex'] == 'Other') echo 'selected'; ?>>Prefer not to say</option>
                    </select>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <label for="address"><h4>* Address :</h4></label>
                    <input type="text" name="address" id="address" value="<?php echo $row['address']; ?>" required>
                </div>
                <div class="input-field">
                    <label for="city"><h4>* City :</h4></label>
                    <input type="text" name="city" id="city" value="<?php echo $row['city']; ?>" required>
                </div>
            </div>
            
            <div class="input-box">
                <div class="input-field">
                    <label for="brgy"><h4>* Barangay :</h4></label>
                    <input type="text" name="brgy" id="brgy" value="<?php echo $row['brgy']; ?>" required>
                </div>
                <div class="input-field">
                    <label for="uname"><h4>* Username :</h4></label>
                    <input type="text" name="uname" id="uname" value="<?php echo $row['uname']; ?>" required>
                </div>
            </div>
            
            <div class="input-box">
                <div class="input-field">
                    <label for="email"><h4>* Email :</h4></label>
                    <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>" required>
                </div>
                <div class="input-field">
                    <label for="pass"><h4>* Password :</h4></label>
                    <input type="password" name="pass" id="pass" value="<?php echo $row['pass']; ?>" required>
                </div>
            </div>
   
            <div class="input-button">
                    <button type="submit" name="update">Update</button>
                    <button onclick="window.history.back();" type="button">Back</button>
            </div>
    </form>

    </div>
</body>
</html>
