<p align="center">
    <h1 align="center">Logger</h1>
    <h2 align="center">Компонент, реализующий Logger</h2>
    <h3 align="center">Механизм сохранения логгов</h3>
    <br>
</p>

Компонент, написанный на чистом PHP, без использования каких-либо зависимостей и фреймворков.
Результат выполнения программы - создание записей логов в файлы:

1. application.log - весь список логов
2. application.error.log - список ошибок
3. application.info.log - список информационных логов

Формат логов следующий:
```
    {дата} {код уровня логирования} {уровень логирования} {сообщение}
```

Примеры логов:

1. application.log
```
    2020-01-28T09:50:57+00:00  001  ERROR  Error message
    2020-01-28T09:50:57+00:00  001  ERROR  Error message
    2020-01-28T09:50:57+00:00  002  INFO  Info message
    2020-01-28T09:50:57+00:00  002  INFO  Info message
    2020-01-28T09:50:57+00:00  003  DEBUG  Debug message
    2020-01-28T09:50:57+00:00  003  DEBUG  Debug message
    2020-01-28T09:50:57+00:00  004  NOTICE  Notice message
    2020-01-28T09:50:57+00:00  004  NOTICE  Notice message
```

2. application.error.log
```
    2020-01-28T09:50:57+00:00  001  ERROR  Error message
    2020-01-28T09:50:57+00:00  001  ERROR  Error message
```

3. application.info.log
```
    2020-01-28T09:50:57+00:00  002  INFO  Info message
    2020-01-28T09:50:57+00:00  002  INFO  Info message
```
