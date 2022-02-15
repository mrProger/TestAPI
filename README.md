# TestAPI
# Структура репозитория
* [index.php](index.php) - основной файл, в нем весь код api
* [test.sql](test.sql) - sql файл для создания базы данных, таблицы и 3 тестовых записей
* [DB_Dump/photo.sql](DB_Dump/photo.sql) - дамп базы данных

# Пример postman запроса
{"function":"get_photo_data", "tags": ["a","b","c"]}

function - указываем функцию, чтобы api знал к какой функции обратиться
tags - массив тэгов по которым можно найти фотографию
