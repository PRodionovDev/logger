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
	 * @param string $message
	 */
	public function error($message);

	/**
	 * Логирование информационных блоков
	 *
	 * @param string $message
	 */
	public function info($message);

	/**
	 * Логирование режима отладки
	 *
	 * @param string $message
	 */
	public function debug($message);

	/**
	 * Логирование уведомлений
	 *
	 * @param string $message
	 */
	public function notice($message);
}