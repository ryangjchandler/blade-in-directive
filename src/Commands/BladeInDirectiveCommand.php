<?php

namespace RyanChandler\BladeInDirective\Commands;

use Illuminate\Console\Command;

class BladeInDirectiveCommand extends Command
{
    public $signature = 'blade-in-directive';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
