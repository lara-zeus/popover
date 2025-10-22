<?php

namespace LaraZeus\Popover\Tables;

use Filament\Support\Concerns\CanWrap;
use Filament\Support\Concerns\HasIcon;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\Concerns\CanFormatState;
use Filament\Tables\Columns\Concerns\HasColor;
use Filament\Tables\Columns\Concerns\HasDescription;
use LaraZeus\Popover\Concerns\HasPopover;

class PopoverColumn extends Column
{
    use CanFormatState;
    use CanWrap;
    use HasColor;
    use HasDescription;
    use HasIcon;
    use HasPopover;

    protected string $view = 'zeus-popover::popover-column';

    protected function setUp(): void
    {
        parent::setUp();

        $this->disabledClick();
    }
}
