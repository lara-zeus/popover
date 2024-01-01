<?php

namespace LaraZeus\Popover\Tables;

use Filament\Support\Concerns;
use Filament\Tables\Columns\Column;
use LaraZeus\Popover\Concerns\HasPopover;

class Popover extends Column
{
    use Concerns\HasIcon;
    use HasPopover;

    protected string $view = 'zeus-popover::popover';

    protected function setUp(): void
    {
        parent::setUp();

        $this->disabledClick();
    }
}
