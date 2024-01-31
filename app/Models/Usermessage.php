<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Usermessage as Authenticatable;

class Usermessage extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'umessage',
        'user_id',


    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
