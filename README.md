# HTTP аутентификация
## Текст задания
### Цель работы
Спроектировать и разработать систему авторизации пользователей на протоколе HTTP
## Ход работы
## 1. [Пользовательский интерфейс](https://www.figma.com/file/XeUCWHBwbvV7h9eH9o9MkQ/Web-Page)
## 2. [Пользовательские сценарии работы](https://imgur.com/a/tltvChs)
## 3. [API сервера и хореография](https://imgur.com/a/KxFuDwA)
## 4. Структура базы данных
| id | login | hash | secword |
|:---|:------|:-----|:--------|
- id: INT, AUTO_INCREMENT, PRIMARY KEY;
Уникальный идентификатор пользователя
- login: VARCHAR, 70;
логин пользователя
- hash: VARCHAR, 62;
хэшированный пароль
- secword: VARCHAR, 62;
секретное слово для восстановления пароля
## 5. Алгоритмы
1. [Регистрация](https://imgur.com/a/v0FjTse)
2. [Авторизация](https://imgur.com/a/1pyMENC)
3. [Выход](https://imgur.com/a/J0175Fl)
4. [Обновление пароля](https://imgur.com/a/Gvue2Dl)
5. [Восстановление пароля](https://imgur.com/a/AnaJyg9)
## 6. Примеры HTTP запросов/ответов
## 7. Важные части кода
