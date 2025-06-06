<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

/*
 * ---------------------------------------------------------------
 *  Load DB credentials from Docker environment variables
 * ---------------------------------------------------------------
 */
$db['default'] = [
    'dsn'       => '',
    'hostname'  => getenv('DB_HOST')   ?: 'mysql',
    'username'  => getenv('DB_USERNAME') ?: 'forum_app',
    'password'  => getenv('DB_PASSWORD') ?: 'TbNkM4VpEmUM0y5fm',
    'database'  => getenv('DB_DATABASE') ?: 'forum_db',
    'dbdriver'  => 'mysqli',
    'dbprefix'  => '',
    'pconnect'  => FALSE,
    'db_debug'  => (ENVIRONMENT !== 'production'),
    'cache_on'  => FALSE,
    'cachedir'  => '',
    'char_set'  => 'utf8mb4',
    'dbcollat'  => 'utf8mb4_unicode_ci',
    'swap_pre'  => '',
    'encrypt'   => FALSE,
    'compress'  => FALSE,
    'stricton'  => FALSE,
    'failover'  => [],
    'save_queries' => TRUE
];
