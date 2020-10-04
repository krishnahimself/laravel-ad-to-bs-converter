<?php

namespace Krishnahimself\DateConverter\Commands;

use Illuminate\Console\Command;

class DateConverterCommand extends Command
{
    public $signature = 'laravel-ad-to-bs-converter';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
