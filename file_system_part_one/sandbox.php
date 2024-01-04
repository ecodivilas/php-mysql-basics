<?php 

// // file system - part 1

// $quotes = readfile('readme.txt');
// echo $quotes;

$file = 'readme.txt';

if(file_exists($file)){
    
    // read file
    echo readfile($file) . '<br />';

    // copy file / auto create if none existent
    copy($file, 'quotes.txt');

    // absolute path
    echo realpath($file)  . '<br />';

    // file size
    echo filesize($file)  . '<br />';

    // rename the file
    rename($file, 'test_rename.txt');

} else {
    echo 'file does not exist';
}

// make directory
mkdir('quotes');

?>

