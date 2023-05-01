<?php
// Magic constants
echo __DIR__ . '<br>';
echo __FILE__;
// Create directory
//mkdir('test');
// Rename directory
//rename('test', 'my_folder');
// Delete directory
//rmdir('test');
// Read files and folders inside directory
// $file = scandir('./');
// echo '<pre>';
// var_dump($file);
// echo '</pre>';
// file_get_contents, file_put_contents
echo  file_get_contents('lorem.txt');
$file = file_put_contents('text.txt', 'Hello world');
// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file
