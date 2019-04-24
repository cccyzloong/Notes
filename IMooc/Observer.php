<?php
namespace IMooc;
/**
 * 观察者模式
 */
interface Observer {
    function update($event_info=null);
}