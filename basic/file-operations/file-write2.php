<?php

$file = fopen('uploads/test.txt', 'a'); // 'a' = append mode
if ($file) {
  fwrite($file, "More content\n");
  fclose($file);
  echo "File written successfully.";
} else {
  echo "Error opening file.";
}
