<section id="work" class="section section-tinted">
    <div class="container">
        <header class="section-head reveal">
            <p class="eyebrow">Portfolio</p>
            <h2>{{ $portfolio['work']['heading'] }}</h2>
            <p class="lead">{{ $portfolio['work']['lead'] }}</p>
        </header>

        <ul class="card-grid work-grid">
            @foreach ($portfolio['work']['projects'] as $project)
                <li class="reveal">
                    <article class="card work-card">
                        <a class="work-link" href="{{ $project['href'] }}">
                            <span class="visually-hidden">View {{ $project['name'] }}</span>
                        </a>

                        <div class="work-media">
                            <img
                                src="{{ asset($project['image']['src']) }}"
                                srcset="{{ $project['image']['srcset'] }}"
                                sizes="(min-width: 64rem) 32rem, (min-width: 48rem) 45vw, 90vw"
                                width="640"
                                height="480"
                                loading="lazy"
                                decoding="async"
                                alt="{{ $project['image']['alt'] }}"
                            >
                        </div>

                        <div class="work-body">
                            <p class="kicker">{{ $project['kicker'] }}</p>
                            <h3>
                                {{ $project['name'] }}
                                @include('partials.icon', ['name' => 'arrow-up-right'])
                            </h3>
                            <p>{{ $project['description'] }}</p>

                            <ul class="tag-list" aria-label="Stack used">
                                @foreach ($project['stack'] as $tag)
                                    <li>{{ $tag }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </article>
                </li>
            @endforeach
        </ul>
    </div>
</section>
