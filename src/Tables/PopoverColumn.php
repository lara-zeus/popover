<?php

namespace LaraZeus\Popover\Tables;

use Filament\Support\Concerns;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\Concerns\CanFormatState;
use Filament\Tables\Columns\Concerns\CanWrap;
use Filament\Tables\Columns\Concerns\HasDescription;
use LaraZeus\Popover\Concerns\HasPopover;

class PopoverColumn extends Column
{
    use CanFormatState;
    use CanWrap;
    use Concerns\HasIcon;
    use HasDescription;
    use HasPopover;

    protected string $view = 'zeus-popover::popover-column';

    protected function setUp(): void
    {
        parent::setUp();

        $this->disabledClick();
    }
}
