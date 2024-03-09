# Changelog

All notable changes to `Popover` will be documented in this file

## 1.1.4 - 2024-03-09

### What's Changed

* add support for format state by @atmonshi in https://github.com/lara-zeus/popover/pull/17

**Full Changelog**: https://github.com/lara-zeus/popover/compare/1.1.3...1.1.4

## 1.1.3 - 2024-03-07

### What's Changed

* Bump ramsey/composer-install from 2 to 3 by @dependabot in https://github.com/lara-zeus/popover/pull/13
* fix popover in table by @atmonshi in https://github.com/lara-zeus/popover/pull/15

**Full Changelog**: https://github.com/lara-zeus/popover/compare/1.1.2...1.1.3

## 1.1.2 - 2024-02-25

### What's Changed

* add a form component for popover as a placeholder by @atmonshi in https://github.com/lara-zeus/popover/pull/11

**Full Changelog**: https://github.com/lara-zeus/popover/compare/1.1.1...1.1.2

## 1.1.1 - 2024-02-24

### What's Changed

* add support for hover trigger by @atmonshi in https://github.com/lara-zeus/popover/pull/10

**Full Changelog**: https://github.com/lara-zeus/popover/compare/1.1.0...1.1.1

## 1.1.0 - 2024-02-09

### What's Changed

* refactor to alpine anchor by @atmonshi in https://github.com/lara-zeus/popover/pull/7
  using alpine `x-anchor` instead of tooltip js

if you're using it with livewire component, you must add a unieqe key as the example:

in your form:
please notice the `type` is our key per column

```php
PopoverColumn::make('name')
    //.... other config
    ->content(fn ($record) => view('filament.user-card', ['record' => $record, 'type' => 'name'])),

PopoverColumn::make('email')
    //.... other config
    ->content(fn ($record) => view('filament.user-card', ['record' => $record, 'type' => 'email'])),





```
now in your LW view:

```html
<livewire:user-card :$record :key="$record->id.'-'.$type"/>





```
**Full Changelog**: https://github.com/lara-zeus/popover/compare/1.0.4...1.1.0

## 1.0.4 - 2024-01-19

### What's Changed

* hide tooltip container if the content is null by @atmonshi in https://github.com/lara-zeus/popover/pull/8

**Full Changelog**: https://github.com/lara-zeus/popover/compare/1.0.3...1.0.4

## 1.0.3 - 2024-01-10

### What's Changed

* set separate views for column and entry by @atmonshi in https://github.com/lara-zeus/popover/pull/4

**Full Changelog**: https://github.com/lara-zeus/popover/compare/1.0.2...1.0.3

## 1.0.2 - 2024-01-09

### What's Changed

* add description by @a7medKhalid in https://github.com/lara-zeus/popover/pull/3

### New Contributors

* @a7medKhalid made their first contribution in https://github.com/lara-zeus/popover/pull/3

**Full Changelog**: https://github.com/lara-zeus/popover/compare/1.0.1...1.0.2

## 1.0.0 - 2024-01-01

### What's Changed

- initial release
