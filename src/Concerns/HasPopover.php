<?php

namespace LaraZeus\Popover\Concerns;

trait HasPopover
{
    protected mixed $content = null;

    protected mixed $trigger = 'click';

    protected mixed $placement = 'top';

    protected int $offset = 0;

    protected string $popOverMaxWidth = '300';

    public function content(mixed $content): static
    {
        $this->content = $content;

        return $this;
    }

    public function getContent(): mixed
    {
        return $this->evaluate($this->content);
    }

    public function trigger(mixed $trigger): static
    {
        $this->trigger = $trigger;

        return $this;
    }

    public function getTrigger(): mixed
    {
        return $this->evaluate($this->trigger);
    }

    public function placement(mixed $placement): static
    {
        $this->placement = $placement;

        return $this;
    }

    public function getPlacement(): mixed
    {
        return $this->evaluate($this->placement);
    }

    public function offset(int $offset): static
    {
        $this->offset = $offset;

        return $this;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function popOverMaxWidth(string $maxWidth): static
    {
        $this->popOverMaxWidth = $maxWidth;

        return $this;
    }

    public function getPopOverMaxWidth(): string
    {
        return $this->popOverMaxWidth;
    }
}
