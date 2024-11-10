<?php
// $dir contains the relative URl of the folder
$dir = './datafiles';

echo "<h1>Найденные файлы в директории /datafiles:</h1>";

// the conditional construction checks that the folder exists
if (is_dir($dir)) {
    // $files is an array of all files and directories inside the folder
    // $files_index is a counter for matching files
    $files = scandir($dir);
    $files_index = 0;
    // $file is viewed sequentially
    foreach($files as $file) {
        // Description of the regExp:
            // a-zA-Z are all small and larde latin characters
            // 0-9 are all numbers
            // + requires at least 1 character
            // \. is the separator between the filename and the extension
            // txt is the required file extension
            // #^ and $# are the beginning and the end
        if (preg_match("#^[a-zA-Z0-9]+\.txt$#", $file)) {
            // if the file is matched, the counter increases
            $files_index++;
            // and the output is in the format "#. Filename"
            echo "<p>$files_index. $file.</p>";
        }
    }
} else {
    // if the folder doesn't exits
    echo "<h1>Ошибка: файл либо не существует, либо не является директорией. </h1>";
}
?>