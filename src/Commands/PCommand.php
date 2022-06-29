<?php

namespace FaSe22\P\Commands;

use Illuminate\Console\Command;

class PCommand extends Command
{
    public $signature = 'p';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
