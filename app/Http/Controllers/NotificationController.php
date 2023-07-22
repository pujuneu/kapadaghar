<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Notifications\SendEmailNotification;

class NotificationController extends Controller
{
    public function sendnotification()
    {
        $user=User::all()
        $details=[

            'greetting'=>'hi',
            'body'=>'email',
            'actiontext'=>'dsd',
            'actionurl'=>'/',
            'lastline'=>'line',
        ];

        Notification::send($user,new SendEmailNotification($details));
        dd('done');

    }
        
    }

