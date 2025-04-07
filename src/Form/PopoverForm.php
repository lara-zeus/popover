<?php

namespace LaraZeus\Popover\Form;

use Filament\Infolists\Components\Concerns\HasHelperText;
use Filament\Infolists\Components\TextEntry;
use LaraZeus\Popover\Concerns\HasPopover;

class PopoverForm extends TextEntry
{
    use HasPopover;

    protected string $view = 'zeus-popover::popover-form';
}
