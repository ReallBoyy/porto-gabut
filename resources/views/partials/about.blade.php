<section id="about" class="section section-tinted">
    <div class="container narrow">
        <header class="section-head reveal">
            <p class="eyebrow">About</p>
            <h2>{{ $portfolio['about']['heading'] }}</h2>
        </header>

        <div class="prose reveal">
            @foreach ($portfolio['about']['paragraphs'] as $paragraph)
                <p>{{ $paragraph }}</p>
            @endforeach
        </div>

        <ul class="value-list reveal">
            @foreach ($portfolio['about']['values'] as $value)
                <li>
                    <h3>{{ $value['title'] }}</h3>
                    <p>{{ $value['text'] }}</p>
                </li>
            @endforeach
        </ul>

        <p class="currently reveal">
            <span class="currently-label">{{ $portfolio['about']['currently']['label'] }}</span>
            {{ $portfolio['about']['currently']['text'] }}
        </p>
    </div>
</section>