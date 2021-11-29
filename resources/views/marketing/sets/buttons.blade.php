<div class="mx-auto mt-2 space-x-1 space-y-1 max-w-prose sm:space-y-0">
    @foreach($buttons as $button)
        @if($button['target_blank'] === true)
        <a href="{{ $button['link'] }}" class="btn {{ $button['color'] }} {{ $button['size'] }}" target="_blank" rel="noopener">{{ $button['title'] }}</a>
        @else
        <a href="{{ $button['link'] }}" class="btn {{ $button['color'] }} {{ $button['size'] }}">{{ $button['title'] }}</a>
        @endif
    @endforeach
</div>
