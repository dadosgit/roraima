<?php
// auto-generated by sfPhpConfigHandler
// date: 2007/03/13 10:50:10
ini_set('magic_quotes_runtime', '');
ini_set('log_errors', '1');
ini_set('arg_separator.output', '&amp;');
if (ini_get('magic_quotes_gpc') != false)
{
  sfLogger::getInstance()->warning('{sfPhpConfigHandler} php.ini "magic_quotes_gpc" key is better set to "false" (current value is "\'1\'" - php.ini location: "C:\WINDOWS\php.ini")');
}

if (ini_get('register_globals') != false)
{
  sfLogger::getInstance()->warning('{sfPhpConfigHandler} php.ini "register_globals" key is better set to "false" (current value is "\'1\'" - php.ini location: "C:\WINDOWS\php.ini")');
}

if (ini_get('session.auto_start') != false)
{
  sfLogger::getInstance()->warning('{sfPhpConfigHandler} php.ini "session.auto_start" key is better set to "false" (current value is "\'0\'" - php.ini location: "C:\WINDOWS\php.ini")');
}

