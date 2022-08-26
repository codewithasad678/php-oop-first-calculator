<?php 
    spl_autoload_register('AutoLoader');

    function AutoLoader($className) {
        $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

        if(strpos($url,'includes') !== false){
            $path = '../Classes/';
        }
        else{
            $path = 'Classes/';
        }
        $extension = ".class.php";
        $fullPath = $path.$className.$extension;
        

    include_once $fullPath;

    }

?>