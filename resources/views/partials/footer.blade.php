<footer class="site-footer">
    <div class="container footer-inner">
        <div>
            <p class="footer-name">{{ $portfolio['identity']['name'] }} — {{ $portfolio['identity']['role'] }}</p>
            <p class="footer-note">{{ $portfolio['footer']['note'] }}</p>
            <p class="footer-copy">&copy; {{ now()->year }} {{ $portfolio['identity']['name'] }}. All rights reserved.</p>
        </div>

        <div class="footer-side">
            <ul class="social-list">
                @foreach ($portfolio['footer']['socials'] as $social)
                    <li>
                        <a href="{{ $social['href'] }}" aria-label="{{ $social['label'] }}" title="{{ $social['label'] }}">
                            @include('partials.icon', ['name' => $social['icon']])
                        </a>
                    </li>
                @endforeach
            </ul>

            <a class="back-to-top" href="#top">Back to top</a>
        </div>
    </div>
</footer>