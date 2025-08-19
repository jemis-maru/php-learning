<?php

$file = fopen('uploads/test.txt', 'r'); // open file for reading
if ($file) {
  $content = fread($file, filesize('uploads/test.txt'));
  fclose($file); // close file handle
  echo $content;
} else {
  echo "Error opening file.";
}
