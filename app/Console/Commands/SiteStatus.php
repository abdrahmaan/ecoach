<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\SiteData;

class SiteStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'site:status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {

        if(Date("d") == 24){
        
            SiteData::where("Name","SiteStatus")->update([
                "Value" => 0
            ]);
        }
    }
}
