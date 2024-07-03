<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ForLeaseModel;

use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Conversations\Conversation;

use App\Models\AboutItem;

class LeaseOptions extends Conversation
{
    public function run()
    {
        $this->lease_option();
    }

    public function lease_option()
    {
        $question = Question::create("What type of Unit?")
            ->fallback("Sorry I did not understand that, please try again.")
            ->callbackId("lease_options")
            ->addButtons([
                Button::create("Commercial Units")->value("commercial"),
                Button::create("Residential Units")->value("residential"),
                
        ]);

        $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                switch ($answer->getValue()) {

                    case "commercial":
                        $this->provideCommercialUnits();
                        break;

                    case "residential":
                        $this->provideResidentialUnits();
                        break;
                        
                }
            }
        });
    }
    
    protected function provideCommercialUnits()
    {
        $commercialUnits = ForLeaseModel::all();

        if ($commercialUnits->isEmpty()) {
            $this->say("No commercial units available at the moment.");
        } else {
            $response = "Here are the available commercial units:<br>";
            foreach ($commercialUnits as $key => $unit) {
                $response .= ($key + 1) . ". {$unit->lease_name}<br>";
               
            }
         $response .= "<br>You can visit our leasing page here: <a href='https://megaworldcorp.online/For-Lease' target='_blank'>https://megaworldcorp.online/For-Lease</a>\n";
            
           
            $this->say($response);
        }

      
    }
    
    protected function provideResidentialUnits()
    {
        // Fetch residential units from database
        $residentialUnits = ForLeaseModel::where('type', 'Residentials')->get();

        if ($residentialUnits->isEmpty()) {
            $this->say("No residential units available at the moment.");
        } else {
            $response = "Here are the available residential units:<br>";
            foreach ($residentialUnits as $key => $unit) {
                $response .= ($key + 1) . ". {$unit->lease_name}<br>";
            }

            $response .= "<br>You can visit our leasing page here: <a href='https://megaworldcorp.online/For-Lease' target='_blank'>https://megaworldcorp.online/For-Lease</a>\n";

            $this->say($response);
        }
    }


}