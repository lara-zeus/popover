<?php

namespace LaraZeus\Popover\Form;

use Filament\Forms\Components\TextInput;
use Filament\Support\Concerns\HasIcon;
use LaraZeus\Popover\Concerns\HasPopover;

class PopoverForm extends TextInput
{
    use HasIcon;
    use HasPopover;

    protected string $view = 'zeus-popover::popover-form';
}
