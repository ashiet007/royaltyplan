<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class HelpMatching extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Help:Matching';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Match User Help Request Every Five Minutes';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $time = Carbon::now('Asia/Kolkata');
        $hour = $time->format('H');
        $t=date('d-m-Y');
        $day = date("D",strtotime($t));
        if($day != 'Sun' && $day != 'Sat' && $hour >= 9 && $hour < 14 )
        {
            /*================ Help Matching ==========================*/
            helpMatching();
            /*================ Working Amount ==========================*/
            Log::debug('command ran');
        }
        $this->info('Hourly Update has been send successfully');
    }
}
