<?php
namespace IMooc;
/**
 * 注册器模式
 */
class Register {
    protected static $arr;
    static function set($alias,$obj){
        self::$arr[$alias] = $obj;
    }
    static function get($name){
        return self::$arr[$name];
    }
    static function _unset($alias){
        unset(self::$arr[$alias]);
    }
}