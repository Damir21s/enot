# php-convertor
Для реализации текущего проекта использовалось следующее: php 8.1, MySQL, js, css, OpenServer(OS). 

Для запуска проекта папку test_project переместить в папку domains, которая должна находиться в корне OS.
Для работы скрипта cron.php в планировщике заданий OS использовать команду - 
 %progdir%\modules\php\%phpdriver%\php-win.exe -c %progdir%\modules\php\%phpdriver%\php.ini -q -f %sitedir%\test_project\cron.php

Время для крона (см.скриншот в папке) использовать следующее: 0 */3 * * * 
Для получения использованных данных в бд, в phpmyadmin импортировать файл dbSQL.
Данные для подключения к бд лежат в connect.php
