<?php
namespace IMooc;
//use IMooc\UserStrategy;
class FemaleUserStrategy implements UserStrategy {
    function showAd(){
        echo "新款女装";
    }
    function showCategory(){
        echo "女装";
    }
}