![Pest Laravel Expectations](https://banners.beyondco.de/OX%20Tech%20Telegram.png?theme=dark&packageManager=composer+require&packageName=andrewlevvv23%2Fox-tech-telegram&pattern=anchorsAway&style=style_1&description=A+laravel+facade+to+interact+with+Telegram+Bots&md=1&showWatermark=1&fontSize=100px&images=annotation)

---


**OX Tech Telegram** is a Laravel package for fluently interacting with Telegram Bots made by OX-Technology

```php
Telegram::message($shat_id, 'This is great packages!')->send();
```

## Installation

You can install the package via composer:

```bash
composer require andrewlevvv23/ox-tech-telegram
```

Next, publish the configuration file telegram.php, and specify bot_token and chat_id in it.

```bash
php artisan ox-tech-telegram:publish-config  
or 
php artisan vendor:publish --tag=config     
```

## Usage & The source of the package

After a new bot is created and added to a chat/group/channel (as described [in our documentation](https://github.com/Andrewlevvv23/ox-tech-telegram)),
the `Telegram` facade can be used to easily send messages and interact with it:

An extensive documentation is available at

https://github.com/Andrewlevvv23/ox-tech-telegram

