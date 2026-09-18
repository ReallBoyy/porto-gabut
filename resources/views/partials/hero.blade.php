<section id="top" class="section hero">
    <div class="container hero-grid">
        <div class="hero-copy reveal">
            <p class="eyebrow">{{ $portfolio['hero']['eyebrow'] }}</p>

            <h1>
                {{ $portfolio['hero']['headline'] }}
                <span class="headline-accent">{{ $portfolio['hero']['headline_accent'] }}</span>
            </h1>

            <p class="lead">{{ $portfolio['hero']['lead'] }}</p>

            <p class="hero-cta">
                <a class="button" href="{{ $portfolio['hero']['primary_cta']['href'] }}">
                    {{ $portfolio['hero']['primary_cta']['label'] }}
                    @include('partials.icon', ['name' => 'arrow-right'])
                </a>
                <a class="button button-ghost" href="{{ $portfolio['hero']['secondary_cta']['href'] }}">
                    {{ $portfolio['hero']['secondary_cta']['label'] }}
                </a>
            </p>

            <dl class="hero-facts">
                @foreach ($portfolio['hero']['facts'] as $fact)
                    <div>
                        <dt>{{ $fact['label'] }}</dt>
                        <dd>{{ $fact['value'] }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>

        <figure class="hero-figure reveal">
            <div class="hero-terminal" role="img" aria-label="{{ $portfolio['hero']['terminal']['alt'] }}">
                <div class="terminal-bar">
                    <span class="terminal-dot dot-red"></span>
                    <span class="terminal-dot dot-yellow"></span>
                    <span class="terminal-dot dot-green"></span>
                    <span class="terminal-title">{{ $portfolio['hero']['terminal']['title'] }}</span>
                </div>
                <div class="terminal-body" aria-hidden="true">
                    <p><span class="t-prompt">➜</span> <span class="t-cmd">npm run dev</span></p>
                    <p><span class="t-ok">✔</span> VITE ready in 42 ms</p>
                    <p><span class="t-path">➜ Local:</span> http://localhost:5173/</p>
                    <p><span class="t-dim"># no vibes, just deploys</span></p>
                    <p><span class="t-prompt">➜</span> <span class="t-cmd">git commit -m "ship it"</span></p>
                    <p><span class="t-ok">✔</span> main · deployed to production</p>
                    <p class="t-line">
                        <span class="t-prompt">➜</span> <span class="t-cursor"></span>
                    </p>
                </div>
            </div>
            <figcaption>{{ $portfolio['hero']['terminal']['caption'] }}</figcaption>
        </figure>
    </div>
</section>
