@props(['as' => 'button'])

<li
    role="presentation"
    {{ $attributes->twMerge('z-20 w-full') }}
>
    <x-base.dynamic-tag
        class="[&.active]:bg-background inline-flex w-full cursor-pointer items-center justify-center whitespace-nowrap rounded-lg px-3 py-1.5 font-medium [&.active]:shadow"
        type="button"
        role="tab"
        :as="$as"
    >{{ $slot }}</x-base.dynamic-tag>
</li>
