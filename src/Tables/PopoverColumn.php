<?php

namespace LaraZeus\Popover\Tables;

use Filament\Support\Concerns;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\Concerns\HasDescription;
use LaraZeus\Popover\Concerns\HasPopover;

class PopoverColumn extends Column
{
    use Concerns\HasIcon;
    use HasPopover;
    use HasDescription;

    protected string $view = 'zeus-popover::popover';

    protected bool | Closure $canWrap = false;

    protected function setUp(): void
    {
        parent::setUp();

        $this->disabledClick();
    }

    public function wrap(bool | Closure $condition = true): static
    {
        $this->canWrap = $condition;

        return $this;
    }

    public function canWrap(): bool
    {
        return (bool) $this->evaluate($this->canWrap);
    }
}
