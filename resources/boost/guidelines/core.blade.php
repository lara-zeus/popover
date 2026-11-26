# Lara Zeus Popover (`lara-zeus/popover`)

FilamentPHP components for displaying custom Alpine `x-float` popovers in tables, infolists, and forms.

## Key Classes & Traits
- **Table Column**: `LaraZeus\Popover\Tables\PopoverColumn` (extends `Filament\Tables\Columns\Column`)
- **Infolist Entry**: `LaraZeus\Popover\Infolists\PopoverEntry` (extends `Filament\Infolists\Components\Entry`)
- **Form Component**: `LaraZeus\Popover\Form\PopoverForm` (extends `Filament\Forms\Components\TextInput`; note singular `Form` namespace)
- **Shared Concern**: `LaraZeus\Popover\Concerns\HasPopover`
- **Service Provider**: `LaraZeus\Popover\PopoverServiceProvider` (`$name = 'zeus-popover'`)

## Rules & Anti-Patterns
- **No Filament Panel Plugin**: Do not register a panel plugin; use `PopoverColumn`, `PopoverEntry`, and `PopoverForm` directly.
- **Namespace accuracy**: `PopoverForm` lives under `LaraZeus\Popover\Form\PopoverForm` (singular `Form`), not `Forms`.
- **`popOverMaxWidth()` expects a pixel number string**: Defaults to `'300'` and renders `w-[{value}px]` (do not include `px`).
- **Table row clicks**: `PopoverColumn` calls `$this->disabledClick()` in `setUp()` so clicking the trigger does not navigate away on row click.
- **Theme CSS**: Add `@source '../../../../vendor/lara-zeus/popover/resources/views/**/*.blade.php';` to your Filament custom theme CSS if popover styling is missing.
