<?php

$zookeeper = new \Zookeeper('127.0.0.1:2181');
$path = '/test';
$value = 'devilkun';
$zookeeper->set($path, $value);

$r = $zookeeper->get($path);
if ($r) {
    echo $r;
} else {
    echo 'ERR';
}