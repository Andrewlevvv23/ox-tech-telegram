<?php

namespace andrewlevvv23\oxTechTelegram\Webhook;

use Illuminate\Http\Request;

class Realization
{
    protected const Commands = [
        '/start' => Start::class,
    ];

    public function take(Request $request): string|bool
    {
        $command = $request->input('message')['entities'][0]['type'] ?? false;

        if ($command == 'bot_command') {
            $text = $request->input('message')['text'] ?? '';
            return self::Commands[$text] ?? false;
        }

        return false;
    }
}
