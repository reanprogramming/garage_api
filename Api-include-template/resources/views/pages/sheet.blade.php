@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Sheet - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Sheet</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Basic Sheet -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Basic Sheet</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex justify-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#basic-sheet"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    <x-base.lucide icon="Compass" />
                                    Show Sheet
                                </x-base.button>
                                <x-base.sheet id="basic-sheet">
                                    <x-base.sheet.header>
                                        <x-base.sheet.title>Edit Profile</x-base.sheet.title>
                                        <x-base.sheet.description>
                                            Make changes to your profile here. Click save when you're done.
                                        </x-base.sheet.description>
                                    </x-base.sheet.header>
                                    <div class="grid gap-4 gap-y-3 py-8">
                                        <div class="grid grid-cols-4 items-center gap-4">
                                            <x-base.label
                                                class="text-right"
                                                for="pos-form-4"
                                            >
                                                Name
                                            </x-base.label>
                                            <x-base.input
                                                class="col-span-3"
                                                id="pos-form-4"
                                                placeholder="Pedro Duarte"
                                            />
                                        </div>
                                        <div class="grid grid-cols-4 items-center gap-4">
                                            <x-base.label
                                                class="text-right"
                                                for="pos-form-5"
                                            >
                                                Username
                                            </x-base.label>
                                            <x-base.input
                                                class="col-span-3"
                                                id="pos-form-5"
                                                placeholder="@peduarte"
                                            />
                                        </div>
                                    </div>
                                    <x-base.sheet.footer>
                                        <x-base.button
                                            data-tw-dismiss="modal"
                                            type="button"
                                        >
                                            Cancel
                                        </x-base.button>
                                        <x-base.button
                                            data-tw-dismiss="modal"
                                            type="button"
                                            variant="primary"
                                        >
                                            Save Changes
                                        </x-base.button>
                                    </x-base.sheet.footer>
                                </x-base.sheet>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex justify-center">
                                    <x-base.button
                                        data-tw-toggle="modal"
                                        data-tw-target="#basic-sheet"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="Compass" />
                                        Show Sheet
                                    </x-base.button>
                                    <x-base.sheet id="basic-sheet">
                                        <x-base.sheet.header>
                                            <x-base.sheet.title>Edit Profile</x-base.sheet.title>
                                            <x-base.sheet.description>
                                                Make changes to your profile here. Click save when you're done.
                                            </x-base.sheet.description>
                                        </x-base.sheet.header>
                                        <div class="grid gap-4 gap-y-3 py-8">
                                            <div class="grid grid-cols-4 items-center gap-4">
                                                <x-base.label
                                                    class="text-right"
                                                    for="pos-form-4"
                                                >
                                                    Name
                                                </x-base.label>
                                                <x-base.input
                                                    class="col-span-3"
                                                    id="pos-form-4"
                                                    placeholder="Pedro Duarte"
                                                />
                                            </div>
                                            <div class="grid grid-cols-4 items-center gap-4">
                                                <x-base.label
                                                    class="text-right"
                                                    for="pos-form-5"
                                                >
                                                    Username
                                                </x-base.label>
                                                <x-base.input
                                                    class="col-span-3"
                                                    id="pos-form-5"
                                                    placeholder="@peduarte"
                                                />
                                            </div>
                                        </div>
                                        <x-base.sheet.footer>
                                            <x-base.button
                                                data-tw-dismiss="modal"
                                                type="button"
                                            >
                                                Cancel
                                            </x-base.button>
                                            <x-base.button
                                                data-tw-dismiss="modal"
                                                type="button"
                                                variant="primary"
                                            >
                                                Save Changes
                                            </x-base.button>
                                        </x-base.sheet.footer>
                                    </x-base.sheet>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Basic Sheet -->
            <!-- BEGIN: Sheet Size -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Sheet Size</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex justify-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#sheet-size"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    <x-base.lucide icon="Compass" />
                                    Show Sheet
                                </x-base.button>
                                <x-base.sheet
                                    class="transition-[max-width]"
                                    id="sheet-size"
                                >
                                    <div class="flex flex-col items-center gap-5 text-center">
                                        <h2 class="text-lg font-medium">Choose Sheet Size</h2>
                                        <div class="grid w-full grid-cols-3 gap-3">
                                            <div
                                                class="bg-(--color)/5 hover:bg-(--color)/10 border-(--color)/10 text-medium text-(--color) cursor-pointer rounded-xl border py-10 text-center text-2xl [--color:var(--color-foreground)] [&.active]:shadow [&.active]:[--color:var(--color-primary)]"
                                                data-change-size="sm:!max-w-sm"
                                            >
                                                SM
                                            </div>
                                            <div
                                                class="bg-(--color)/5 hover:bg-(--color)/10 border-(--color)/10 text-medium text-(--color) cursor-pointer rounded-xl border py-10 text-center text-2xl [--color:var(--color-foreground)] [&.active]:shadow [&.active]:[--color:var(--color-primary)]"
                                                data-change-size="sm:!max-w-md"
                                            >
                                                MD
                                            </div>
                                            <div
                                                class="bg-(--color)/5 hover:bg-(--color)/10 border-(--color)/10 text-medium text-(--color) cursor-pointer rounded-xl border py-10 text-center text-2xl [--color:var(--color-foreground)] [&.active]:shadow [&.active]:[--color:var(--color-primary)]"
                                                data-change-size="sm:!max-w-lg"
                                            >
                                                LG
                                            </div>
                                            <div
                                                class="bg-(--color)/5 hover:bg-(--color)/10 border-(--color)/10 text-medium text-(--color) cursor-pointer rounded-xl border py-10 text-center text-2xl [--color:var(--color-foreground)] [&.active]:shadow [&.active]:[--color:var(--color-primary)]"
                                                data-change-size="sm:!max-w-xl"
                                            >
                                                XL
                                            </div>
                                            <div
                                                class="bg-(--color)/5 hover:bg-(--color)/10 border-(--color)/10 text-medium text-(--color) cursor-pointer rounded-xl border py-10 text-center text-2xl [--color:var(--color-foreground)] [&.active]:shadow [&.active]:[--color:var(--color-primary)]"
                                                data-change-size="sm:!max-w-2xl"
                                            >
                                                2XL
                                            </div>
                                            <div
                                                class="bg-(--color)/5 hover:bg-(--color)/10 border-(--color)/10 text-medium text-(--color) cursor-pointer rounded-xl border py-10 text-center text-2xl [--color:var(--color-foreground)] [&.active]:shadow [&.active]:[--color:var(--color-primary)]"
                                                data-change-size="sm:!max-w-3xl"
                                            >
                                                3XL
                                            </div>
                                        </div>
                                        <x-base.button
                                            class="mt-2 w-40"
                                            data-tw-dismiss="modal"
                                            type="button"
                                            variant="primary"
                                        >
                                            Close Sheet
                                        </x-base.button>
                                    </div>
                                </x-base.sheet>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex justify-center">
                                    <x-base.button
                                        data-tw-toggle="modal"
                                        data-tw-target="#sheet-size"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="Compass" />
                                        Show Sheet
                                    </x-base.button>
                                    <x-base.sheet
                                        class="transition-[max-width]"
                                        id="sheet-size"
                                    >
                                        <div class="flex flex-col items-center gap-5 text-center">
                                            <h2 class="text-lg font-medium">Choose Sheet Size</h2>
                                            <div class="grid w-full grid-cols-3 gap-3">
                                                <div
                                                    class="bg-(--color)/5 hover:bg-(--color)/10 border-(--color)/10 text-medium text-(--color) cursor-pointer rounded-xl border py-10 text-center text-2xl [--color:var(--color-foreground)] [&.active]:shadow [&.active]:[--color:var(--color-primary)]"
                                                    data-change-size="sm:!max-w-sm"
                                                >
                                                    SM
                                                </div>
                                                <div
                                                    class="bg-(--color)/5 hover:bg-(--color)/10 border-(--color)/10 text-medium text-(--color) cursor-pointer rounded-xl border py-10 text-center text-2xl [--color:var(--color-foreground)] [&.active]:shadow [&.active]:[--color:var(--color-primary)]"
                                                    data-change-size="sm:!max-w-md"
                                                >
                                                    MD
                                                </div>
                                                <div
                                                    class="bg-(--color)/5 hover:bg-(--color)/10 border-(--color)/10 text-medium text-(--color) cursor-pointer rounded-xl border py-10 text-center text-2xl [--color:var(--color-foreground)] [&.active]:shadow [&.active]:[--color:var(--color-primary)]"
                                                    data-change-size="sm:!max-w-lg"
                                                >
                                                    LG
                                                </div>
                                                <div
                                                    class="bg-(--color)/5 hover:bg-(--color)/10 border-(--color)/10 text-medium text-(--color) cursor-pointer rounded-xl border py-10 text-center text-2xl [--color:var(--color-foreground)] [&.active]:shadow [&.active]:[--color:var(--color-primary)]"
                                                    data-change-size="sm:!max-w-xl"
                                                >
                                                    XL
                                                </div>
                                                <div
                                                    class="bg-(--color)/5 hover:bg-(--color)/10 border-(--color)/10 text-medium text-(--color) cursor-pointer rounded-xl border py-10 text-center text-2xl [--color:var(--color-foreground)] [&.active]:shadow [&.active]:[--color:var(--color-primary)]"
                                                    data-change-size="sm:!max-w-2xl"
                                                >
                                                    2XL
                                                </div>
                                                <div
                                                    class="bg-(--color)/5 hover:bg-(--color)/10 border-(--color)/10 text-medium text-(--color) cursor-pointer rounded-xl border py-10 text-center text-2xl [--color:var(--color-foreground)] [&.active]:shadow [&.active]:[--color:var(--color-primary)]"
                                                    data-change-size="sm:!max-w-3xl"
                                                >
                                                    3XL
                                                </div>
                                            </div>
                                            <x-base.button
                                                class="mt-2 w-40"
                                                data-tw-dismiss="modal"
                                                type="button"
                                                variant="primary"
                                            >
                                                Close Sheet
                                            </x-base.button>
                                        </div>
                                    </x-base.sheet>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Sheet Size -->
        </div>
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Custom Close Sheet -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Custom Close Sheet</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex justify-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#custom-close-sheet"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    <x-base.lucide icon="Compass" />
                                    Show Sheet
                                </x-base.button>
                                <x-base.sheet id="custom-close-sheet">
                                    <a
                                        class="bg-background/80 hover:bg-background absolute inset-y-0 left-0 my-auto -ml-16 flex size-9 items-center justify-center rounded-full border shadow backdrop-blur"
                                        data-tw-dismiss="modal"
                                        href="#"
                                    >
                                        <x-base.lucide
                                            class="size-5 opacity-70"
                                            icon="X"
                                        />
                                    </a>
                                    <x-base.sheet.header>
                                        <x-base.sheet.title>Edit Profile</x-base.sheet.title>
                                        <x-base.sheet.description>
                                            Make changes to your profile here. Click save when you're done.
                                        </x-base.sheet.description>
                                    </x-base.sheet.header>
                                    <div class="grid gap-4 gap-y-3 py-8">
                                        <div class="grid grid-cols-4 items-center gap-4">
                                            <x-base.label
                                                class="text-right"
                                                for="pos-form-4"
                                            >
                                                Name
                                            </x-base.label>
                                            <x-base.input
                                                class="col-span-3"
                                                id="pos-form-4"
                                                placeholder="Pedro Duarte"
                                            />
                                        </div>
                                        <div class="grid grid-cols-4 items-center gap-4">
                                            <x-base.label
                                                class="text-right"
                                                for="pos-form-5"
                                            >
                                                Username
                                            </x-base.label>
                                            <x-base.input
                                                class="col-span-3"
                                                id="pos-form-5"
                                                placeholder="@peduarte"
                                            />
                                        </div>
                                    </div>
                                    <x-base.sheet.footer>
                                        <x-base.button
                                            data-tw-dismiss="modal"
                                            type="button"
                                        >
                                            Cancel
                                        </x-base.button>
                                        <x-base.button
                                            data-tw-dismiss="modal"
                                            type="button"
                                            variant="primary"
                                        >
                                            Save Changes
                                        </x-base.button>
                                    </x-base.sheet.footer>
                                </x-base.sheet>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex justify-center">
                                    <x-base.button
                                        data-tw-toggle="modal"
                                        data-tw-target="#custom-close-sheet"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="Compass" />
                                        Show Sheet
                                    </x-base.button>
                                    <x-base.sheet id="custom-close-sheet">
                                        <a
                                            class="bg-background/80 hover:bg-background absolute inset-y-0 left-0 my-auto -ml-16 flex size-9 items-center justify-center rounded-full border shadow backdrop-blur"
                                            data-tw-dismiss="modal"
                                            href="#"
                                        >
                                            <x-base.lucide
                                                class="size-5 opacity-70"
                                                icon="X"
                                            />
                                        </a>
                                        <x-base.sheet.header>
                                            <x-base.sheet.title>Edit Profile</x-base.sheet.title>
                                            <x-base.sheet.description>
                                                Make changes to your profile here. Click save when you're done.
                                            </x-base.sheet.description>
                                        </x-base.sheet.header>
                                        <div class="grid gap-4 gap-y-3 py-8">
                                            <div class="grid grid-cols-4 items-center gap-4">
                                                <x-base.label
                                                    class="text-right"
                                                    for="pos-form-4"
                                                >
                                                    Name
                                                </x-base.label>
                                                <x-base.input
                                                    class="col-span-3"
                                                    id="pos-form-4"
                                                    placeholder="Pedro Duarte"
                                                />
                                            </div>
                                            <div class="grid grid-cols-4 items-center gap-4">
                                                <x-base.label
                                                    class="text-right"
                                                    for="pos-form-5"
                                                >
                                                    Username
                                                </x-base.label>
                                                <x-base.input
                                                    class="col-span-3"
                                                    id="pos-form-5"
                                                    placeholder="@peduarte"
                                                />
                                            </div>
                                        </div>
                                        <x-base.sheet.footer>
                                            <x-base.button
                                                data-tw-dismiss="modal"
                                                type="button"
                                            >
                                                Cancel
                                            </x-base.button>
                                            <x-base.button
                                                data-tw-dismiss="modal"
                                                type="button"
                                                variant="primary"
                                            >
                                                Save Changes
                                            </x-base.button>
                                        </x-base.sheet.footer>
                                    </x-base.sheet>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Custom Close Sheet -->
            <!-- BEGIN: Overlapping Sheet -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Overlapping Sheet</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex justify-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#overlapping-sheet"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    <x-base.lucide icon="Compass" />
                                    Show Sheet
                                </x-base.button>
                                <x-base.sheet id="overlapping-sheet">
                                    <div>
                                        <div
                                            class="mt-5 text-center text-3xl font-medium opacity-80 [text-shadow:_3px_3px_--alpha(var(--color-foreground)/30%)]">
                                            Yoowww! Click button bellow to show overlapping Sheet!
                                        </div>
                                        <div class="mt-8 px-5 pb-8 text-center">
                                            <x-base.button
                                                class="px-10"
                                                data-tw-toggle="modal"
                                                data-tw-target="#overlapping-demo-sheet"
                                                href="#"
                                                as="a"
                                                variant="primary"
                                            >
                                                <x-base.lucide icon="Compass" />
                                                Show Sheet
                                            </x-base.button>
                                        </div>
                                        <x-base.sheet id="overlapping-demo-sheet">
                                            <div
                                                class="mt-5 text-center text-3xl font-medium opacity-80 [text-shadow:_3px_3px_--alpha(var(--color-foreground)/30%)]">
                                                This is totally awesome overlapping Sheet!
                                            </div>
                                            <div class="mt-8 px-5 pb-8 text-center">
                                                <x-base.button
                                                    class="px-10"
                                                    data-tw-dismiss="modal"
                                                    type="button"
                                                    variant="primary"
                                                >
                                                    Alright, close this Sheet! 👍👍👍
                                                </x-base.button>
                                            </div>
                                        </x-base.sheet>
                                    </div>
                                </x-base.sheet>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex justify-center">
                                    <x-base.button
                                        data-tw-toggle="modal"
                                        data-tw-target="#overlapping-sheet"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="Compass" />
                                        Show Sheet
                                    </x-base.button>
                                    <x-base.sheet id="overlapping-sheet">
                                        <div>
                                            <div
                                                class="mt-5 text-center text-3xl font-medium opacity-80 [text-shadow:_3px_3px_--alpha(var(--color-foreground)/30%)]">
                                                Yoowww! Click button bellow to show overlapping Sheet!
                                            </div>
                                            <div class="mt-8 px-5 pb-8 text-center">
                                                <x-base.button
                                                    class="px-10"
                                                    data-tw-toggle="modal"
                                                    data-tw-target="#overlapping-demo-sheet"
                                                    href="#"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    <x-base.lucide icon="Compass" />
                                                    Show Sheet
                                                </x-base.button>
                                            </div>
                                            <x-base.sheet id="overlapping-demo-sheet">
                                                <div
                                                    class="mt-5 text-center text-3xl font-medium opacity-80 [text-shadow:_3px_3px_--alpha(var(--color-foreground)/30%)]">
                                                    This is totally awesome overlapping Sheet!
                                                </div>
                                                <div class="mt-8 px-5 pb-8 text-center">
                                                    <x-base.button
                                                        class="px-10"
                                                        data-tw-dismiss="modal"
                                                        type="button"
                                                        variant="primary"
                                                    >
                                                        Alright, close this Sheet! 👍👍👍
                                                    </x-base.button>
                                                </div>
                                            </x-base.sheet>
                                        </div>
                                    </x-base.sheet>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Overlapping Sheet -->
        </div>
    </div>
@endsection

@pushOnce('vendors')
    @vite('resources/js/pages/sheet.js')
@endPushOnce
