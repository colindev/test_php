<?php

require __DIR__.'/../vendor/autoload.php';

$redis = new Predis\Client([
        'scheme' => 'tcp',
        'host' => '127.0.0.1',
        'port' => 6379,
    ]);

$redis->publish('x', 123);
