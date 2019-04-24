<?php
namespace IMooc\DBase;
use IMooc\IDatabase;
class MySQLI implements IDatabase {
    protected $conn;
    function connect($host,$username,$password,$dbname){
        $conn = \mysqli_connect($host,$username,$password,$dbname);
        $this->conn = $conn;
        //return $this->conn;
    }
    function query($sql){
        return \mysqli_query($this->conn,$sql);
    }
    function close(){
        \mysqli_close($this->conn);
    }
}