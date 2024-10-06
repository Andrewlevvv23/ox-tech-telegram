<?php

namespace andrewlevvv23\oxTechTelegram\Telegram\Bot;
use Illuminate\Support\Facades\Http;

abstract class Bot
{
    protected array $data;
    protected string $method;

    public function send(): \Illuminate\Http\Client\Response
    {
       return Http::post("https://api.telegram.org/bot".config('telegram.bot_token')."/$this->method", $this->data);
    }
}
