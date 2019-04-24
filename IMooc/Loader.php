<?php
namespace IMooc;
/* 
    自动加载
*/
class Loader {
    static function autoload($class){
        /* var_dump($class); */
        require BASEDIR.'/'.str_replace('\\','/',$class).'.php';
        //var_dump($file);        
    }
}