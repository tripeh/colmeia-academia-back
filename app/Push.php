<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class Push extends Model
{
    public function send($title, $text, $token){
        $client = new Client();


        $res = $client->request('POST', 'https://fcm.googleapis.com/fcm/send', [
            'headers' => [
                'Authorization' => 'key=AAAAuQzxgAM:APA91bHbTNIQCJSFQzcg8rF5dgA3-oim5CUV0IhNueGt8ltd1-SfiZJ-uvP6uwmiEAUxWmEZB2xoH6fpamIDks0n_bLVAQaZ6PE0ULwepncX-a3yge3tw9Vi4qWonF7zFOEORKUR_ooJ',
            ],
            RequestOptions::JSON => [
                "notification" => [ 
                    "title" => $title, 
                    "text" =>  $text
                ],
                "to" => $token
            ]            
        ]);
    }
}
