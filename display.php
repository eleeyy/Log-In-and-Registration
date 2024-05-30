<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All User Details</title>
    <link rel="stylesheet" href="styles-display.css">
</head>
<body>
    <div class="container">
        <h1>All User Details</h1>

        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Cellphone Number</th>
                    <th>Birthdate</th>
                    <th>Sex</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Barangay</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Membership</th>
                </tr>
            </thead>
            <tbody>
                <?php
                session_start();

                $conn = mysqli_connect('localhost', 'root', '', 'regform_db');

                if (mysqli_connect_errno()) {
                    echo 'MySQL Error: ' . mysqli_connect_error();
                } else {
                    $query = "SELECT * FROM users";
                    $result = mysqli_query($conn, $query);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>{$row['fname']}</td>";
                            echo "<td>{$row['mname']}</td>";
                            echo "<td>{$row['lname']}</td>";
                            echo "<td>{$row['cpno']}</td>";
                            echo "<td>{$row['bdate']}</td>";
                            echo "<td>{$row['sex']}</td>";
                            echo "<td>{$row['address']}</td>";
                            echo "<td>{$row['city']}</td>";
                            echo "<td>{$row['brgy']}</td>";
                            echo "<td>{$row['uname']}</td>";
                            echo "<td>{$row['email']}</td>";
                            echo "<td>{$row['pass']}</td>";
                            echo "<td>{$row['mem']}</td>";
                            echo "</tr>";
                        }
                    }
                }
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
