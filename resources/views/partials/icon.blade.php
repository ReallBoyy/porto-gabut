{{--
    Inline SVG set. Kept in one place so sections stay readable and no icon
    library has to be downloaded. Update the paths here to change an icon.
--}}
@php
    $isBrand = in_array($name, ['github', 'linkedin'], true);

    $paths = [
        'server' => '<path d="M4 5.5A1.5 1.5 0 0 1 5.5 4h13A1.5 1.5 0 0 1 20 5.5v3A1.5 1.5 0 0 1 18.5 10h-13A1.5 1.5 0 0 1 4 8.5z"/><path d="M4 15.5A1.5 1.5 0 0 1 5.5 14h13a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 4 18.5z"/><path d="M8 7h.01M8 17h.01"/>',
        'layout' => '<rect x="3.5" y="4" width="17" height="16" rx="2.5"/><path d="M3.5 9.5h17M9.5 9.5V20"/>',
        'spark' => '<path d="M11 3.5l1.8 4.7 4.7 1.8-4.7 1.8L11 16.5 9.2 11.8 4.5 10l4.7-1.8z"/><path d="M18 15.5l.7 1.8 1.8.7-1.8.7-.7 1.8-.7-1.8-1.8-.7 1.8-.7z"/>',
        'database' => '<ellipse cx="12" cy="6" rx="7" ry="2.8"/><path d="M5 6v12c0 1.5 3.1 2.8 7 2.8s7-1.3 7-2.8V6"/><path d="M5 12c0 1.5 3.1 2.8 7 2.8s7-1.3 7-2.8"/>',
        'wrench' => '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.8-3.8a6 6 0 0 1-7.9 7.9l-6.9 6.9a2.1 2.1 0 0 1-3-3l6.9-6.9a6 6 0 0 1 7.9-7.9z"/>',
        'mail' => '<rect x="3" y="5.5" width="18" height="13" rx="2.5"/><path d="M4.2 7.7l6.9 5a1.6 1.6 0 0 0 1.8 0l6.9-5"/>',
        'send' => '<path d="M4.5 12l15-7-7 15-1.8-6.2z"/><path d="M10.7 13.8L19.5 5"/>',
        'arrow-up' => '<path d="M12 19V5"/><path d="M6 11l6-6 6 6"/>',
        'arrow-right' => '<path d="M5 12h13"/><path d="M13 6l6 6-6 6"/>',
        'arrow-up-right' => '<path d="M7 17L17 7"/><path d="M8.5 7H17v8.5"/>',
        'github' => '<path d="M12 .3a12 12 0 0 0-3.8 23.4c.6.1.8-.3.8-.6v-2c-3.3.7-4-1.6-4-1.6-.6-1.4-1.4-1.8-1.4-1.8-1.1-.7.1-.7.1-.7 1.2.1 1.8 1.2 1.8 1.2 1.1 1.9 2.8 1.3 3.5 1 .1-.8.4-1.3.8-1.6-2.7-.3-5.5-1.3-5.5-5.9 0-1.3.5-2.4 1.2-3.2-.1-.3-.5-1.5.1-3.2 0 0 1-.3 3.3 1.2a11.5 11.5 0 0 1 6 0C18.8 4.7 19.8 5 19.8 5c.6 1.7.2 2.9.1 3.2a4.6 4.6 0 0 1 1.2 3.2c0 4.6-2.8 5.6-5.5 5.9.4.4.8 1.1.8 2.2v3.3c0 .3.2.7.8.6A12 12 0 0 0 12 .3"/>',
        'linkedin' => '<path d="M20.4 20.5h-3.6v-5.6c0-1.3 0-3-1.8-3s-2.1 1.4-2.1 2.9v5.7H9.3V9h3.4v1.6h.1c.5-.9 1.6-1.9 3.3-1.9 3.6 0 4.3 2.4 4.3 5.5zM5.3 7.4a2.1 2.1 0 1 1 0-4.2 2.1 2.1 0 0 1 0 4.2m1.8 13.1H3.5V9h3.6zM22.2 0H1.8C.8 0 0 .8 0 1.7v20.6c0 1 .8 1.7 1.8 1.7h20.4c1 0 1.8-.8 1.8-1.7V1.7c0-1-.8-1.7-1.8-1.7"/>',
    ];
@endphp

<svg
    class="icon"
    viewBox="0 0 24 24"
    aria-hidden="true"
    focusable="false"
    @if ($isBrand)
        fill="currentColor"
    @else
        fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"
    @endif
>{!! $paths[$name] ?? '' !!}</svg>