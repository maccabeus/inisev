<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SubscriberController extends Controller
{
    public  function subscribe(Request $request ) {

        $allInputs= $request->all();

        $validator = Validator($allInputs, [
            'website_id' => ['required', 'int'],
            'subscriber_id' => ['required', 'int'],
            'subscriber_email' => ['required', 'email']
        ]);
        if ($validator->fails()) {
            return Response("error", 400);
        }
        $sub= Subscriber::where("subscriber_email", $allInputs['subscriber_email'])->count();
        if($sub > 0) {
            return Response($this->processResponse(true, "Already subscribed"), 200);
        }
        Subscriber::create($allInputs);
        return Response($this->processResponse(false, "Subscribtion successful"), 200);
    }

    private  function processResponse(bool $error, string $message=null): array{
        return  ["error"=>$error, "message"=>$message];
    }
}
