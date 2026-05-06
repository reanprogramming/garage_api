@props(['as' => 'div'])

@php
    $voidElements = [
        'area',
        'base',
        'br',
        'col',
        'embed',
        'hr',
        'img',
        'input',
        'link',
        'meta',
        'source',
        'track',
        'wbr',
    ];
@endphp

@if (Str::startsWith($as, 'x-'))
    {{-- Render dynamic Blade component --}}
    <x-dynamic-component
        :component="Str::substr($as, 2)"
        {{ $attributes }}
    >
        {{ $slot }}
    </x-dynamic-component>
@elseif(in_array($as, $voidElements))
    {{-- Render void element --}}
    <{{ $as }} {{ $attributes }} />
@else
    {{-- Render non-void element --}}
    <{{ $as }} {{ $attributes }}>
        {{ $slot }}
        </{{ $as }}>
@endif
