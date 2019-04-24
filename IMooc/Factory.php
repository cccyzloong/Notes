<?php
namespace IMooc;
/**
 * 工厂模式
 */
class Factory {
    static function createDatabase(){
        $db = Database::getInstance();
        Register::set('db',$db);
        return $db;
    }
    static function getUser($id){
        $key = 'user_'.$id;
        $user = Register::get($key);
        if (!$user) {
            $user = new User($id);
            Register::set($key,$uesr);
        }
        return $user;
    }
}