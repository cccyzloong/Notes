<?php
namespace IMooc;
/**
 * 策略模式
 */
interface UserStrategy {
    function showAd();
    function showCategory();
}