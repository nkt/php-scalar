<?php

if (!function_exists('register_primitive_type_handler')) {
    throw new RuntimeException('You have to install scalar_objects extension from https://github.com/nikic/scalar_objects');
}

require __DIR__ . '/StringHandler.php';
require __DIR__ . '/ArrayHandler.php';
require __DIR__ . '/NumberHandler.php';
require __DIR__ . '/ResourceHandler.php';

register_primitive_type_handler('string', 'Nkt\\StringHandler');
register_primitive_type_handler('array', 'Nkt\\ArrayHandler');
register_primitive_type_handler('int', 'Nkt\\NumberHandler');
register_primitive_type_handler('float', 'Nkt\\NumberHandler');
register_primitive_type_handler('resource', 'Nkt\\ResourceHandler');
