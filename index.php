<?php

include 'src/Logger.php';

/**
 * Подключение компонента логгирования
 *
 */
$logger = new Logger\Logger();

/**
 * Логирование
 *
 */
$logger->error('Error message');
$logger->info('Info message');
$logger->debug('Debug message');
$logger->notice('Notice message');
