@props(['as' => 'a', 'active' => null])

<li class="flex-1 sm:flex-initial">
    <x-base.button
        :as="$as"
        {{ $attributes->twMerge([$active ? 'box rounded-xl border-inherit' : 'border-transparent bg-transparent']) }}
    >
        {{ $slot }}
    </x-base.button>
</li>
