<?php
$oldName = 'uploads/test.txt';
$newName = 'uploads/newTest.txt';

if (file_exists($oldName)) {
  if (rename($oldName, $newName)) {
    echo "File renamed successfully.";
  } else {
    echo "Error renaming file.";
  }
} else {
  echo "Source file not found.";
}
