<?php

namespace App\Console\Commands;

use App\Models\Number;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class GenerarateTxt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'number:txt-generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate numbers with txt';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $numbers = Number::all()->pluck('number');

        Storage::disk('local')->put(Carbon::now().'-txt', $numbers);
    }
}
