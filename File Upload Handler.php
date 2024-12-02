<?php
if (isset($_POST['upload'])) {
    $target_dir = "uploads/"; // Directory to save uploaded files
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;

    // Check if file is an actual file or fake
    if (isset($_POST["upload"])) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["file"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
