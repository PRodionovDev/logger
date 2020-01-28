<?php

namespace Logger;

use DateTime;

/**
 * Основной класс компонента логирования
 *
 */
class Log
{
	/**
	 * Значение уровня ошибок
	 *
	 */
	const LEVEL_ERROR = '001';

	/**
	 * Значение уровня информационных блоков
	 *
	 */
	const LEVEL_INFO = '002';

	/**
	 * Значение уровня режима отладки
	 *
	 */
	const LEVEL_DEBUG = '003';

	/**
	 * Значение уровня уведомлений
	 *
	 */
	const LEVEL_NOTICE = '004';

	/**
	 * @var string Формат даты логов
	 *
	 */
	public $dateFormat = DateTime::ISO8601;

	/**
	 * Запись лога
	 *
	 * @param object $obj
	 * @param string $level
	 * @param string $message
	 *
	 */
	public function log(Logger $obj, $level, $message)
	{
		$message = $this->format($level, $message);

		switch ($level) {
			case self::LEVEL_ERROR:
				$obj->error($message);
				break;
			case self::LEVEL_INFO:
				$obj->info($message);
				break;
			case self::LEVEL_DEBUG:
				$obj->debug($message);
				break;
			case self::LEVEL_NOTICE:
				$obj->notice($message);
				break;
		}
	}

	/**
	 * Текущая дата
	 *
	 * @return string
	 */
	protected function getDate()
	{
		return (new DateTime())->format($this->dateFormat);
	}

	/**
	 * Форматирование записи лога
	 *
	 * @param string $level
	 * @param string $message
	 *
	 * @return string
	 */
	private function format($level, $message) :string
	{
		$date = self::getDate();
		
		switch ($level) {
			case self::LEVEL_ERROR:
				$levelString = 'ERROR';
				break;
			case self::LEVEL_INFO:
				$levelString = 'INFO';
				break;
			case self::LEVEL_DEBUG:
				$levelString = 'DEBUG';
				break;
			case self::LEVEL_NOTICE:
				$levelString = 'NOTICE';
				break;
		}

		$message = $date . ' ' . $level . ' ' . $levelString . ' ' .$message;

		return $message;
	}
}