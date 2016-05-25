<?php
/**
 * Created by PhpStorm.
 * User: vizewang
 * Date: 16/5/24
 * Time: 下午10:00
 */
$obj=new SplDoublyLinkedList();
$obj->push(1);
$obj->push(2);
$obj->unshift(10);
print_r($obj);
$obj->rewind();
echo 'current:'.$obj->current().PHP_EOL;