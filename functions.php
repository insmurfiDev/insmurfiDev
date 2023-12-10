<?php

function template($name, $callback, $args = []){
    $path = "templates/".$name.".php";
    if(file_exists($path)){
        ob_start();
        $callback();
        $content = ob_get_clean();
        extract($args);
        require_once $path;
    }else{
        die("Шаблон не найден");
    }
}

function route($path, $page){
    if($_SERVER['REQUEST_URI'] == $path){
        require_once "pages/".$page.".php";
    }
}

?>