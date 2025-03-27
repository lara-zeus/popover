@props([
    'id'=>null,
    'key'=>null,
    'name'=>null,
    'trigger'=>'click',
    'descriptionAbove'=>false,
    'descriptionBelow'=>false,
    'canWrap'=>false,
    'color'=>'gray',
    'icon'=>null,
    'maxWidth'=>'300',
    'placement'=>'top',
    'offset'=> 0,
])
<div
    x-data
    wire:key="{{ $id }}.table.record.{{ $key }}.column.{{ $name }}"
    @if($trigger === 'hover')
        @pointerleave="$refs.panel.close"
    @endif
    class="fi-popover fi-ta-text grid w-full gap-y-1 px-3 py-4"
>
    @if ($descriptionAbove)
        <p
            @class([
                'text-sm text-gray-500 dark:text-gray-400',
                'whitespace-normal' => $canWrap,
            ])
        >
            {{ $descriptionAbove }}
        </p>
    @endif

    <div
        @style([
            \Filament\Support\get_color_css_variables(
                $color,
                shades: [400, 600],
                alias: 'tables::columns.text-column.item.label',
            ) => ! in_array($color, [null, 'gray']),
        ])
        @class([
            'text-sm relative w-full fi-popover-trigger cursor-pointer flex items-center gap-2',
            match ($color) {
                null => 'text-gray-950 dark:text-white',
                'gray' => 'text-gray-500 dark:text-gray-400',
                default => 'text-custom-600 dark:text-custom-400',
            },
        ])
        @if($trigger === 'hover')
            @pointerenter="$refs.panel.open"
        @else
            @click="$refs.panel.toggle"
        @endif
    >
        {{ $triggerContent }}

        @if($icon !== null)
            <x-filament::icon
                :icon="$icon"
                class="h-4 w-4 text-gray-500 dark:text-gray-400"
            />
        @endif
    </div>

    <div class="z-50 fi-popover-content w-[{{ $maxWidth }}px] ring-1 ring-gray-950/5 dark:ring-white/10 rounded-lg shadow-lg bg-white dark:bg-gray-800 transition"
         x-transition:enter-start="opacity-0"
         x-transition:leave-end="opacity-0"
         x-cloak
         x-ref="panel"
         x-float.placement.{{ $placement }}.flip.teleport.offset="{ offset: {{ $offset }} }"
    >
        {{ $popoverContent }}
    </div>

    @if (filled($descriptionBelow))
        <p
            @class([
                'text-sm text-gray-500 dark:text-gray-400',
                'whitespace-normal' => $canWrap,
            ])
        >
            {{ $descriptionBelow }}
        </p>
    @endif
</div>
