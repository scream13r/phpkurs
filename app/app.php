<?php
require_once 'core/model.php';
require_once 'core/controller.php';
require_once 'core/view.php';
require_once 'core/route.php';
require_once 'core/autoloader.php';
require_once 'lib/faker_autoload.php';

Autoloader::loadPackages('DB');
Route::start();

