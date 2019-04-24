<?php
namespace IMooc;
/* 
    魔术方法
*/
class Obj{
    /* static function test(){
        echo __METHOD__;
    } */
    protected $arr = [];
    function __set($name,$value){
        $this->arr[$name] = $value;
    }
    function __get($name){
        return $this->arr[$name];
    }
    function __call($func,$param){
        var_dump($func,$param);
        return "magic func\n";
    }
    static function __callStatic($func,$param){
        var_dump($func,$param);
        return "magic static func\n";
    }
    function __toString(){
        return __CLASS__." toString";
    }
    function __invoke($param){
        return 'invoke '.$param;
    }
}