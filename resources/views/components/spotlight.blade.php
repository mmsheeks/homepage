<section class="spotlight">
    <span class="image"><img src="{{ $image }}" alt="" /></span>
    <div class="content">
        <header>
            <h3>
                {{ $title }}<br />
                <small>{{ $subtitle }}</small>
            </h3>
        </header>
        <p>{{ $detail }}</p>
        <p><strong>Primary Skills</strong></p>
        <ul class="alt">
            @foreach ($skills as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul>
        @if (!empty($href))
            <footer>
                <ul class="actions">
                    <li><a href="{{ $href }}" class="button" target="_blank">{{ $linkText }}</a></li>
                </ul>
            </footer>
        @endif
    </div>
</section>
