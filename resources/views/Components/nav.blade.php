@props(['active' => false, 'href' => '/'])

<a href="{{ $href }}" class="aNav {{ $active ? 'active' : '' }}">{{ $slot }}</a>