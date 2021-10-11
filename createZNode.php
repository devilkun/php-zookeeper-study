<?php
$zookeeper = new \Zookeeper('127.0.0.1:2181');

$aclArray = array(
    array(
        'perms'  => Zookeeper::PERM_ALL,
        'scheme' => 'world',
        'id'     => 'anyone',
    )
);
$path = '/test';
$realPath = $zookeeper->create($path, null, $aclArray);
if ($realPath) {
    echo $realPath;
} else {
    echo 'ERR';
}