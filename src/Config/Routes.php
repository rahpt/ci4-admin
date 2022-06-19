<?php

namespace Admin\Config;

$routes->get('/admin', '\Admin\Controllers\Home::index');
$routes->get('/admin/dashboard', '\Admin\Controllers\Home::index');
$routes->get('/admin/profile', '\Admin\Controllers\Home::profile');

