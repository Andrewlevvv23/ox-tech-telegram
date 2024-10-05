<?php

use andrewlevvv23\oxTechTelegram\Controllers\WebhookController;
use Illuminate\Support\Facades\Route;

Route::post('/webhook', WebhookController::class)->name('webhook');


