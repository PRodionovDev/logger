<?php

namespace Logger;

include 'Logger.php';

/**
 * Конкретный сервис компонента логирования,
 * реализующий запись логов в файл
 *
 */
class FileLogger implements Logger
{
	/**
	 * Логирование ошибок
	 *
	 * @param string $message
	 */
	public function error($message)
	{
		var_dump($message);
	}

	/**
	 * Логирование информационных блоков
	 *
	 * @param string $message
	 */
	public function info($message)
	{
		var_dump($message);
	}

	/**
	 * Логирование режима отладки
	 *
	 * @param string $message
	 */
	public function debug($message)
	{
		var_dump($message);
	}

	/**
	 * Логирование уведомлений
	 *
	 * @param string $message
	 */
	public function notice($message)
	{
		var_dump($message);
	}
}
