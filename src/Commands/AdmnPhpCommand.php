<?php

namespace Admn\AdmnPhp\Commands;

use Illuminate\Console\Command;

class AdmnPhpCommand extends Command
{
    public $signature = 'admn-php-client';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
