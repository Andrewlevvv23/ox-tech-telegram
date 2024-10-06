<?php

namespace andrewlevvv23\oxTechTelegram\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';
    protected $fillable = [
        'chat_id',
        'user_name',
        'first_name',
        'phone',
    ];

}
