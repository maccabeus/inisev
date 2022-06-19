<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SubscriberController extends Controller
{
    public  function index( ) {
        return "done";
    }
    public  function subscribe(Request $request ) {
        $allInputs= $request->all();

        $validator = Validator($allInputs, [
            'websiteId' => ['required', 'int'],
            'subscriberEmail' => ['required', 'email']
        ]);

        if ($validator->fails()) {
            return Response("error", 400);
        }
        $sub= Subscriber::where("subscriber_email", $allInputs['subscriberEmail'])->max(1);
        if($sub) {
            return Response("Already subscribed", 200);
        }
        Subscriber::create($allInputs);
        return Response("Subscribtion successful", 200);
    }
}
