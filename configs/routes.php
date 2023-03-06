<?php

$routes['default_controller'] = 'home';

$routes['danh-sach-san-pham'] = 'product/listProduct';
$routes['danh-sach-san-pham/(.+)'] = 'error';
$routes['san-pham/(.+)'] = 'product/detail/$1';
