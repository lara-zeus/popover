<?php

namespace LaraZeus\Popover\Infolists;

use Filament\Infolists\Components\Concerns\HasIcon;
use Filament\Infolists\Components\Entry;
use LaraZeus\Popover\Concerns\HasPopover;

class Popover extends Entry
{
    use HasIcon;
    use HasPopover;

    protected string $view = 'zeus-popover::popover';
}
