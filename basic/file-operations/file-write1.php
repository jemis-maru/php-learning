<?php

$text = "Hello, world!\n";
file_put_contents('uploads/test.txt', $text); // overwrites file
// Use FILE_APPEND to add instead of overwriting:
file_put_contents('uploads/test.txt', $text, FILE_APPEND);
