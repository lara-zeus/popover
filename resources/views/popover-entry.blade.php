<div x-data class="fi-popover">
    @php
        $getState = $getState();
        $getTrigger = $getTrigger();
        $getPlacement = $getPlacement();
        $getOffset = $getOffset();
        $getPopOverMaxWidth = $getPopOverMaxWidth();
        $getIcon = $getIcon($getState);
    @endphp
    <template x-ref="template">
        <div class="fi-popover-content">
            {{ $getContent() }}
        </div>
    </template>

    <button
        class="w-full fi-popover-trigger cursor-pointer flex items-center gap-2"
        x-tooltip="{
            trigger: '{{ $getTrigger }}',
            placement: '{{ $getPlacement }}',
            offset: @js($getOffset),
            maxWidth: '{{ $getPopOverMaxWidth }}',

            content: () => $refs.template.innerHTML,
            appendTo: $root,
            allowHTML: true,
            interactive: true,
            theme: $store.theme,
        }">

        {{ $getState }}

        @if($getIcon)
            <x-filament::icon
                :icon="$getIcon"
                class="h-5 w-5 text-gray-500 dark:text-gray-400"
            />
        @endif
    </button>
</div>
