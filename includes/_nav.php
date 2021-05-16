<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">
       <a class="text-dark" href="index.php"><?= WEBSITE_NAME; ?> </a> 
    </h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <?php if(isset($_SESSION['user_id'])) { ?>
            <a class="p-2 text-dark" href="new.php">Add new course</a>
            <a class="p-2 text-dark" href="index.php">Watch courses</a>
            <a class="p-2 text-dark" href="../logout.php">Logout</a>
        <?php } else { ?>
            <a class="p-2 text-dark" href="login.php">Login</a>
            <a class="p-2 text-dark" href="register.php">Register</a>
        <?php } ?>
    </nav>
</div>