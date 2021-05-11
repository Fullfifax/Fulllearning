<?php 
require("includes/constants.php");
require_once("includes/_header.php"); 
require_once("includes/_nav.php");
?>

<body>

    <div class="container">

    <div class="jumbotron p-3 p-md-5 text-white bg-dark">
    
        <form method="post" action="register.php">
            
            <h4 class="h4 font-weight-normal mb-4"><?= WEBSITE_NAME; ?> login</h4>
            
            <div class="row">

                <div class="col-md-8"></div>
                <input type="text" class="form-control ml-3 mb-4 col-md-4" id= "username" name="username" placeholder="Username">
                
                <div class="col-md-8"></div>
                <input type="password" class="form-control ml-3 mb-4 col-md-4" name="password" placeholder="Password">
                
                <div class="col-md-8"></div>
                <button type="submit" class="btn btn-lg btn-block ml-3 col-md-4" name="register" style="background-color:grey;">Sign-in</button>
                
                <div class="col-md-8 mt-3">
                    <h6>If you don't have an account,
                            <em><a href="register.php" style="color:white;">register here :)</a></em>
                        </h6>
                </div>
            </div> 

        </form>

    </div>

</div>

</body>
</html>

