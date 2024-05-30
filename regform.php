<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
        <link rel="stylesheet" href="styles-reg.css">
    </head>
    <body>
        
        <div class="content">
            <h1>REGISTRATION FORM</h1>

            <form action="regform_backend.php" method="POST">

                <h3>Personal Details</h3>

                <div class="input-box">
                    <div class="input-field">
                        <label for="fname"><h4>* First Name :</h4></label>
                        <input type="text" name="fname" id="fname" maxlength="50" placeholder="ex. Juan" required>
                    </div>
                    <div class="input-field">
                        <label for="mname"><h4>* Middle Name :</h4></label>
                        <input type="text" name="mname" id="mname" maxlength="50" placeholder="ex. Ramos" required>
                    </div>
                </div>

                <div class="input-box">
                    <div class="input-field">
                        <label for="lname"><h4>* Last Name :</h4></label>
                        <input type="text" name="lname" id="lname" maxlength="50" placeholder="ex. Dela Cruz" required>
                    </div>
                    <div class="input-field">
                        <label for="cpno"><h4>* Cellphone Number :</h4></label>
                        <input type="tel" name="cpno" id="cpno" maxlength="11" placeholder="ex. 09XXXXXXXXX" required>
                    </div>
                </div>

                <div class="input-box">
                    <div class="input-field">
                        <label for="bdate"><h4>* Birthdate :</h4></label>
                        <input type="date" name="bdate" id="bdate" required>
                    </div>
                    <div class="input-field">
                        <label for="sex"><h4>* Sex :</h4></label>
                        <select id="sex" name="sex" required>
                            <option value="" disabled selected>Select Sex</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Prefer not to say</option>
                        </select>
                    </div>
                </div>

                <div class="input-box">
                    <div class="input-field">
                        <label for="address"><h4>* Address:</h4></label>
                        <input type="text" name="address" id="address" maxlength="60" placeholder="House no. and Street Name" required>
                    </div>
                </div>

                <div class="input-box">
                    <div class="input-field">
                        <h4>* City :</h4>
                        <select id="city" name="city" required>
                            <option value="" disabled selected>Select City</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <h4>* Barangay :</h4>
                        <select id="brgy" name="brgy" required>
                            <option value="" disabled selected>Select Barangay</option>
                        </select>
                    </div>
                </div>

                <h3>Account Details</h3>

                <div class="input-box">
                    <div class="input-field">
                        <label for="uname"><h4>* Username :</h4></label>
                        <input type="text" name="uname" id="uname" maxlength="50" placeholder="Create Username" required>
                    </div>
                    <div class="input-field">
                        <label for="email"><h4>* Email :</h4></label>
                        <input type="email" name="email" id="email" maxlength="50" placeholder="ex. juandelacruz@gmail.com" required>
                    </div>
                    
                </div>

                <div class="input-box">
                    <div class="input-field">
                        <label for="pass"><h4>* Password :</h4></label>
                        <input type="password" name="pass" id="pass" maxlength="50" placeholder="Password should be atleast 8 characters" required>
                    </div>
                    <div class="input-field">
                        <label for="pass"><h4>* Confirm Password :</h4></label>
                        <input type="password" name="confirmpass" id="confirmpass" maxlength="50" placeholder="Password should be atleast 8 characters" required>
                    </div>
                </div>

                <div class="input-box">
                    <div class="input-field">
                        <label for="member">* Are you a new member? :</label>
                        <label for="yes">Yes</label>
                        <input type="radio" id="yes" name="mem" value="yes">
                        <label for="no">No</label>
                        <input type="radio" id="no" name="mem" value="no">
                    </div>
                </div>


                <div class="input-box">
                    <div class="input-field">
                        <button type="submit" id="register">REGISTER</button>
                    </div>
                </div>

            </form>

        </div>
    
        <script src="script.js"></script>
    </body>
</html>
