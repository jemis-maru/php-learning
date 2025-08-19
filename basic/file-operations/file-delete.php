<?php

$file = 'uploads/test.txt';

if (file_exists($file)) {
  if (unlink($file)) {
    echo "File deleted successfully.";
  } else {
    echo "Error deleting file.";
  }
} else {
  echo "File not found.";
}
