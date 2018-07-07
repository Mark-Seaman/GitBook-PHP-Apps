<?php
    // files.php -- Utility functions for files


    // get_file_list
    function get_file_list($path) {
        $files = array();
        if (!is_dir($path)) { return $files; }

        $items = scandir($path);
        foreach ($items as $item) {
             $item_path = $path . DIRECTORY_SEPARATOR . $item;
             if (is_file($item_path)) {
                 $files[] = $item;
             }
        }
        return $files;
    }

    function read_file($path) {
        $text = file_get_contents($path);
        $text = htmlspecialchars($text);
        return $text;
    }
    
?>