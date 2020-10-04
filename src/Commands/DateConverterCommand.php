<?php

namespace Krishnahimself\DateConverter\Commands;

use Illuminate\Console\Command;

class DateConverterCommand extends Command
{
    public $signature = 'date-converter:ad-to-bs';

    public $description = 'Convert english date to nepali date';

    public function handle()
    {
        $this->comment('All done');
    }
}
