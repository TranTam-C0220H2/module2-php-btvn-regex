<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="../css/css-registration.css">
<?php
session_start();
?>
<div class="container">
    <form class="form-horizontal" role="form" action="../action/creat.php" method="post">
        <h2>Registration</h2>
        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">First Name</label>
            <div class="col-sm-9">
                <input type="text" name="firstName" value="<?php echo $_SESSION['firstName'] ?>" id="firstName"
                       placeholder="First Name" class="form-control" autofocus>
                <span class="help-block">
                    <?php
                    if ($_SESSION['firstName'] === '') {
                        echo 'FirstName is invalid!!!';
                    }
                    ?>
                </span>
            </div>
        </div>
        <div class="form-group">
            <label for="lastName" class="col-sm-3 control-label">Last Name</label>
            <div class="col-sm-9">
                <input type="text" name="lastName" value="<?php echo $_SESSION['lastName'] ?>" id="lastName"
                       placeholder="Last Name" class="form-control" autofocus>
                <span class="help-block">
                    <?php
                    if ($_SESSION['lastName'] === '') {
                        echo 'LastName is invalid!!!';
                    }
                    ?>
                </span>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email* </label>
            <div class="col-sm-9">
                <input type="email" value="<?php echo $_SESSION['email'] ?>" id="email" placeholder="Email"
                       class="form-control" name="email">
                <span class="help-block">
                    <?php
                    if ($_SESSION['checkExistedEmail']) {
                        echo '*Email existed!!!';
                    } elseif ($_SESSION['email'] === '') {
                        echo 'Email is invalid!!!';
                    }
                    ?>
                </span>
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password*</label>
            <div class="col-sm-9">
                <input type="password" value="<?php echo $_SESSION['password'] ?>" name="password" id="password"
                       placeholder="Password" class="form-control">
                <span class="help-block">
                    <?php
                    if ($_SESSION['password'] === '') {
                        echo 'Password is invalid!!!';
                    }
                    ?>
                </span>
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
            <div class="col-sm-9">
                <input type="password" value="<?php echo $_SESSION['confirmPassword'] ?>" name="confirmPassword"
                       id="password" placeholder="Password" class="form-control">
                <span class="help-block">
                    <?php
                    if ($_SESSION['confirmPassword'] === '') {
                        echo 'ConfirmPassword is invalid!!!';
                    }
                    ?>
                </span>
            </div>
        </div>
        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
            <div class="col-sm-9">
                <input type="date" value="<?php echo $_SESSION['birthDate'] ?>" name="birthDate" id="birthDate"
                       class="form-control">
                <span class="help-block">
                    <?php
                    if ($_SESSION['birthDate'] === '') {
                        echo 'BirthDate is invalid!!!';
                    }
                    ?>
                </span>
            </div>
        </div>
        <div class="form-group">
            <label for="phoneNumber" class="col-sm-3 control-label">Phone number*</label>
            <div class="col-sm-9">
                <input type="phoneNumber" value="<?php echo $_SESSION['phoneNumber'] ?>" name="phoneNumber"
                       id="phoneNumber" placeholder="Phone number" class="form-control">
                <span class="help-block">
                    <?php
                    if ($_SESSION['phoneNumber'] === '') {
                        echo 'PhoneNumber is invalid!!!';
                    }
                    ?>
                </span>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <span class="help-block">*Required fields</span>
                <span class="help-block">Your Information won't be disclosed anywhere </span>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Register</button>
    </form> <!-- /form -->
</div> <!-- ./container -->
