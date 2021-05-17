<?php
include_once "App/LinkedList.php";
include_once "App/Node.php";
$arr = 'thanh dep trai';

$linkedlink = new LinkedList();

echo 'count: '.$linkedlink->getCount()."<br>" ;
$linkedlink->addFirst(4);
$linkedlink->addFirst(3);
$linkedlink->addFirst(2);
$linkedlink->addFirst(1);
$linkedlink->addFirst(0);
$linkedlink->removeObj(2);




var_dump($linkedlink->readList());
//echo "<pre>";
//var_dump($linkedlink);
//echo "</pre>";


