![Pest Laravel Expectations](https://banners.beyondco.de/OX%20Tech%20Telegram.png?theme=dark&packageManager=composer+require&packageName=andrewlevvv23%2Fox-tech-telegram&pattern=anchorsAway&style=style_1&description=A+laravel+facade+to+interact+with+Telegram+Bots&md=1&showWatermark=1&fontSize=100px&images=annotation)

---


**OX Tech Telegram** is a Laravel package for fluently interacting with Telegram Bots made by OX-Technology

```php
Telegraph::message('hello world')
    ->keyboard(Keyboard::make()->buttons([
            Button::make('Delete')->action('delete')->param('id', '42'),
            Button::make('open')->url('https://test.it'),
    ]))->send();
```

## Installation

You can install the package via composer:

```bash
composer require andrewlevvv23/ox-tech-telegram
```

Publish and launch required migrations:

```bash
php artisan vendor:publish --tag="telegram-migrations"
```

```bash
php artisan migrate
```

Optionally, you can publish the config and translation file with:
```bash
php artisan vendor:publish --tag="telegram-config"
```
```bash
php artisan vendor:publish --tag="telegram-translations"
```

## Usage & Documentation

After a new bot is created and added to a chat/group/channel (as described [in our documentation](https://github.com/Andrewlevvv23/ox-tech-telegram)),
the `Telegram` facade can be used to easily send messages and interact with it:

```php
Telegram::message('this is great')->send();
```

An extensive documentation is available at

https://github.com/Andrewlevvv23/ox-tech-telegram