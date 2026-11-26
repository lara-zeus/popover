---
name: zeus-popover
description: Use when displaying interactive click or hover popovers in Filament tables, infolists, or forms with lara-zeus/popover.
---

# Lara Zeus Popover

## Overview & Requirements
`lara-zeus/popover` provides Filament table column, infolist entry, and form components that render a floating popover (`x-float`) with HTML, Blade views, or Livewire content.
- **PHP**: `^8.1`
- **Filament**: `^5.0`
- **Package Name**: `lara-zeus/popover` (Service Provider: `LaraZeus\Popover\PopoverServiceProvider`)

## Installation
```bash
composer require lara-zeus/popover
```

## Configuration & Migrations
No migrations or config files are required.

If using a Filament custom theme, include the package views in your theme CSS:
```css
@source '../../../../vendor/lara-zeus/popover/resources/views/**/*.blade.php';
```

## Filament Panel Registration
No panel plugin registration is required. Import and use the components directly.

## Core Usage & Examples

All three components share `HasPopover` methods:
- `content(mixed $content)` (accepts string, `HtmlString`, `View`, or closure)
- `trigger(mixed $trigger)` (`'click'` default or `'hover'`)
- `placement(mixed $placement)` (`'top'` default, `'right'`, `'bottom'`, `'left'`, etc.)
- `offset(int $offset)` (`0` default)
- `popOverMaxWidth(string $maxWidth)` (`'300'` default, numeric pixel value)
- `icon(string|Closure $icon)`

### Table Column (`PopoverColumn`)
```php
use Illuminate\Support\HtmlString;
use LaraZeus\Popover\Tables\PopoverColumn;

PopoverColumn::make('name')
    ->sortable()
    ->searchable()
    ->color('primary')
    ->trigger('click') // or 'hover'
    ->placement('right')
    ->offset(10)
    ->popOverMaxWidth('350')
    ->icon('heroicon-o-chevron-right')
    ->content(fn ($record) => view('filament.user-card', ['record' => $record]));
```

### Infolist Entry (`PopoverEntry`)
```php
use LaraZeus\Popover\Infolists\PopoverEntry;

PopoverEntry::make('name')
    ->trigger('hover')
    ->placement('bottom')
    ->offset(8)
    ->popOverMaxWidth('300')
    ->icon('heroicon-o-information-circle')
    ->content(fn ($record) => new HtmlString($record->name . '<br>' . $record->email));
```

### Form Component (`PopoverForm`)
```php
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\HtmlString;
use LaraZeus\Popover\Form\PopoverForm;

PopoverForm::make('name')
    ->trigger('click')
    ->placement('right')
    ->content(fn ($record) => new HtmlString(
        Blade::render('@livewire(\App\Filament\Widgets\Stats::class, ["lazy" => true])')
    ));
```

## Common Pitfalls / Anti-Patterns
- **Wrong form namespace**: It is `LaraZeus\Popover\Form\PopoverForm` (singular `Form`), not `Forms\PopoverForm`.
- **Non-numeric `popOverMaxWidth()`**: The Blade view builds `w-[{{ $getPopOverMaxWidth }}px]`; pass numeric strings like `'350'`, not `'none'` or `'350px'`.
- **`offset()` expects an `int`**: `HasPopover::offset(int $offset)` requires an integer, not an array.
