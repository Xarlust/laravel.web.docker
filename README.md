Команда:Хрусталев Александр Алексеевич

## Dev run

1. `docker-compose -f docker-compose.dev.yml up -d`
2. `docker exec petsearch_app_1 migrate --seed`
3. `cp ./src/.env.example ./src/.env`

## Production build

1. `docker-compose -f docker-compose.dev.yml build`
2. `docker-compose -f docker-compose.dev.yml push`

## Production run
1. Скопировать файл `docker-compose.yml` в папку, где будет лежать проект.
2. Рядом c этим файлом разместить файл `.env`, по
примеру `.env.example`.
3. `docker-compose up -d`
4. `docker exec petsearch_app_1 migrate --seed`

Проект будет доступен по адресу http://localhost
___

<h1>Установка проекта</h1>
<p>1. Клониловать репозиторий</p>
<p>2. Установить ларавель командой <code>composer global require laravel/installer</code></p>
<p>3. Установить пакеты командой <code>composer install</code></p>
<p>4. Переименовать файл ".env.example" в ".env"</p>
<p>5. Сгенерировать ключ приложения <code>php artisan key:generate</code></p>
<p>6. Запустить сервер <code>php artisan serve</code></p>
<h3>Настройка Vue.js в Laravel проекте</h3>
<p>1. Устанавливаем Vue в проект <code>composer require laravel/ui</code></p>
<p>2. Проинициализировать app.js <code>php artisan ui vue --auth</code></p>
<p>3. Устанавливаем npm в проект для работы с миграциями Vue <code>npm install && nmp run dev</code></p>
<p>4. Исправить ошибки <code>npm audit fix</code></p>
<p>5. Внести необходимые изменения в app.js и скомпилировать <code>npm run watch</code></p>

<h1>Настройка тестов</h1>
<p>1. Установить CLI интерпритатор. Необходимо выбрать ваш php.exe<img src="https://i.imgur.com/V6nVgCg.png"/></p>
<p>2. Установить следующие настройки:<img src="https://i.imgur.com/yqmJsVX.png"/></p>
<p>3. Запустить тесты можно кнопкой RUN или следующим образом:<img src="https://i.imgur.com/8caZo67.png"/></p>
