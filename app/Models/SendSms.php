<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendSms extends Model
{
    use HasFactory;
    public static function sendSms($phone){
        $nexmo=app('Nexmo\Client');
        $nexmo->message()->send([
            'to'=>'+63'.(int) $phone,
            'from'=>'GDMOTORS',
            'text'=>'Please check your email for verificatio mail.google.com',
        ]);
    }
}
