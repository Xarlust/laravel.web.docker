Команда:
Хрусталев Александр Алексеевич

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


___

