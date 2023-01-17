<?php

spl_autoload_register(function ($nameClass) {
    $dirClass = "class";
    $filename = "$dirClass".DIRECTORY_SEPARATOR."$nameClass.php";//se refere a todo nome do arquivo

    if (file_exists($filename)) {
        require_once($filename);
    }

})

?>