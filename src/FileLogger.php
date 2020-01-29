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
	 * Файл логов
	 *
	 */
	const FILE_LOG = 'application.log';

	/**
	 * Файл логов error
	 *
	 */
	const FILE_ERROR = 'application.error.log';

	/**
	 * Файл логов info
	 *
	 */
	const FILE_INFO = 'application.info.log';

	/**
	 * Логирование ошибок
	 *
	 * @param string $message
	 */
	public function error($message)
	{
		$this->save(self::FILE_LOG, $message);
		$this->save(self::FILE_ERROR, $message);
	}

	/**
	 * Логирование информационных блоков
	 *
	 * @param string $message
	 */
	public function info($message)
	{
		$this->save(self::FILE_LOG, $message);
		$this->save(self::FILE_INFO, $message);
	}

	/**
	 * Логирование режима отладки
	 *
	 * @param string $message
	 */
	public function debug($message)
	{
		$this->save(self::FILE_LOG, $message);
	}

	/**
	 * Логирование уведомлений
	 *
	 * @param string $message
	 */
	public function notice($message)
	{
		$this->save(self::FILE_LOG, $message);
	}

	/**
	 * Сохранение лога в файл
	 *
	 * @param string $filename
	 * @param string $message
	 */
	private function save($filename, $message)
	{
		$url = 'logs/';
		$filename = $url . $filename;
		$message = $message ."\r\n";
		file_put_contents($filename, $message, FILE_APPEND);
	}
}
