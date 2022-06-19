<?php

namespace App\Jobs;

use App\Console\Commands\SendEmail as CommandsSendEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private  $subscriberList;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($subscriberList){
        $this->subscriberList= $subscriberList;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mailCommand= new CommandsSendEmail();
        // send mail using the send email command
        $mailCommand->handle($this->subscriberList);
    }
}
