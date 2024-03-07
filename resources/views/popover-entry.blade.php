@php
    $getState = $getState();
    $getTrigger = $getTrigger();
    $getPlacement = $getPlacement();
    $getOffset = $getOffset();
    $getPopOverMaxWidth = $getPopOverMaxWidth();
    $getIcon = $getIcon($getState);
    $getContent = $getContent();
@endphp
<div
    class="fi-popover grid w-full gap-y-1 px-3 py-4"
    wire:key="{{ $this->getId() }}.entry.record.{{ $getName() }}"
    x-data
    @if($getTrigger === 'hover')
        @pointerleave="$refs.panel.close"
    @endif
>
    <div
        class="relative w-full fi-popover-trigger cursor-pointer flex items-center gap-2"
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
         x-transition:enter-start="opacity-0"
         x-transition:leave-end="opacity-0"
         x-cloak
         x-ref="panel"
         x-float.placement.{{ $getPlacement }}.flip.teleport.offset="{ offset: {{ $getOffset }} }"
    >
        {{ $getContent }}
    </div>
</div>
