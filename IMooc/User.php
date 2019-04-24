<?php
namespace IMooc;
class User {
    protected $db;
    public $id;
    public $name;
    public $age;
    public $phone;
    function __construct($id){
        $this->db = new \IMooc\DBase\MySQLI();
        //$res = $this->db->query("update user set name='{$this->name}',age='{$this->age},phone='{$this->phone}' where id={$this->id}");
        $this->db->connect('mysql','root','5ai123','other');
        $res = $this->db->query('select * from user limit 1');
        $data = $res->fetch_assoc();
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->age = $data['age'];
        $this->phone = $data['phone'];
    }
    function __destruct(){
        //var_dump($this);
        $this->db->query("update user set name='$this->name',age='$this->age',
        phone='$this->phone' where id=$this->id limit 1");
    }
}