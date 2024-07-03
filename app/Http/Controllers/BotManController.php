<?php

namespace App\Http\Controllers;

use App\Models\ForLeaseModel;
use App\Models\SaleModel;
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    
    public function handle() {
        $botman = app("botman");

        $botman->hears("{message}", function($botman, $message) {
            if ($message == 'hi') {
                $botman->startConversation(new InitialOptions);
            }
        });
        $botman->listen();
    }
    
    



}
