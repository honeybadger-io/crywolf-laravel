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
2. Create a new project and make a note of the api key on the settings page
3. Clone or download this app
4. Run `composer install` to get the necessary dependencies installed
5. Run the app: `HONEYBADGER_API_KEY=your_api_key_here php artisan serve`

## Trying It Out

Once you have the app running, either on Heroku or on your local machine, browse
to the running PHP app.  When you click on the first link, an error will be
triggered and reported to Honeybadger. Check your email for a message from
Honeybadger with a link to the error you just recorded.

## Enjoy!

We hope this sample app gives you an easy way to see just how awesome
Honeybadger is. :)  If you have any questions about this app or the Honeybadger
monitoring service, please feel free to drop us a line at
support@honeybadger.io.
