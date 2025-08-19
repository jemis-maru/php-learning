<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $targetDir = "uploads/";
  $targetFile = $targetDir . basename($_FILES["myfile"]["name"]);
  if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFile)) {
    echo "File uploaded successfully: " . $targetFile;
  } else {
    echo "Error uploading file.";
  }
}
