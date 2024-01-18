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
    ->trigger('click') // for now popover only support click!
    ->placement('right') // for more: https://alpinejs.dev/plugins/anchor#positioning
    ->offset(10) // int px, for more: https://alpinejs.dev/plugins/anchor#offset
    ->popOverMaxWidth('none') // todo change to classes as in filament for more: 
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
    ->trigger('click') // for now popover only support click!
    ->placement('right') // for more: https://alpinejs.dev/plugins/anchor#positioning
    ->offset(10) // int px, for more: https://alpinejs.dev/plugins/anchor#offset
    ->popOverMaxWidth('none') // todo change to classes as in filament for more: 
    ->icon('heroicon-o-chevron-right') // show custom icon

    // direct HTML content
    ->content(fn($record) => new HtmlString($record->name.'<br>'.$record->email))

    // or blade content
    ->content(fn($record) => view('filament.test.user-card', ['record' => $record]))

    // or livewire component
    ->content(fn($record) => new HtmlString(Blade::render('@livewire(\App\Filament\Widgets\Stats::class, ["lazy" => true])')))
,
```
