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
        @pointerleave="$refs.panel.close"
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
            @pointerenter="$refs.panel.open"
        @else
            @click="$refs.panel.toggle"
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

    <div class="z-50 fi-popover-content w-[{{ $getPopOverMaxWidth }}px] border border-gray-100 rounded-lg shadow-lg bg-white dark:bg-gray-800 transition"
         x-cloak
         x-ref="panel"
         x-transition:enter-start="opacity-0"
         x-transition:leave-end="opacity-0"
         x-float.placement.{{ $getPlacement }}.flip.teleport.offset="{ offset: {{ $getOffset }} }"
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
