<?php 
session_start();

include("../filters/teacher_filter.php");

require_once("../includes/constants.php");
require_once("../config/database.php");
require_once("../includes/_header.php");
require_once("../includes/_nav.php");

if($_POST){                  
    
    $filename = '';

    if(!empty($_FILES['file'])){

        // Le chemin du depot du fichier uploadé
        $targetDirectory = '../uploads/';
        $file = $_FILES['file']['name'];

        $path = pathinfo($file);
        $filename = $path['filename'];
        $ext = $path['extension'];

        $tmpName = $_FILES['file']['tmp_name'];
        $path_filename_ext = $targetDirectory.$filename.'.'.$ext;
        if(move_uploaded_file($tmpName, $path_filename_ext)){
            $filename = $filename.'.'.$ext;
        }

    }

    $sql = "INSERT INTO cours (nom, fichier, information, matiere_id) VALUES (?, ?, ?, ?)";
    $a = $pdo->prepare($sql)->execute([$_POST['name'], $filename, $_POST['information'], $_POST['matiere']]);

}

$stm = $pdo->query("SELECT id, nom FROM matiere");

$matieres = $stm->fetchAll(PDO::FETCH_ASSOC);

?>
        
        <div class="py-5 bg-dark text-light">
            
            <div class="container">
            
                <h1 class="mb-4">Adding new course :)</h1>

                <form method="post" enctype="multipart/form-data" action="">

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>

                    <div class="form-group">
                        <label for="price">Description</label>
                        <div class="input-group">
                            <textarea class="form-control" aria-label="With textarea" name="information" id="information" required></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">Subjects</label>
                        <select class="form-control" name="matiere" id="matiere" required>
                            <?php foreach($matieres as $mat){ ?>
                                <option value="<?= $mat['id'] ?>">
                                    <?= $mat['nom']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="file">New video</label>
                        <input type="file" class="form-control-file" name="file" id="file" required>
                    </div>
                    <button type="submit" class="btn" style="background-color: grey">Add</button>

                </form>
                
            </div>

        </div>
