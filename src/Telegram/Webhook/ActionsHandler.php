<?php

namespace andrewlevvv23\oxTechTelegram\Telegram\Webhook;

use andrewlevvv23\oxTechTelegram\Facades\Telegram;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ActionsHandler
{
    /**
     * @throws Exception
     */
    public function handle(Request $request): string
    {
        $chatId = $request->input('message.chat.id') ?? $request->input('callback_query.from.id');

        if (!$chatId) {
            Log::error("Chat ID is missing in callback query: $chatId");
            return true;
        }

        $chatType = $this->getChatType($chatId);

        return match ($chatType) {
            'supergroup' => $this->handleSupergroupMessage($request),
            'private' => $this->handlePrivateChatMessage($request, $chatId),
            default => $this->handleUnknownChat($request),
        };
    }

    /**
     * @throws Exception
     */
    protected function handleSupergroupMessage(Request $request): string|true
    {
        return '';
    }

    /**
     * @throws Exception
     */
    protected function handlePrivateChatMessage(Request $request, $chatId = ''): string
    {
       return '';
    }

    protected function handleUnknownChat($request): string
    {
        return true;
    }

}
