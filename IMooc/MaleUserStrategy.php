<?php
namespace IMooc;
//use IMooc\UserStrategy;
class MaleUserStrategy implements UserStrategy {
    function showAd(){
        echo "IPhone6";
    }
    function showCategory(){
        echo "电子产品";
    }
}