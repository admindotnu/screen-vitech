<?php

echo time();
$m = new Memcached('localhost');
$m->addServer('localhost', 11211);
$m->set('wd-screen', time());
$m->quit();