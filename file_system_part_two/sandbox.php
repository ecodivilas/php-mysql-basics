<?php 

    // file system - part 2

    $file = 'quotes.txt';

    // opening a file for reading
    // $handle = fopen($file, 'r');

    // 1.) read the file (bytes)
    // echo fread($handle, filesize($file));
    // echo fread($handle, 112);

    // 2.) read a single line (each line / serves as pointer at the end of per line)
    // echo fgets($handle);
    // echo fgets($handle);

    // 3.) read a single character
    // echo fgetc($handle);

    // opening a file for reading & writing
    // $handle = fopen($file, 'r+'); // If you want to overwrite the first line characters
    // 4.) writing to a file
    // fwrite($handle, "\nEverything popular is wrong");

    // $handle = fopen($file, 'a+'); // If you want to add to the last time
    // fwrite($handle, "\nEverything popular is wrong");
    
    // Close the file
    // fclose($handle);

    // delete the file
    // unlink($file);

?>
