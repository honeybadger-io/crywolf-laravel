# Honeybadger Test PHP/Laravel App

Welcome to a simple PHP/Laravel application that allows you to test the
[Honeybadger](https://www.honeybadger.io) monitoring platform for PHP apps.
Honeybadger allows you to easily monitor for exceptions in your PHP web
applications.

## Quick Start

The easiest way to get started with this application is to deploy it to Heroku
with the Heroku Button:

[![Deploy](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy)

## Slightly Less Quick Start

If you'd like to do it the old fashioned way, follow these steps:

1. Sign up or sign in at [Honeybadger.io](https://www.honeybadger.io)
1. Create a new project and make a note of the api key on the settings page
1. Clone or download this app
1. Run `composer install` to get the necessary dependencies installed
1. Create and edit the `.env` file: `cp .env.example .env`
1. Run the app: `HONEYBADGER_API_KEY=your_api_key_here php artisan serve`

### Trying It Out

Once you have the app running, either on Heroku or on your local machine, browse
to the running PHP app.  When you click on the first link, an error will be
triggered and reported to Honeybadger. Check your email for a message from
Honeybadger with a link to the error you just recorded.

### Via Docker

If you already use `docker` and `docker-compose`, the easiest way to get this app
up and running is via the [laradock](http://laradock.io/introduction/) environment:

```sh
git clone https://github.com/honeybadger-io/crywolf-laravel.git
cd crywolf-laravel
git submodule update --init --recursive
cp .env.example .env
echo 'HONEYBADGER_API_KEY="your-api-key"' >> .env
cd laradock
cp env-example .env
docker-compose up -d nginx mysql phpmyadmin redis workspace
docker-compose run workspace composer install
docker-compose run workspace php artisan key:generate
```

Open your browser and visit localhost: http://localhost

#### Notes

- To create a user:
    ```
    cd laradock
    docker-compose run workspace bash
    php artisan tinker
    > $user = new App\User()
    > $user->password = Hash::make('tester');
    > $user->email = 'user@example.com';
    > $user->name = 'example';
    > $user->save();
    ```

#### Issues

- [MySQL Authentication error: SQLSTATE HY000 2054 The server requested authentication method unknown to the client](https://github.com/laradock/laradock/issues/1392#issuecomment-383631421)

## Enjoy!

We hope this sample app gives you an easy way to see just how awesome
Honeybadger is. :)  If you have any questions about this app or the Honeybadger
monitoring service, please feel free to drop us a line at
support@honeybadger.io.
