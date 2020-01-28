<?php

include 'src/Log.php';
include 'src/FileLogger.php';

/**
 * Подключение компонента логгирования
 *
 */
$logger = new Logger\Log();

/**
 * Логирование в файл
 *
 */
$fileLog = new Logger\FileLogger();

/**
 * Логирование
 *
 */
$logger->log($fileLog, Logger\Log::LEVEL_ERROR, 'Error message');
$logger->log($fileLog, Logger\Log::LEVEL_INFO, 'Info message');
$logger->log($fileLog, Logger\Log::LEVEL_DEBUG, 'Debug message');
$logger->log($fileLog, Logger\Log::LEVEL_NOTICE, 'Notice message');
