<?php
    if(isset($errors) && count($errors) == 0){
        echo '<div class="alert ml-3 col-md-4" style="background-color: grey; color:white">';
                    echo "Your account has created :) <br>";
                    echo '<a href="login.php" style="color: black"> Login here :) </a>';
        echo '</div>';
    } 
?>