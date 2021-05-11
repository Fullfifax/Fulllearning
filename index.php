<?php 
require("includes/constants.php");
require_once("includes/_header.php"); 
require_once("includes/_nav.php");
?>
<body>

    <div class="jumbotron p-3 p-md-5 text-white bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic"><?= WEBSITE_NAME; ?> "Study everywhere".</h1>
          <p class="lead my-3">Fulllearning is a simple e-learning project which helps majority of students to have an access on their courses from their teachers/instructors.</p>
        </div>
    </div>

    <div class="container">
        <div class="p-3 mb-3">
                <h4 class="font-italic">About <?= WEBSITE_NAME; ?> </h4>
                <p class="mb-0">
                    <?= WEBSITE_NAME; ?>  helps majority of students to have an access on their courses. <br>
                    And it is an opportunity for teachers/instructors to share/upload courses videos for their students. <br>
                    You can <a href="register.php" style="color:grey;">create an account</a> or <a href="login.php" style="color:grey;">login</a> on <?= WEBSITE_NAME; ?> 
                </p>
        </div>
    </div>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>