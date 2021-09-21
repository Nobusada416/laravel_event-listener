<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailMagazine extends Model
{
    protected $fillable = [
        'email'
    ];

    public static function subscribe($email)
    {
        return Self::create(['email' => $email]);
    }
}
