@php
    $getState = $getState();
    $getTrigger = $getTrigger();
    $getPlacement = $getPlacement();
    $getOffset = $getOffset();
    $getPopOverMaxWidth = $getPopOverMaxWidth();
    $getIcon = $getIcon($getState);
    $descriptionAbove = $getDescriptionAbove();
    $descriptionBelow = $getDescriptionBelow();
    $canWrap = $canWrap();
    $getContent = $getContent();
@endphp
<div
    wire:key="{{ $this->getId() }}.table.record.{{ $recordKey }}.column.{{ $getName() }}"
    x-data="{ open: false }"

    @if($getTrigger === 'hover')
        @pointerleave="clearTimeout($time); open = false"
    @else
        @click.away="open = false"
    @endif

    class="fi-popover fi-ta-text grid w-full gap-y-1 px-3 py-4"
>

    @if (filled($descriptionAbove))
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
        class="relative w-full fi-popover-trigger cursor-pointer flex items-center gap-2"
        x-ref="button"
        @if($getTrigger === 'hover')
            @pointerenter="$time = setTimeout(() => { open = true }, 200)"
        @else
            @click="open = ! open"
        @endif
    >
        {{ $getState }}

        @if($getIcon)
            <x-filament::icon
                    :icon="$getIcon"
                    class="h-5 w-5 text-gray-500 dark:text-gray-400"
            />
        @endif
    </div>

    <div class="z-50 fi-popover-content w-[{{ $getPopOverMaxWidth }}px] border border-gray-500 shadow-lg bg-white dark:bg-gray-800"
         x-cloak x-trap="open"
         x-show="open"
         x-anchor.{{ $getPlacement }}.offset.{{ $getOffset }}="$refs.button"
    >
        {{ $getContent }}
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
