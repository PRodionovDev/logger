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
	 */
	public function error();

	/**
	 * Логирование информационных блоков
	 *
	 */
	public function info();

	/**
	 * Логирование режима отладки
	 *
	 */
	public function debug();

	/**
	 * Логирование уведомлений
	 *
	 */
	public function notice();
}