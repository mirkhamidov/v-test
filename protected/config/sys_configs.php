<?php
/**
 * Основные конфиги
 */

/**
 * Информация о существующих таблицах
 * 
 * Формат:
 *  {Название в виде алиаса} => [
 *      'table_name' => {Название таблицы в БД},
 *      'db_name'    => {Название БД},
 *      'db_host'    => {Алиас на хост, ключ в $DB_HOSTS},
 *  ]
 */
$GLOBALS['tables'] = [
    'user' => [
        'table_name' => 'user',
        'db_name'    => 'v_test',
        'db_host'    => 'localhost',
    ],
    'orders' => [
        'table_name' => 'orders',
        'db_name'    => 'v_test',
        'db_host'    => 'localhost'
    ],
];

/**
 * Информация о хостах
 * 
 * Формат:
 *  {Название в виде алиаса} => [
 *      'host'      => {},
 *      'username'  => {},
 *      'password'  => {},
 *      'link'      => Object, // открытое соединение к БД
 *  ]
 */
$GLOBALS['db_hosts'] = [
    'localhost' => [
        'host'     => 'localhost',
        'username' => 'v_test',
        'password' => 'v_test',
        'link'     => null,
    ],
];