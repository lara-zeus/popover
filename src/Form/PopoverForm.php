<?php

namespace LaraZeus\Popover\Form;

use Filament\Forms\Components\Placeholder;
use Filament\Support\Concerns\HasIcon;
use LaraZeus\Popover\Concerns\HasPopover;

class PopoverForm extends Placeholder
{
    use HasIcon;
    use HasPopover;

    protected string $view = 'zeus-popover::popover-form';
}
