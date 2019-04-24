<?php
namespace IMooc;
/**
 * 适配器模式
 */
interface IDatabase {
    function connect($host,$username,$password,$dbname);
    function query($sql);
    function close();
}