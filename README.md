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
GET /reg.php HTTP/1.1
Host: localhost
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9
Content-Type: application/x-www-form-urlencoded
sec-ch-ua: "Chromium";v="106", "Google Chrome";v="106", "Not;A=Brand";v="99"
sec-ch-ua-mobile: ?0
sec-ch-ua-platform: "Windows"
Upgrade-Insecure-Requests: 1
User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36

HTTP/1.1 200 OK
Cache-Control: no-store, no-cache, must-revalidate
Connection: Keep-Alive
Content-Length: 906
Content-Type: text/html; charset=UTF-8
Date: Thu, 27 Oct 2022 07:46:03 GMT
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Keep-Alive: timeout=5, max=99
Pragma: no-cache
Server: Apache/2.4.54 (Win64) PHP/8.1.10
X-Powered-By: PHP/8.1.10



POST /save_user.php HTTP/1.1
Host: localhost
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9
Content-Type: application/x-www-form-urlencoded
sec-ch-ua: "Chromium";v="106", "Google Chrome";v="106", "Not;A=Brand";v="99"
sec-ch-ua-mobile: ?0
sec-ch-ua-platform: "Windows"
Upgrade-Insecure-Requests: 1
User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36

HTTP/1.1 302 Found
Cache-Control: no-store, no-cache, must-revalidate
Connection: Keep-Alive
Content-Length: 167
Content-Type: text/html; charset=UTF-8
Date: Thu, 27 Oct 2022 07:46:03 GMT
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Keep-Alive: timeout=5, max=100
Location: reg.php
Pragma: no-cache
Server: Apache/2.4.54 (Win64) PHP/8.1.10
X-Powered-By: PHP/8.1.10




GET /main.php HTTP/1.1
Host: localhost
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9
Content-Type: application/x-www-form-urlencoded
sec-ch-ua: "Chromium";v="106", "Google Chrome";v="106", "Not;A=Brand";v="99"
sec-ch-ua-mobile: ?0
sec-ch-ua-platform: "Windows"
Upgrade-Insecure-Requests: 1
User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36

HTTP/1.1 200 OK
Cache-Control: no-store, no-cache, must-revalidate
Connection: Keep-Alive
Content-Length: 555
Content-Type: text/html; charset=UTF-8
Date: Thu, 27 Oct 2022 07:48:51 GMT
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Keep-Alive: timeout=5, max=99
Pragma: no-cache
Server: Apache/2.4.54 (Win64) PHP/8.1.10
X-Powered-By: PHP/8.1.10


GET /change.php HTTP/1.1
Host: localhost
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9
sec-ch-ua: "Chromium";v="106", "Google Chrome";v="106", "Not;A=Brand";v="99"
sec-ch-ua-mobile: ?0
sec-ch-ua-platform: "Windows"
Upgrade-Insecure-Requests: 1
User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36

HTTP/1.1 200 OK
Cache-Control: no-store, no-cache, must-revalidate
Connection: Keep-Alive
Content-Length: 911
Content-Type: text/html; charset=UTF-8
Date: Thu, 27 Oct 2022 07:49:44 GMT
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Keep-Alive: timeout=5, max=100
Pragma: no-cache
Server: Apache/2.4.54 (Win64) PHP/8.1.10
X-Powered-By: PHP/8.1.10

## 7. Важные части кода
