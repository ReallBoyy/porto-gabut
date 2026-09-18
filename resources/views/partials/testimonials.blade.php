<section id="testimonials" class="section">
    <div class="container">
        <header class="section-head reveal">
            <p class="eyebrow">Notes</p>
            <h2>{{ $portfolio['testimonials']['heading'] }}</h2>
            <p class="lead">{{ $portfolio['testimonials']['lead'] }}</p>
        </header>

        <ul class="card-grid quote-grid">
            @foreach ($portfolio['testimonials']['items'] as $testimonial)
                <li class="reveal">
                    <figure class="card quote-card">
                        <blockquote>
                            <p>{{ $testimonial['quote'] }}</p>
                        </blockquote>
                        <figcaption>
                            <span class="quote-avatar" aria-hidden="true">
                                {{ $testimonial['initials'] ?? Illuminate\Support\Str::initials($testimonial['name']) }}
                            </span>
                            <span class="quote-attribution">
                                <strong>{{ $testimonial['name'] }}</strong>
                                <span>{{ $testimonial['role'] }}</span>
                            </span>
                        </figcaption>
                    </figure>
                </li>
            @endforeach
        </ul>
    </div>
</section>
