<?php

namespace Logger;

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
	 * Запись лога
	 *
	 * @param object $obj
	 * @param string $level
	 * @param string $message
	 *
	 */
	public function log(Logger $obj, $level, $message)
	{
		switch ($level) {
			case self::LEVEL_ERROR:
				$obj->error($level, $message);
				break;
			case self::LEVEL_INFO:
				$obj->info($level, $message);
				break;
			case self::LEVEL_DEBUG:
				$obj->debug($level, $message);
				break;
			case self::LEVEL_NOTICE:
				$obj->notice($level, $message);
				break;
		}
	}
}