<?php

namespace LaraZeus\Popover\Form;

use Filament\Forms\Components\Placeholder;
use LaraZeus\Popover\Concerns\HasPopover;

class PopoverForm extends Placeholder
{
    use HasPopover;

    protected string $view = 'zeus-popover::popover-form';
}
