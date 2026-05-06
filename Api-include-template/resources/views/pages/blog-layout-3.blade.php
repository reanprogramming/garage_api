@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Blog - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <x-base.box class="mt-8 p-5 xl:w-3/5">
        <!-- BEGIN: Blog Layout -->
        <h2 class="text-xl font-medium sm:text-2xl">
            {{ $fakers[0]['news'][0]['title'] }}
        </h2>
        <div class="mt-2 text-xs opacity-70 sm:text-sm">
            {{ $fakers[0]['dates'][0] }} <span class="mx-1">•</span>
            <a
                class="text-primary"
                href=""
            >
                {{ $fakers[0]['products'][0]['category'] }}
            </a>
            <span class="mx-1">•</span> 7 Min read
        </div>
        <div class="mt-6">
            <div class="image-fit h-[250px]">
                <img
                    class="rounded-xl"
                    src="{{ Vite::asset($fakers[0]['images'][0]) }}"
                    alt="Midone - Tailwind Admin Dashboard Template"
                />
            </div>
        </div>
        <div class="relative flex items-center gap-3 pb-6 pt-16 sm:pt-6">
            <x-base.tooltip
                class="bg-foreground/5 flex size-8 flex-none items-center justify-center rounded-full border sm:size-10"
                href=""
                as="a"
                content="Bookmark"
            >
                <x-base.lucide
                    class="size-3"
                    icon="Bookmark"
                />
            </x-base.tooltip>
            <div class="flex">
                <x-base.avatar
                    class="bg-background size-8 sm:size-10"
                    src="{{ Vite::asset($fakers[0]['photos'][0]) }}"
                    title="{{ 'Uploaded at ' . $fakers[0]['dates'][0] }}"
                />
                <x-base.avatar
                    class="bg-background -ms-4 size-8 sm:size-10"
                    src="{{ Vite::asset($fakers[0]['photos'][1]) }}"
                    title="{{ 'Uploaded at ' . $fakers[0]['dates'][1] }}"
                />
                <x-base.avatar
                    class="bg-background -ms-4 size-8 sm:size-10"
                    src="{{ Vite::asset($fakers[0]['photos'][2]) }}"
                    title="{{ 'Uploaded at ' . $fakers[0]['dates'][2] }}"
                />
            </div>
            <div class="absolute -mt-12 flex w-full gap-3 text-xs opacity-70 sm:relative sm:mt-0 sm:text-sm">
                <div class="mr-1">
                    Comments:
                    <span class="font-medium">{{ $fakers[0]['totals'][0] }}</span>
                </div>
                <div class="mr-1">
                    Views:
                    <span class="font-medium">{{ $fakers[0]['totals'][1] }}k</span>
                </div>
                <div class="ml-auto">
                    Likes:
                    <span class="font-medium">{{ $fakers[0]['totals'][2] }}k</span>
                </div>
            </div>
            <x-base.tooltip
                class="bg-(--color)/10 border-(--color)/20 text-(--color) ml-auto flex size-8 flex-none items-center justify-center rounded-full border [--color:var(--color-primary)] sm:size-10"
                href=""
                as="a"
                content="Share"
            >
                <x-base.lucide
                    class="size-3"
                    icon="Share"
                />
            </x-base.tooltip>
            <x-base.tooltip
                class="bg-primary -ml-1 flex size-8 flex-none items-center justify-center rounded-full text-white sm:size-10"
                href=""
                as="a"
                content="Download PDF"
            >
                <x-base.lucide
                    class="size-3"
                    icon="Share"
                />
            </x-base.tooltip>
        </div>
        <div class="text-justify indent-8">
            <p class="mb-5">{{ $fakers[1]['news'][0]['content'] }}</p>
            <p class="mb-5">{{ $fakers[2]['news'][0]['content'] }}</p>
            <p>{{ $fakers[3]['news'][0]['content'] }}</p>
        </div>
        <div class="mt-5 flex flex-col items-center border-t pt-5 text-xs sm:flex-row sm:text-sm">
            <div class="flex items-center">
                <x-base.avatar
                    class="size-12"
                    src="{{ Vite::asset($fakers[0]['photos'][0]) }}"
                />
                <div class="ml-3.5 mr-auto">
                    <a
                        class="font-medium"
                        href=""
                    >
                        {{ $fakers[0]['users'][0]['name'] }}
                    </a>
                    <div class="mt-0.5 text-xs opacity-70">Senior Frontend Engineer</div>
                </div>
            </div>
            <div class="mt-5 flex items-center gap-2 sm:ml-auto sm:mt-0">
                <div class="mr-1">Share this post:</div>
                <x-base.tooltip
                    class="flex size-8 items-center justify-center rounded-full border sm:size-10"
                    href=""
                    as="a"
                    content="Facebook"
                >
                    <x-base.lucide
                        class="size-3 fill-current opacity-70"
                        icon="Facebook"
                    />
                </x-base.tooltip>
                <x-base.tooltip
                    class="flex size-8 items-center justify-center rounded-full border sm:size-10"
                    href=""
                    as="a"
                    content="Twitter"
                >
                    <x-base.lucide
                        class="size-3 fill-current opacity-70"
                        icon="Twitter"
                    />
                </x-base.tooltip>
                <x-base.tooltip
                    class="flex size-8 items-center justify-center rounded-full border sm:size-10"
                    href=""
                    as="a"
                    content="Linked In"
                >
                    <x-base.lucide
                        class="size-3 fill-current opacity-70"
                        icon="Linkedin"
                    />
                </x-base.tooltip>
            </div>
        </div>
        <!-- END: Blog Layout -->
        <!-- BEGIN: Comments -->
        <div class="mt-5 border-t pt-5">
            <div class="text-base font-medium">2 Responses</div>
            <div class="h-18 relative mt-5">
                <x-base.lucide
                    class="absolute inset-y-0 left-0 my-auto ml-6 size-5 opacity-50"
                    icon="MessageCircle"
                />
                <x-base.textarea
                    class="bg-foreground/5 h-full min-h-0 rounded-xl pl-16"
                    placeholder="Post a comment..."
                ></x-base.textarea>
            </div>
        </div>
        <div class="mt-5 pb-8">
            <div class="pt-5">
                <div class="flex">
                    <x-base.avatar
                        class="size-10 sm:size-12"
                        src="{{ Vite::asset($fakers[0]['photos'][1]) }}"
                    />
                    <div class="ml-3.5 flex-1">
                        <div class="flex items-center">
                            <a
                                class="font-medium"
                                href=""
                            >
                                {{ $fakers[0]['users'][1]['name'] }}
                            </a>
                            <a
                                class="ml-auto text-xs opacity-70"
                                href=""
                            >
                                Reply
                            </a>
                        </div>
                        <div class="mt-0.5 text-xs opacity-70">
                            {{ $fakers[0]['formatted_times'][1] }}
                        </div>
                        <div class="mt-2">{{ $fakers[0]['news'][1]['short_content'] }}</div>
                    </div>
                </div>
            </div>
            <div class="mt-5 border-t pt-5">
                <div class="flex">
                    <x-base.avatar
                        class="size-10 sm:size-12"
                        src="{{ Vite::asset($fakers[0]['photos'][2]) }}"
                    />
                    <div class="ml-3.5 flex-1">
                        <div class="flex items-center">
                            <a
                                class="font-medium"
                                href=""
                            >
                                {{ $fakers[0]['users'][2]['name'] }}
                            </a>
                            <a
                                class="ml-auto text-xs opacity-70"
                                href=""
                            >
                                Reply
                            </a>
                        </div>
                        <div class="mt-0.5 text-xs opacity-70">
                            {{ $fakers[0]['formatted_times'][2] }}
                        </div>
                        <div class="mt-2">{{ $fakers[0]['news'][2]['short_content'] }}</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Comments -->
    </x-base.box>
@endsection
