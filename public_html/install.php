<?php

require '../bootloader.php';

App\App::$db->createTable('users');
App\App::$db->createTable('feedback');

print "installed user and feedback tables in db";
