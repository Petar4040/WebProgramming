@props(['url' => '/', 'active' => false, 'icon' => null, 'mobile' => false])

@php
if ($mobile) {
    $classes = 'block px-4 py-2 hover:bg-blue-700';
} else {
    $classes = 'text-white hover:underline py-2';
}
@endphp

<a href="{{ url($url) }}" class="{{ $classes }}">
    @if($icon)
    <i class="fa fa-{{ $icon }} mr-1"></i>
    @endif
    {{ $slot }}
</a>
