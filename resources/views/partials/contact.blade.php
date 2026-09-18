<section id="contact" class="section section-tinted">
    <div class="container contact-grid">
        <div class="reveal">
            <header class="section-head">
                <p class="eyebrow">Contact</p>
                <h2>{{ $portfolio['contact']['heading'] }}</h2>
                <p class="lead">{{ $portfolio['contact']['lead'] }}</p>
            </header>

            <ul class="channel-list">
                @foreach ($portfolio['contact']['channels'] as $channel)
                    <li>
                        <span class="channel-label">{{ $channel['label'] }}</span>
                        <a href="{{ $channel['href'] }}">{{ $channel['value'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        {{--
            No backend by design: the form posts via mailto when JS is off, and
            resources/js/app.js swaps in inline success feedback when it is on.
        --}}
        <form
            class="card contact-form reveal"
            method="post"
            action="{{ $portfolio['contact']['form']['action'] }}"
            enctype="text/plain"
            novalidate
            data-contact-form
            data-success-message="{{ $portfolio['contact']['form']['success'] }}"
        >
            <p class="form-status" role="status" aria-live="polite" data-form-status></p>

            @foreach ($portfolio['contact']['form']['fields'] as $field)
                <div class="field">
                    <label for="contact-{{ $field['name'] }}">{{ $field['label'] }}</label>
                    <input
                        id="contact-{{ $field['name'] }}"
                        name="{{ $field['name'] }}"
                        type="{{ $field['type'] }}"
                        autocomplete="{{ $field['autocomplete'] }}"
                        placeholder="{{ $field['placeholder'] }}"
                        required
                    >
                    <p class="field-error" data-field-error="{{ $field['name'] }}" hidden></p>
                </div>
            @endforeach

            <div class="field">
                <label for="contact-message">{{ $portfolio['contact']['form']['message']['label'] }}</label>
                <textarea
                    id="contact-message"
                    name="{{ $portfolio['contact']['form']['message']['name'] }}"
                    rows="5"
                    placeholder="{{ $portfolio['contact']['form']['message']['placeholder'] }}"
                    required
                ></textarea>
                <p class="field-error" data-field-error="message" hidden></p>
            </div>

            <button class="button" type="submit">
                {{ $portfolio['contact']['form']['submit'] }}
                @include('partials.icon', ['name' => 'send'])
            </button>
        </form>
    </div>
</section>