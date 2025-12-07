@props([
    'id' => 'modal',
    'title' => '',
    'size' => 'md',
    'showClose' => true
])

@php
    $sizeClass = match($size) {
        'sm' => 'max-w-sm',
        'lg' => 'max-w-3xl',
        default => 'max-w-xl',
    };
@endphp

<!-- Overlay -->
<div id="{{ $id }}" {{ $attributes->merge(['class' => 'fixed inset-0 z-50 flex items-center justify-center p-4']) }} style="display:none;" role="dialog" aria-modal="true">
    <div class="absolute inset-0 bg-black/50" data-modal-backdrop></div>

    <!-- Modal panel -->
    <div class="relative bg-white rounded-lg shadow-lg w-full {{ $sizeClass }}">
        <!-- Header -->
        <div class="flex items-center justify-between px-4 py-3 border-b">
            <h3 class="text-lg font-semibold">{{ $title }}</h3>

            @if($showClose)
                <button type="button" data-modal-close aria-label="Close" class="text-gray-600 hover:text-gray-900">
                    &times;
                </button>
            @endif
        </div>

        <!-- slot: header (optional) -->
        @if(isset($header))
            <div class="px-4 py-3 border-b">
                {{ $header }}
            </div>
        @endif

        <!-- Body (slot par défaut) -->
        <div class="p-4">
            {{ $slot }}
        </div>

        <!-- slot: footer (optional) -->
        @if(isset($footer))
            <div class="px-4 py-3 border-t flex justify-end gap-2">
                {{ $footer }}
            </div>
        @endif
    </div>
</div>

<script>
    document.addEventListener('click', function(e) {
        
        const open = e.target.closest('[data-modal-target]');
        if (open) {
            const id = open.getAttribute('data-modal-target');
            const modal = document.getElementById(id);
            if (modal) modal.style.display = 'flex';
        }

       
        if (e.target.closest('[data-modal-close]')) {
            const modal = e.target.closest('[id]');
            if (modal) modal.style.display = 'none';
            // if click on backdrop
            const backdrop = e.target.closest('[data-modal-backdrop]');
            if (backdrop) backdrop.closest('[id]').style.display = 'none';
        }

        if (e.target.matches('[data-modal-backdrop]')) {
            e.target.closest('[id]').style.display = 'none';
        }
    });
</script>
