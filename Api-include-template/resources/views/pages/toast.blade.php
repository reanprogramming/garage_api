@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Toast - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Toast</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Basic Toast -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Basic Toast</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex justify-center">
                                <x-base.toast config="{ triggerId: '#basic-toast' }">
                                    <div class="grid gap-1">
                                        <div class="font-semibold">Scheduled: Catch up</div>
                                        <div class="opacity-70">Friday, February 10, 2023 at 5:57 PM</div>
                                    </div>
                                </x-base.toast>
                                <x-base.button
                                    id="basic-toast"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    <x-base.lucide icon="Compass" />
                                    Show Toast
                                </x-base.button>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex justify-center">
                                    <x-base.toast config="{ triggerId: '#basic-toast' }">
                                        <div class="grid gap-1">
                                            <div class="font-semibold">Scheduled: Catch up</div>
                                            <div class="opacity-70">Friday, February 10, 2023 at 5:57 PM</div>
                                        </div>
                                    </x-base.toast>
                                    <x-base.button
                                        id="basic-toast"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="Compass" />
                                        Show Toast
                                    </x-base.button>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Basic Toast -->
            <!-- BEGIN: Success Toast -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Success Toast</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex justify-center">
                                <x-base.toast config="{ triggerId: '#success-toast' }">
                                    <div class="flex">
                                        <x-base.lucide
                                            class="ml-2 mr-5 mt-2 size-7 stroke-[.8] [--color:var(--color-success)]"
                                            icon="Compass"
                                        />
                                        <div class="grid gap-1">
                                            <div class="font-semibold">Message Saved!</div>
                                            <div class="opacity-70">The message will be sent in 5 minutes.</div>
                                        </div>
                                    </div>
                                </x-base.toast>
                                <x-base.button
                                    id="success-toast"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    <x-base.lucide icon="Compass" />
                                    Show Toast
                                </x-base.button>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex justify-center">
                                    <x-base.toast config="{ triggerId: '#success-toast' }">
                                        <div class="flex">
                                            <x-base.lucide
                                                class="ml-2 mr-5 mt-2 size-7 stroke-[.8] [--color:var(--color-success)]"
                                                icon="Compass"
                                            />
                                            <div class="grid gap-1">
                                                <div class="font-semibold">Message Saved!</div>
                                                <div class="opacity-70">The message will be sent in 5 minutes.</div>
                                            </div>
                                        </div>
                                    </x-base.toast>
                                    <x-base.button
                                        id="success-toast"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="Compass" />
                                        Show Toast
                                    </x-base.button>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Success Toast -->
            <!-- BEGIN: Custom Actions -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Custom Actions</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex justify-center">
                                <x-base.toast config="{ triggerId: '#custom-actions-toast', close: false }">
                                    <div class="flex">
                                        <x-base.lucide
                                            class="ml-2 mr-5 mt-2 size-7 stroke-[.8] [--color:var(--color-primary)]"
                                            icon="Compass"
                                        />
                                        <div class="grid gap-1">
                                            <div class="font-semibold">Storage Removed!</div>
                                            <div class="opacity-70">The server will restart in 30 seconds, don't make
                                                changes during the update process!</div>
                                            <div class="mt-0.5 flex gap-3 font-medium">
                                                <a
                                                    class="text-primary"
                                                    href=""
                                                >
                                                    Restart Now
                                                </a>
                                                <a
                                                    class="opacity-70"
                                                    href=""
                                                >Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </x-base.toast>
                                <x-base.button
                                    id="custom-actions-toast"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    <x-base.lucide icon="Compass" />
                                    Show Toast
                                </x-base.button>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex justify-center">
                                    <x-base.toast config="{ triggerId: '#custom-actions-toast', close: false }">
                                        <div class="flex">
                                            <x-base.lucide
                                                class="ml-2 mr-5 mt-2 size-7 stroke-[.8] [--color:var(--color-primary)]"
                                                icon="Compass"
                                            />
                                            <div class="grid gap-1">
                                                <div class="font-semibold">Storage Removed!</div>
                                                <div class="opacity-70">The server will restart in 30 seconds, don't make
                                                    changes during the update process!</div>
                                                <div class="mt-0.5 flex gap-3 font-medium">
                                                    <a
                                                        class="text-primary"
                                                        href=""
                                                    >
                                                        Restart Now
                                                    </a>
                                                    <a
                                                        class="opacity-70"
                                                        href=""
                                                    >Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </x-base.toast>
                                    <x-base.button
                                        id="custom-actions-toast"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="Compass" />
                                        Show Toast
                                    </x-base.button>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Custom Actions -->
        </div>
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Avatar Toast -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Avatar Toast</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex justify-center">
                                <x-base.toast config="{ triggerId: '#avatar-toast', close: false }">
                                    <div class="flex">
                                        <div class="ml-2 mr-5 mt-2">
                                            <x-base.avatar
                                                class="size-14 rounded-xl"
                                                src="{{ Vite::asset($fakers[0]['photos'][0]) }}"
                                            />
                                        </div>
                                        <div class="grid gap-1">
                                            <div class="font-semibold">{{ $fakers[0]['users'][0]['name'] }}</div>
                                            <div class="opacity-70">
                                                Heyy, good morning! Did you have breakfast yet? 😆
                                            </div>
                                            <div class="mt-0.5 flex gap-3 font-medium">
                                                <a
                                                    class="text-primary"
                                                    href=""
                                                >
                                                    Reply
                                                </a>
                                                <a
                                                    class="opacity-70"
                                                    href=""
                                                >Dismiss</a>
                                            </div>
                                        </div>
                                    </div>
                                </x-base.toast>
                                <x-base.button
                                    id="avatar-toast"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    <x-base.lucide icon="Compass" />
                                    Show Toast
                                </x-base.button>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex justify-center">
                                    <x-base.toast config="{ triggerId: '#avatar-toast', close: false }">
                                        <div class="flex">
                                            <div class="ml-2 mr-5 mt-2">
                                                <x-base.avatar
                                                    class="size-14 rounded-xl"
                                                    src="{{ Vite::asset($fakers[0]['photos'][0]) }}"
                                                />
                                            </div>
                                            <div class="grid gap-1">
                                                <div class="font-semibold">{{ $fakers[0]['users'][0]['name'] }}</div>
                                                <div class="opacity-70">
                                                    Heyy, good morning! Did you have breakfast yet? 😆
                                                </div>
                                                <div class="mt-0.5 flex gap-3 font-medium">
                                                    <a
                                                        class="text-primary"
                                                        href=""
                                                    >
                                                        Reply
                                                    </a>
                                                    <a
                                                        class="opacity-70"
                                                        href=""
                                                    >Dismiss</a>
                                                </div>
                                            </div>
                                        </div>
                                    </x-base.toast>
                                    <x-base.button
                                        id="avatar-toast"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="Compass" />
                                        Show Toast
                                    </x-base.button>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Avatar Toast -->
            <!-- BEGIN: Split Actions Toast -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Split Actions Toast</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex justify-center">
                                <x-base.toast config="{ triggerId: '#split-actions-toast', close: false }">
                                    <div class="mr-40 flex">
                                        <div>
                                            <x-base.lucide
                                                class="ml-2 mr-5 mt-2 size-7 stroke-[.8] [--color:var(--color-primary)]"
                                                icon="Compass"
                                            />
                                        </div>
                                        <div class="grid gap-1">
                                            <div class="font-semibold">Introducing new theme!</div>
                                            <div class="opacity-70">
                                                Release version 2.3.3
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-background absolute inset-y-0 right-0 z-10 my-px mr-px grid grid-flow-row divide-y overflow-hidden rounded-r-xl border-l">
                                        <a
                                            class="text-primary flex items-center justify-center px-5 font-medium"
                                            href=""
                                        >View Details</a>
                                        <a
                                            class="flex items-center justify-center px-5 font-medium opacity-70"
                                            href=""
                                        >Dismiss</a>
                                    </div>
                                </x-base.toast>
                                <x-base.button
                                    id="split-actions-toast"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    <x-base.lucide icon="Compass" />
                                    Show Toast
                                </x-base.button>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex justify-center">
                                    <x-base.toast config="{ triggerId: '#split-actions-toast', close: false }">
                                        <div class="mr-40 flex">
                                            <div>
                                                <x-base.lucide
                                                    class="ml-2 mr-5 mt-2 size-7 stroke-[.8] [--color:var(--color-primary)]"
                                                    icon="Compass"
                                                />
                                            </div>
                                            <div class="grid gap-1">
                                                <div class="font-semibold">Introducing new theme!</div>
                                                <div class="opacity-70">
                                                    Release version 2.3.3
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="bg-background absolute inset-y-0 right-0 z-10 my-px mr-px grid grid-flow-row divide-y overflow-hidden rounded-r-xl border-l">
                                            <a
                                                class="text-primary flex items-center justify-center px-5 font-medium"
                                                href=""
                                            >View Details</a>
                                            <a
                                                class="flex items-center justify-center px-5 font-medium opacity-70"
                                                href=""
                                            >Dismiss</a>
                                        </div>
                                    </x-base.toast>
                                    <x-base.button
                                        id="split-actions-toast"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="Compass" />
                                        Show Toast
                                    </x-base.button>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Split Actions Toast -->
            <!-- BEGIN: Button Actions Toast -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Button Actions Toast</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex justify-center">
                                <x-base.toast config="{ triggerId: '#button-actions-toast', close: false }">
                                    <div class="mr-5 flex">
                                        <div>
                                            <x-base.lucide
                                                class="ml-2 mr-5 mt-2 size-7 stroke-[.8] [--color:var(--color-primary)]"
                                                icon="Compass"
                                            />
                                        </div>
                                        <div class="grid gap-1">
                                            <div class="font-semibold">{{ $fakers[0]['users'][0]['name'] }}</div>
                                            <div class="opacity-70">
                                                Sent you new documents.
                                            </div>
                                            <div class="mt-2 flex gap-3 font-medium">
                                                <x-base.button
                                                    class="h-auto px-2 py-1"
                                                    href=""
                                                    size="sm"
                                                    variant="primary"
                                                >
                                                    Preview
                                                </x-base.button>
                                                <x-base.button
                                                    class="h-auto px-2 py-1"
                                                    href=""
                                                    size="sm"
                                                >Download</x-base.button>
                                            </div>
                                        </div>
                                    </div>
                                </x-base.toast>
                                <x-base.button
                                    id="button-actions-toast"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    <x-base.lucide icon="Compass" />
                                    Show Toast
                                </x-base.button>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex justify-center">
                                    <x-base.toast config="{ triggerId: '#button-actions-toast', close: false }">
                                        <div class="mr-5 flex">
                                            <div>
                                                <x-base.lucide
                                                    class="ml-2 mr-5 mt-2 size-7 stroke-[.8] [--color:var(--color-primary)]"
                                                    icon="Compass"
                                                />
                                            </div>
                                            <div class="grid gap-1">
                                                <div class="font-semibold">{{ $fakers[0]['users'][0]['name'] }}</div>
                                                <div class="opacity-70">
                                                    Sent you new documents.
                                                </div>
                                                <div class="mt-2 flex gap-3 font-medium">
                                                    <x-base.button
                                                        class="h-auto px-2 py-1"
                                                        href=""
                                                        size="sm"
                                                        variant="primary"
                                                    >
                                                        Preview
                                                    </x-base.button>
                                                    <x-base.button
                                                        class="h-auto px-2 py-1"
                                                        href=""
                                                        size="sm"
                                                    >Download</x-base.button>
                                                </div>
                                            </div>
                                        </div>
                                    </x-base.toast>
                                    <x-base.button
                                        id="button-actions-toast"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="Compass" />
                                        Show Toast
                                    </x-base.button>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Button Actions Toast -->
        </div>
    </div>
@endsection
