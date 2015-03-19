<?php

return new \Phalcon\Config(array(
    'database' => array(
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'user',
        'password'    => '',
        'dbname'      => 'db',
        'charset'     => 'utf8'
    ),
    'module' => array(
        'controllersDir' => MODULES_DIR . DS . 'modman' . DS . 'controllers' . DS,
        'modelsDir'      => MODULES_DIR . DS . 'modman' . DS . 'models' . DS,
        'viewsDir'       => MODULES_DIR . DS . 'modman' . DS . 'views' . DS
    )
));
