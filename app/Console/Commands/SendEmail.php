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

    public function handle($subscriptionList=null) {

        Mail::send('email', $subscriptionList, function ($message) {

            $message->from('articles@site.com');

            $message->to('xxx@gmail.com')->subject('New Article Posted');

        });

        $this->info('Emails sent to subscribers');
    }
}
