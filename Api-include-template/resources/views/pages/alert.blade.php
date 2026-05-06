@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Alert - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Alert</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Basic Alert -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Basic Alert</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex flex-col gap-4">
                                <x-base.alert
                                    class="gap-2"
                                    variant="primary"
                                    dismissible
                                >
                                    <x-base.lucide
                                        class="size-5"
                                        icon="Compass"
                                    />
                                    <span>
                                        Introducing new dashboard! Download now at
                                        <a
                                            class="underline decoration-dotted underline-offset-2"
                                            href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820"
                                            target="blank"
                                        >
                                            themeforest.net
                                        </a>
                                        .
                                    </span>
                                </x-base.alert>
                                <x-base.alert
                                    class="gap-2"
                                    variant="secondary"
                                    dismissible
                                >
                                    <x-base.lucide
                                        class="size-5"
                                        icon="Rocket"
                                    />
                                    <span>
                                        Introducing new dashboard! Download now at
                                        <a
                                            class="underline decoration-dotted underline-offset-2"
                                            href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820"
                                            target="blank"
                                        >
                                            themeforest.net
                                        </a>
                                        .
                                    </span>
                                </x-base.alert>
                                <x-base.alert
                                    class="gap-2"
                                    variant="success"
                                    dismissible
                                >
                                    <x-base.lucide
                                        class="size-5"
                                        icon="Feather"
                                    />
                                    <span>
                                        Introducing new dashboard! Download now at
                                        <a
                                            class="underline decoration-dotted underline-offset-2"
                                            href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820"
                                            target="blank"
                                        >
                                            themeforest.net
                                        </a>
                                        .
                                    </span>
                                </x-base.alert>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex flex-col gap-4">
                                    <x-base.alert
                                        class="gap-2"
                                        variant="primary"
                                        dismissible
                                    >
                                        <x-base.lucide
                                            class="size-5"
                                            icon="Compass"
                                        />
                                        <span>
                                            Introducing new dashboard! Download now at
                                            <a
                                                class="underline decoration-dotted underline-offset-2"
                                                href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820"
                                                target="blank"
                                            >
                                                themeforest.net
                                            </a>
                                            .
                                        </span>
                                    </x-base.alert>
                                    <x-base.alert
                                        class="gap-2"
                                        variant="secondary"
                                        dismissible
                                    >
                                        <x-base.lucide
                                            class="size-5"
                                            icon="Rocket"
                                        />
                                        <span>
                                            Introducing new dashboard! Download now at
                                            <a
                                                class="underline decoration-dotted underline-offset-2"
                                                href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820"
                                                target="blank"
                                            >
                                                themeforest.net
                                            </a>
                                            .
                                        </span>
                                    </x-base.alert>
                                    <x-base.alert
                                        class="gap-2"
                                        variant="success"
                                        dismissible
                                    >
                                        <x-base.lucide
                                            class="size-5"
                                            icon="Feather"
                                        />
                                        <span>
                                            Introducing new dashboard! Download now at
                                            <a
                                                class="underline decoration-dotted underline-offset-2"
                                                href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820"
                                                target="blank"
                                            >
                                                themeforest.net
                                            </a>
                                            .
                                        </span>
                                    </x-base.alert>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Basic Alert -->
            <!-- BEGIN: Stacked Alert -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Stacked Alert</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex flex-col gap-7">
                                <x-base.alert
                                    class="before:bg-(--color)/5 before:border-(--color)/15 after:bg-(--color)/10 after:border-(--color)/20 gap-2 border-transparent bg-transparent [--color:var(--color-pending)]"
                                    as="x-base.box"
                                    dismissible
                                >
                                    <x-base.lucide
                                        class="size-5"
                                        icon="SquareMousePointer"
                                    />
                                    <span>
                                        Introducing new dashboard! Download now at
                                        <a
                                            class="underline decoration-dotted underline-offset-2"
                                            href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820"
                                            target="blank"
                                        >
                                            themeforest.net
                                        </a>
                                        .
                                    </span>
                                </x-base.alert>
                                <x-base.alert
                                    class="before:bg-(--color)/5 before:border-(--color)/15 after:bg-(--color)/10 after:border-(--color)/20 gap-2 border-transparent bg-transparent [--color:var(--color-danger)]"
                                    as="x-base.box"
                                    dismissible
                                >
                                    <x-base.lucide
                                        class="size-5"
                                        icon="Goal"
                                    />
                                    <span>
                                        Introducing new dashboard! Download now at
                                        <a
                                            class="underline decoration-dotted underline-offset-2"
                                            href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820"
                                            target="blank"
                                        >
                                            themeforest.net
                                        </a>
                                        .
                                    </span>
                                </x-base.alert>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex flex-col gap-7">
                                    <x-base.alert
                                        class="before:bg-(--color)/5 before:border-(--color)/15 after:bg-(--color)/10 after:border-(--color)/20 gap-2 border-transparent bg-transparent [--color:var(--color-pending)]"
                                        as="x-base.box"
                                        dismissible
                                    >
                                        <x-base.lucide
                                            class="size-5"
                                            icon="SquareMousePointer"
                                        />
                                        <span>
                                            Introducing new dashboard! Download now at
                                            <a
                                                class="underline decoration-dotted underline-offset-2"
                                                href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820"
                                                target="blank"
                                            >
                                                themeforest.net
                                            </a>
                                            .
                                        </span>
                                    </x-base.alert>
                                    <x-base.alert
                                        class="before:bg-(--color)/5 before:border-(--color)/15 after:bg-(--color)/10 after:border-(--color)/20 gap-2 border-transparent bg-transparent [--color:var(--color-danger)]"
                                        as="x-base.box"
                                        dismissible
                                    >
                                        <x-base.lucide
                                            class="size-5"
                                            icon="Goal"
                                        />
                                        <span>
                                            Introducing new dashboard! Download now at
                                            <a
                                                class="underline decoration-dotted underline-offset-2"
                                                href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820"
                                                target="blank"
                                            >
                                                themeforest.net
                                            </a>
                                            .
                                        </span>
                                    </x-base.alert>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Stacked Alert -->
        </div>
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Avatar Alert -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Avatar Alert</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex flex-col gap-7">
                                <x-base.alert
                                    class="gap-5"
                                    as="x-base.box"
                                    dismissible
                                >
                                    <x-base.avatar
                                        class="size-14 rounded-xl"
                                        src="{{ Vite::asset($fakers[0]['photos'][0]) }}"
                                    />
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
                                </x-base.alert>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex flex-col gap-7">
                                    <x-base.alert
                                        class="gap-5"
                                        as="x-base.box"
                                        dismissible
                                    >
                                        <x-base.avatar
                                            class="size-14 rounded-xl"
                                            src="{{ Vite::asset($fakers[0]['photos'][0]) }}"
                                        />
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
                                    </x-base.alert>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Avatar Alert -->
            <!-- BEGIN: Split Action Alert -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Split Action Alert</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex flex-col gap-7">
                                <x-base.alert
                                    class="gap-5"
                                    as="x-base.box"
                                >
                                    <div class="flex">
                                        <div>
                                            <x-base.lucide
                                                class="ml-2 mr-5 mt-2 size-7 stroke-[.8] [--color:var(--color-primary)]"
                                                icon="Compass"
                                            >
                                            </x-base.lucide>
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
                                </x-base.alert>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex flex-col gap-7">
                                    <x-base.alert
                                        class="gap-5"
                                        as="x-base.box"
                                    >
                                        <div class="flex">
                                            <div>
                                                <x-base.lucide
                                                    class="ml-2 mr-5 mt-2 size-7 stroke-[.8] [--color:var(--color-primary)]"
                                                    icon="Compass"
                                                >
                                                </x-base.lucide>
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
                                    </x-base.alert>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Split Action Alert -->
        </div>
    </div>
@endsection
