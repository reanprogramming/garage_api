@props(['variant' => null, 'type' => null, 'src' => null])

<div {{ $attributes->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}>
    <div @class([
        'relative block bg-center bg-no-repeat bg-contain',
        'before:content-[\'\'] before:pt-[100%] before:w-full before:block',
        'bg-empty-directory' => $variant == 'empty-directory',
        'bg-directory' => $variant == 'directory',
        'bg-file' => $variant == 'file',
    ])>
        @if ($variant == 'file')
            <div class="absolute bottom-0 left-0 right-0 top-0 m-auto flex items-center justify-center text-white">
                {{ $type }}
            </div>
        @elseif ($variant == 'image')
            <div class="image-fit absolute left-0 top-0 size-full">
                <img
                    class="rounded-lg"
                    src="{{ $src }}"
                    alt="Midone - Admin Dashboard Template"
                >
            </div>
        @endif
    </div>
</div>
