<section id="skills" class="section">
    <div class="container">
        <header class="section-head reveal">
            <p class="eyebrow">Skills</p>
            <h2>{{ $portfolio['skills']['heading'] }}</h2>
            <p class="lead">{{ $portfolio['skills']['lead'] }}</p>
        </header>

        <ul class="card-grid skill-grid">
            @foreach ($portfolio['skills']['items'] as $skill)
                <li class="card skill-card reveal">
                    <span class="icon-badge">
                        @include('partials.icon', ['name' => $skill['icon']])
                    </span>
                    <h3>{{ $skill['title'] }}</h3>
                    <p>{{ $skill['text'] }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</section>