<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Registration Form</h2>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>
                     <div class="form-group">
                        <input class="form-control" type="" name="date" 
                        placeholder="Date Of Birth (YYYY/MM/DD)" pattern="[0-9]{4}/[0-9]{2}/[0-9]{2}" required>
                    </div>
                    <div class="form-group">
                        <select name="gender" id="" class="form-control">
                            <option value="">Enter Gender</option>
                            <option value="Male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="role" id="" class="form-control">
                            <option value="none"> Please Select Your Role</option>
                            <option value="Coach">Coach</option>
                            <option value="Player">Player</option>
                            <option value="Parent">Parent</option>
                            <option value="Board Member">Board Member</option>
                            <option value="Sponsor/Partner">Sponser</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="sport" class="form-control">
                            <option value="none">Please select your Sport Speciality</option>
                            <option value="Basketball">Basketball</option>
                            <option value="Football">Football</option>
                            <option value="Badminton">Badminton</option>
                            <option value="Cricket">Cricket</option>
                            <option value="Volleyball">Volleyball</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" class="form-control" id="address" placeholder="Address"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Register">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="index.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>