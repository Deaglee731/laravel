<?php

namespace App\Console\Commands;

use App\Models\Number;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class GenerateNumber extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'number:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate random uuid string';

    /**
     * Execute the console command.
     *
     */
    public function handle()
    {
        $number = Number::create(['number' => Str::uuid()]);
        $number->save();
    }
}
