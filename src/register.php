<?php

if (!function_exists('register_primitive_type_handler')) {
    throw new RuntimeException('You have to install scalar_objects extension from https://github.com/nikic/scalar_objects');
}

require __DIR__ . '/StringHandler.php';

register_primitive_type_handler('string', 'Nkt\\StringHandler');