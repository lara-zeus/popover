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
    ->trigger('click') // support click and hover
    ->placement('right') // for more: https://alpinejs.dev/plugins/anchor#positioning
    ->offset(10) // int px, for more: https://alpinejs.dev/plugins/anchor#offset
    ->popOverMaxWidth('none') 
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
    ->trigger('click') // support click and hover
    ->placement('right') // for more: https://alpinejs.dev/plugins/anchor#positioning
    ->offset(10) // int px, for more: https://alpinejs.dev/plugins/anchor#offset
    ->popOverMaxWidth('none') 
    ->icon('heroicon-o-chevron-right') // show custom icon

    // direct HTML content
    ->content(fn($record) => new HtmlString($record->name.'<br>'.$record->email))

    // or blade content
    ->content(fn($record) => view('filament.test.user-card', ['record' => $record]))

    // or livewire component
    ->content(fn($record) => new HtmlString(Blade::render('@livewire(\App\Filament\Widgets\Stats::class, ["lazy" => true])')))
,
```

### use it in your forms as a placeholder:

```php
\LaraZeus\Popover\Form\PopoverForm::make('name')
    // main options
    ->trigger('click') // support click and hover
    ->placement('right') // for more: https://alpinejs.dev/plugins/anchor#positioning
    ->offset(10) // int px, for more: https://alpinejs.dev/plugins/anchor#offset
    ->popOverMaxWidth('none') 
    ->icon('heroicon-o-chevron-right') // show custom icon

    // direct HTML content
    ->content(fn($record) => new HtmlString($record->name.'<br>'.$record->email))

    // or blade content
    ->content(fn($record) => view('filament.test.user-card', ['record' => $record]))

    // or livewire component
    ->content(fn($record) => new HtmlString(Blade::render('@livewire(\App\Filament\Widgets\Stats::class, ["lazy" => true])')))
,
```
