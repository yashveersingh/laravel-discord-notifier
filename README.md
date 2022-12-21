
# Laravel Discord Notifier

This package makes it easy to send notifications using the [Discord webhook API](https://discord.com/developers/docs/resources/webhook) with Laravel.

## Installation

You can install the package via composer:

```bash
composer require yashveersingh/laravel-discord-notifier
```

### Setting up your Discord bot

- Add `DISCORD_WEBHOOK=https://discord.com/api/webhooks/...` in `.env`

## Usage

>```php
>use yashveersingh\laravelDiscordNotifier\DiscordNotifier;
>
>
>$message = 'Hello From Webhook';
>$discordNotifier = new DiscordNotifier();
>$discordNotifier->setUserName('USERNAME');
>$discordNotifier->send($message);
>```

## License

The MIT License (MIT). Please see [LICENSE](LICENSE.md) for more information.
