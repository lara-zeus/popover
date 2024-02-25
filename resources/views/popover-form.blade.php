@php
    $getState = $getState();
    $getTrigger = $getTrigger();
    $getPlacement = $getPlacement();
    $getOffset = $getOffset();
    $getPopOverMaxWidth = $getPopOverMaxWidth();
    $getContent = $getContent();
@endphp
<x-dynamic-component
    :component="$getFieldWrapperView()"
    :has-inline-label="$hasInlineLabel()"
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :hint-actions="$getHintActions()"
    :hint-color="$getHintColor()"
    :hint-icon="$getHintIcon()"
    :hint-icon-tooltip="$getHintIconTooltip()"
    :state-path="$getStatePath()"
>
    <div
        x-data="{ open: false }"
        @if($getTrigger === 'hover')
            @pointerleave="clearTimeout($time); open = false"
        @else
            @click.away="open = false"
        @endif
    >
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
        </div>

        <div class="z-50 fi-popover-content w-[{{ $getPopOverMaxWidth }}px] border border-gray-100 rounded-lg shadow-lg bg-white dark:bg-gray-800"
             x-cloak x-trap="open"
             x-show="open"
             x-anchor.{{ $getPlacement }}.offset.{{ $getOffset }}="$refs.button"
        >
            {{ $getContent }}
        </div>
    </div>
</x-dynamic-component>