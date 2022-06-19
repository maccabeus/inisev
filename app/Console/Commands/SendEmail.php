<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;


class SendEmail extends Command {

    protected $signature = 'email:send';

    protected $description = 'Send emails to article subscribers';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle($subscriptionList, $article) {

        foreach ($subscriptionList as $subscriber){
            $subscriberEmail= $subscriber["subscriber_email"];
            $title= $article["title"];
            Mail::send('email', $article, function ($message) use ($subscriberEmail, $title) {
                $message->from('articles@site.com');
                $message->to($subscriberEmail)->subject($title);
            });
        }
        $this->info('Emails sent to subscribers');
    }
}
