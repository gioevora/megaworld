<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SaleModel;

use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Conversations\Conversation;

use App\Models\AboutItem;

class SaleOptions extends Conversation
{
    public function run()
    {
        $this->sale_option();
    }

    public function sale_option()
    
    {
        $commercialUnits = SaleModel::all();

        if ($commercialUnits->isEmpty()) {
            $this->say("No commercial units available at the moment.");
        } else {
            $response = "Here are the available For Sale units:<br>";
            foreach ($commercialUnits as $key => $unit) {
                $response .= ($key + 1) . ". {$unit->properties_name}<br>";
               
            }
         $response .= "<br>You can visit our for sale page here: <a href='https://www.megaworldcorp.online/For-Sale' target='_blank'>https://www.megaworldcorp.online/For-Sale</a>\n";
            
           
            $this->say($response);
        }
    }
    
   
   


}