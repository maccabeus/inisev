<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Subscriber;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Nette\Utils\Json;

class ArticleController  extends Controller
{
    public  function create(Request $request) {

        $allInputs= $request->all();

        $validator = Validator($allInputs, [
            'website_id' => ['required', 'int'],
            'author_id' => ['required', 'int'],
            'author_email' => ['required', 'email'],
            'title' => ['required'],
            'description' => ['required'],
            'post_slug' => ['required'],
            'post_content' => ['required']
        ]);
        if ($validator->fails()) {
            return Response($this->processResponse(true, " input validation fails"), 400);
        }
        Article::create($allInputs);
        /** get all user subscribe to this web site */
        $subscriberList = Subscriber::where('website_id', $allInputs['website_id'])->get();
        /** queue the message sending to all webste subcribers
         * @note `allInputs` is equivalent to the value of value of @var $article
         * in `\App\Jobs\SendEmailJob::dispatch` class constructor
         * */
        \App\Jobs\SendEmailJob::dispatch($subscriberList, $allInputs);

        return Response($this->processResponse(false, "Article added"), 200);
    }

    private  function processResponse(bool $error, string $message=null): array{
        return  ["error"=>$error, "message"=>$message];
    }
}
