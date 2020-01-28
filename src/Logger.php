<?php

namespace Logger;

/**
 * Базовый интерфейс Компонента определяет уровень логов и определяет
 * стратегию записи в файл
 *
 */
interface Logger
{
	/**
	 * Логирование ошибок
	 *
	 * @param string $level
	 * @param string $message
	 */
	public function error($level, $message);

	/**
	 * Логирование информационных блоков
	 *
	 * @param string $level
	 * @param string $message
	 */
	public function info($level, $message);

	/**
	 * Логирование режима отладки
	 *
	 * @param string $level
	 * @param string $message
	 */
	public function debug($level, $message);

	/**
	 * Логирование уведомлений
	 *
	 * @param string $level
	 * @param string $message
	 */
	public function notice($level, $message);
}