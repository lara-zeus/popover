---
title: Installation
weight: 3
---

## Installation

Install @zeus Popover by running the following commands in your Laravel project directory.

```bash
composer require lara-zeus/popover
```

## Usage:

### use it in your table:

```php
\LaraZeus\Popover\Tables\PopoverColumn::make('name')
    // most of filament methods will work
    ->sortable()
    ->searchable()
    ->toggleable()
    
    // main options
    ->trigger('click') // for more: https://atomiks.github.io/tippyjs/v6/all-props/#trigger
    ->placement('right') // for more: https://atomiks.github.io/tippyjs/v6/all-props/#placement
    ->offset([0, 10]) // for more: https://atomiks.github.io/tippyjs/v6/all-props/#offset
    ->popOverMaxWidth('none') // for more: https://atomiks.github.io/tippyjs/v6/all-props/#maxwidth
    ->icon('heroicon-o-chevron-right') // show custom icon

    // direct HTML content
    ->content(fn($record) => new HtmlString($record->name.'<br>'.$record->email))

    // or blade content
    ->content(fn($record) => view('filament.test.user-card', ['record' => $record]))

    // or livewire component
    ->content(fn($record) => new HtmlString(Blade::render('@livewire(\App\Filament\Widgets\Stats::class, ["lazy" => true])')))
,
```

### use it in your infolist:

```php
\LaraZeus\Popover\Infolists\PopoverEntry::make('name')
    // main options
    ->trigger('click') // for more: https://atomiks.github.io/tippyjs/v6/all-props/#trigger
    ->placement('right') // for more: https://atomiks.github.io/tippyjs/v6/all-props/#placement
    ->offset([0, 10]) // for more: https://atomiks.github.io/tippyjs/v6/all-props/#offset
    ->popOverMaxWidth('none') // for more: https://atomiks.github.io/tippyjs/v6/all-props/#maxwidth
    ->icon('heroicon-o-chevron-right') // show custom icon

    // direct HTML content
    ->content(fn($record) => new HtmlString($record->name.'<br>'.$record->email))

    // or blade content
    ->content(fn($record) => view('filament.test.user-card', ['record' => $record]))

    // or livewire component
    ->content(fn($record) => new HtmlString(Blade::render('@livewire(\App\Filament\Widgets\Stats::class, ["lazy" => true])')))
,
```
