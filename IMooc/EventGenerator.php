<?php
namespace IMooc;
/**
 * 观察者模式
 */
abstract class EventGenerator {
    private $observers = [];
    function addObserver(Observer $observer){
        $this->observers[] = $observer;
    }
    function nty(){
        //echo 'lara';
        foreach ($this->observers as $observer) {
            //print_r($this->observers);
            $observer->update();
        }
    }
}