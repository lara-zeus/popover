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
        x-data
        @if($getTrigger === 'hover')
            @pointerleave="$refs.panel.close"
        @endif
    >
        <div
            class="text-sm relative w-full fi-popover-trigger cursor-pointer flex items-center gap-2"
            @if($getTrigger === 'hover')
                @pointerenter="$refs.panel.open"
            @else
                @click="$refs.panel.toggle"
            @endif
        >
            {{ $getState }}
        </div>

        <div class="z-50 fi-popover-content w-[{{ $getPopOverMaxWidth }}px] ring-1 ring-gray-950/5 dark:ring-white/10 rounded-lg shadow-lg bg-white dark:bg-gray-800"
             x-transition:enter-start="opacity-0"
             x-transition:leave-end="opacity-0"
             x-cloak
             x-ref="panel"
             x-float.placement.{{ $getPlacement }}.flip.teleport.offset="{ offset: {{ $getOffset }} }"
        >
            {{ $getContent }}
        </div>
    </div>
</x-dynamic-component>
