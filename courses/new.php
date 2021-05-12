<?php 
session_start();
$_SESSION['user_id'] = 'user';
require_once("../includes/constants.php");
require_once("../config/database.php");
require_once("../includes/_header.php");
require_once("../includes/_nav.php");

?>
        
        <div class="py-5 bg-dark text-light">
            
            <div class="container">

                <form method="post" enctype="multipart/form-data" action="">

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>

                    <div class="form-group">
                        <label for="price">Description</label>
                        <div class="input-group">
                            <textarea class="form-control" aria-label="With textarea" name="information" id="information"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">Category</label>
                        <select class="form-control" name="category" id="category">
                            <?php foreach($categories as $c){ ?>
                                <option value="<?= $c['id'] ?>">
                                    <?= $c['name']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="file">File</label>
                        <input type="file" class="form-control-file" name="file" id="file">
                    </div>
                    <button type="submit" class="btn" style="background-color: grey">Add</button>
                    
                </form>
                
            </div>

        </div>
