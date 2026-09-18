{{-- Sticky top bar: identity on the left, section anchors on the right. --}}
<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="#top">
            {{-- GitHub avatar over the monogram fallback: if the image ever fails to
     load, it removes itself and the initials underneath take over. --}}
<span class="brand-mark" aria-hidden="true">
    {{ $portfolio['identity']['initials'] }}
    <img
        class="brand-avatar"
        src="{{ asset($portfolio['identity']['avatar']) }}"
        alt=""
        width="80"
        height="80"
        loading="eager"
        decoding="async"
        onerror="this.remove()"
    >
</span>
            <span class="brand-text">
                <strong>{{ $portfolio['identity']['name'] }}</strong>
                <small>{{ $portfolio['identity']['role'] }}</small>
            </span>
        </a>

        <nav class="site-nav" aria-label="Sections">
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#work">Work</a></li>
                <li><a href="#testimonials">Notes</a></li>
            </ul>
        </nav>

        <a class="button button-small" href="#contact">Get in touch</a>
    </div>
</header>