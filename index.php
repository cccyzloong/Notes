<?php

define('BASEDIR',__DIR__);
include BASEDIR.'/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

//类的自动注入
/* IMooc\Obj::test();
App\Controller\Home\Index::test(); */

//链式调用
/* $db = new IMooc\Database();
$db->where('id = 2')->order('score>10')->limit(10); */

//魔术方法
/* $obj = new IMooc\Obj();
$obj->title = 'Title';
echo $obj->title;
echo $obj->func("test",12); 
echo IMooc\Obj::func("test",12);
echo $obj('test'); */

//注册树模式
/* $db1 = IMooc\Factory::createDatabase();
$db2 = IMooc\Register::get('db');
echo $db1 == $db2? 1:0; */

//适配器模式
/*$db = new IMooc\DBase\PDO();
$db = new IMooc\DBase\MySQLI();
$db->connect('mysql','root','5ai123','shop');
$res = $db->query('select * from migrations');
echo '<pre />';
foreach($res as $row){
    print_r($row);
} */


//策略模式
/* class Page {
    protected $strategy;
    function index(){
        $this->strategy->showAd();
        echo '<br />';
        $this->strategy->showCategory();
    }
    function setStrategy(IMooc\UserStrategy $strategy){
        $this->strategy = $strategy;
    }
}
$page = new Page();
if (isset($_GET['female'])) {
    $strategy = new IMooc\FemaleUserStrategy();
}else{
    $strategy = new IMooc\MaleUserStrategy();
}
$page->setStrategy($strategy);
$page->index(); */


//数据对象映射模式
/* $user = new IMooc\User(1);
var_dump($user->id,$user->name,$user->age,$user->phone);
$user->name = 'admin';
$user->age = 233;
$user->phone = 11222222; */
//print_r($user);
//var_dump($user->id,$user->name,$user->age,$user->phone);

/* class Page {
    function index(){
        $user = IMooc\Factory::getUser(1);
        $user->name = 'foo';
        $this->test();
        echo "OK";
    }
    function test(){
        $user = IMooc\Factory::getUser(1);
        $user->name = 'zoo';
    }
}
$page = new Page();
echo '<pre />';
$page->index();
$page->test(); */

//观察者模式
class Event extends IMooc\EventGenerator {
    function trigger(){
        echo "Event<br />";
        $this->nty();
        //var_dump($this);
    }
}
class Obs1 implements IMooc\Observer {
    function update($event_info=null){
        echo "Event+<br />";
    }
}
class Obs2 implements IMooc\Observer {
    function update($event_info=null){
        echo "Event++<br />";
    }
}
$event = new Event();
$event->addObserver(new Obs1());
$event->addObserver(new Obs2());
$event->trigger();