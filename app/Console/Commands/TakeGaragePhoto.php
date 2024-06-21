<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Process;

class TakeGaragePhoto extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'photo:capture-garage';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Captures a photo of the garage';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Process::run('python ' . resource_path('python/photo.py'));
    }
}
