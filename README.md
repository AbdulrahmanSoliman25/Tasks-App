# Convertedin Task (Tasks App)

## Description

```
Web App that can create tasks, list them, and see the statistics for top ten users that have the highest tasks assigned to.
It is built with:
    -fontend :  VueJs , Vuex ,VueRouter,Vuetify ,and Axios .
    -Backend :  Php-Laravel
wrapped with Docker and Docker Compose.

```

## Project setup using Docker Compose

```
- kindely make sure that you have docker && docker compose installed on your machine and in the backend directory just rename ".env.example" file to ".env", then run the following commands:
- docker compose up --build

- in another terminal run these commands:
- docker compose run --rm artisan optimize
- docker compose run --rm artisan key:generate
- docker compose run --rm artisan migrate --seed

- now you can enjoy the app on http://localhost:3000/

-NOTE:
- for the statistics it's queueing once task created so,if you want to run the worker please run "docker compose run --rm artisan queue:work"

- for unit testing "docker compose run --rm artisan test"
