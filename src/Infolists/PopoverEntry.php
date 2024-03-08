<?php

namespace LaraZeus\Popover\Infolists;

use Filament\Infolists\Components\Concerns\CanFormatState;
use Filament\Infolists\Components\Concerns\HasIcon;
use Filament\Infolists\Components\Entry;
use LaraZeus\Popover\Concerns\HasPopover;

class PopoverEntry extends Entry
{
    use HasIcon;
    use HasPopover;
    use CanFormatState;

    protected string $view = 'zeus-popover::popover-entry';
}
