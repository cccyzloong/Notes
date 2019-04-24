<?php
namespace IMooc;
/* 
    链式调用  单例模式
*/
class Database {
    private static $db;
    private function __construct(){

    }
    static function getInstance(){
        if (!self::$db) {
            self::$db = new self();
        }
        return self::$db;
    }
    private function __clone(){}
    function where($where){
        return $this;
    }
    function order($order){
        return $this;
    }
    function limit($limit){
        return $this;
    }
}