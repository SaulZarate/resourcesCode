<?php


echo "<pre>";
print_r($_FILES);
echo "</pre>";


$ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
move_uploaded_file($_FILES["file"]["tmp_name"], "./archivo.".$ext);