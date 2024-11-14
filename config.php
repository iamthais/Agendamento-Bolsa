<?php


// if (!defined('BASE_PATH'))
//     define('BASE_PATH', dirname(__FILE__) . '/');

// Definindo uma variável global para caminho no arquivo
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
    $url = 'https://';
} else {
    $url = 'http://';
}
$url .= $_SERVER['HTTP_HOST'] . '/agendamento-bolsa/';

if (!defined('BASEURL'))
    define('BASEURL', $url);
