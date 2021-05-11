<?php 
require_once("includes/_header.php"); 
require_once("includes/_nav.php");
?>

<body>

    <div class="container">

    <div class="jumbotron p-3 p-md-5 text-white bg-dark">
    
        <form method="post" action="register.php">
            
            <h4 class="h4 font-weight-normal mb-4"><?= WEBSITE_NAME; ?> register</h4>
            
            <div class="row">
                
                <?php include('includes/register_success.php'); ?>
                <div class="col-md-12"></div>
                
                <h5 class="font-weight-normal ml-3">Would you like to register as</h5>
                <div class="col-md-12 inputError mb-4"><?= $userError; ?></div>
                
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="user" id="user" value="teacher">
                    <label class="form-check-label" for="user">Teacher/instructor</label> 
                </div>
                <div class="form-check ml-3 mb-4">
                    <input class="form-check-input" type="radio" name="user" id="user1" value="student">
                    <label class="form-check-label" for="user1">Student</label>
                </div>
                <div class="col-md-12"></div>

                <div class="col-md-8 inputError"><?= $usernameError; ?></div>
                <input type="text" class="form-control ml-3 mb-4 col-md-4" id= "username" name="username" placeholder="Username">
                
                <div class="col-md-8 inputError"><?= $emailError; ?></div>
                <input type="email" class="form-control ml-3 mb-4 col-md-4" name="email" placeholder="Email adress">
                
                <div class="col-md-8 inputError"><?= $passwordError; ?></div>
                <input type="password" class="form-control ml-3 mb-4 col-md-4" name="password" placeholder="Password">
                
                <div class="col-md-8 inputError"><?= $passwordConfirmError; ?></div>
                <input type="password"class="form-control ml-3 mb-4 col-md-4" name="password_confirm" placeholder="Confirm your password">
                

                <div class="col-md-8"></div>
                <button type="submit" class="btn btn-lg btn-block ml-3 col-md-4" name="register" style="background-color:grey;">Sign-up</button>
                
                <div class="col-md-8 mt-3">
                        <h6>If you have already an account,
                            <em><a href="login.php" style="color:white;">login here :)</a></em>
                        </h6>
                    </a>
                </div> 
            </div> 

        </form>

    </div>

    </div>

</body>
</html>

