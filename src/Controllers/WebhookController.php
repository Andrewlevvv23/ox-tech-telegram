<?php

namespace andrewlevvv23\oxTechTelegram\Controllers;

use App\Telegram\Webhook\ActionsHandler;
use Exception;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    /**
     * @throws Exception
     */
    public function __invoke(Request $request, ActionsHandler $actionsHandler): string
    {
        return $actionsHandler->handle($request);
    }
}
