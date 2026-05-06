@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Dialog - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Dialog</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Basic Dialog -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Basic Dialog</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex justify-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#basic-dialog"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    <x-base.lucide icon="Compass" />
                                    Show Dialog
                                </x-base.button>
                                <x-base.dialog id="basic-dialog">
                                    <div class="flex flex-col items-center gap-3 py-2 text-center">
                                        <h2 class="text-lg font-medium">What is Lorem Ipsum?</h2>
                                        <p class="opacity-80">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic typesetting, remaining essentially unchanged. It was popularised in
                                            the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                            and more recently with desktop publishing software like Aldus PageMaker
                                            including versions of Lorem Ipsum.
                                        </p>
                                        <x-base.button
                                            class="mt-2 w-40"
                                            data-tw-dismiss="modal"
                                            type="button"
                                            variant="primary"
                                        >
                                            Close Dialog
                                        </x-base.button>
                                    </div>
                                </x-base.dialog>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex justify-center">
                                    <x-base.button
                                        data-tw-toggle="modal"
                                        data-tw-target="#basic-dialog"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="Compass" />
                                        Show Dialog
                                    </x-base.button>
                                    <x-base.dialog id="basic-dialog">
                                        <div class="flex flex-col items-center gap-3 py-2 text-center">
                                            <h2 class="text-lg font-medium">What is Lorem Ipsum?</h2>
                                            <p class="opacity-80">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                when an unknown printer took a galley of type and scrambled it to make a type
                                                specimen book. It has survived not only five centuries, but also the leap into
                                                electronic typesetting, remaining essentially unchanged. It was popularised in
                                                the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                                and more recently with desktop publishing software like Aldus PageMaker
                                                including versions of Lorem Ipsum.
                                            </p>
                                            <x-base.button
                                                class="mt-2 w-40"
                                                data-tw-dismiss="modal"
                                                type="button"
                                                variant="primary"
                                            >
                                                Close Dialog
                                            </x-base.button>
                                        </div>
                                    </x-base.dialog>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Basic Dialog -->
            <!-- BEGIN: Dialog Size -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Dialog Size</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex justify-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#dialog-size"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    <x-base.lucide icon="Compass" />
                                    Show Dialog
                                </x-base.button>
                                <x-base.dialog
                                    class="transition-[max-width]"
                                    id="dialog-size"
                                >
                                    <div class="flex flex-col items-center gap-5 py-2 text-center">
                                        <h2 class="text-lg font-medium">Choose Dialog Size</h2>
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
                                            Close Dialog
                                        </x-base.button>
                                    </div>
                                </x-base.dialog>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex justify-center">
                                    <x-base.button
                                        data-tw-toggle="modal"
                                        data-tw-target="#dialog-size"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="Compass" />
                                        Show Dialog
                                    </x-base.button>
                                    <x-base.dialog
                                        class="transition-[max-width]"
                                        id="dialog-size"
                                    >
                                        <div class="flex flex-col items-center gap-5 py-2 text-center">
                                            <h2 class="text-lg font-medium">Choose Dialog Size</h2>
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
                                                Close Dialog
                                            </x-base.button>
                                        </div>
                                    </x-base.dialog>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Dialog Size -->
            <!-- BEGIN: Warning Dialog -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Warning Dialog</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex justify-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#warning-dialog"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    <x-base.lucide icon="Compass" />
                                    Show Dialog
                                </x-base.button>
                                <x-base.dialog id="warning-dialog">
                                    <div class="p-5 text-center">
                                        <x-base.lucide
                                            class="text-warning mx-auto mt-3 size-16 stroke-1"
                                            icon="XCircle"
                                        />
                                        <div class="mt-5 text-3xl">Oops...</div>
                                        <div class="mt-2 opacity-70">
                                            Something went wrong!
                                        </div>
                                    </div>
                                    <div class="px-5 pb-8 text-center">
                                        <x-base.button
                                            class="w-24"
                                            data-tw-dismiss="modal"
                                            type="button"
                                            variant="primary"
                                        >
                                            Ok
                                        </x-base.button>
                                    </div>
                                    <div class="-mx-5 border-t p-5 text-center">
                                        <a
                                            class="text-primary"
                                            href=""
                                        >
                                            Why do I have this issue?
                                        </a>
                                    </div>
                                </x-base.dialog>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex justify-center">
                                    <x-base.button
                                        data-tw-toggle="modal"
                                        data-tw-target="#warning-dialog"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="Compass" />
                                        Show Dialog
                                    </x-base.button>
                                    <x-base.dialog id="warning-dialog">
                                        <div class="p-5 text-center">
                                            <x-base.lucide
                                                class="text-warning mx-auto mt-3 size-16 stroke-1"
                                                icon="XCircle"
                                            />
                                            <div class="mt-5 text-3xl">Oops...</div>
                                            <div class="mt-2 opacity-70">
                                                Something went wrong!
                                            </div>
                                        </div>
                                        <div class="px-5 pb-8 text-center">
                                            <x-base.button
                                                class="w-24"
                                                data-tw-dismiss="modal"
                                                type="button"
                                                variant="primary"
                                            >
                                                Ok
                                            </x-base.button>
                                        </div>
                                        <div class="-mx-5 border-t p-5 text-center">
                                            <a
                                                class="text-primary"
                                                href=""
                                            >
                                                Why do I have this issue?
                                            </a>
                                        </div>
                                    </x-base.dialog>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Warning Dialog -->
            <!-- BEGIN: Custom Close Dialog -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Custom Close Dialog</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex justify-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#custom-close-dialog"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    <x-base.lucide icon="Compass" />
                                    Show Dialog
                                </x-base.button>
                                <x-base.dialog id="custom-close-dialog">
                                    <a
                                        class="bg-background/80 hover:bg-background absolute right-0 top-0 -mr-3 -mt-3 flex size-9 items-center justify-center rounded-full border shadow backdrop-blur"
                                        data-tw-dismiss="modal"
                                        href="#"
                                    >
                                        <x-base.lucide
                                            class="size-5 opacity-70"
                                            icon="X"
                                        />
                                    </a>
                                    <div class="p-5 text-center">
                                        <x-base.lucide
                                            class="text-success mx-auto mt-3 size-16 stroke-1"
                                            icon="CheckCircle"
                                        />
                                        <div class="mt-5 text-3xl">Dialog Example</div>
                                        <div class="mt-2 opacity-70">
                                            Dialog with custom close button
                                        </div>
                                    </div>
                                    <div class="px-5 pb-8 text-center">
                                        <x-base.button
                                            class="w-24"
                                            data-tw-dismiss="modal"
                                            type="button"
                                            variant="primary"
                                        >
                                            Ok
                                        </x-base.button>
                                    </div>
                                </x-base.dialog>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex justify-center">
                                    <x-base.button
                                        data-tw-toggle="modal"
                                        data-tw-target="#custom-close-dialog"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="Compass" />
                                        Show Dialog
                                    </x-base.button>
                                    <x-base.dialog id="custom-close-dialog">
                                        <a
                                            class="bg-background/80 hover:bg-background absolute right-0 top-0 -mr-3 -mt-3 flex size-9 items-center justify-center rounded-full border shadow backdrop-blur"
                                            data-tw-dismiss="modal"
                                            href="#"
                                        >
                                            <x-base.lucide
                                                class="size-5 opacity-70"
                                                icon="X"
                                            />
                                        </a>
                                        <div class="p-5 text-center">
                                            <x-base.lucide
                                                class="text-success mx-auto mt-3 size-16 stroke-1"
                                                icon="CheckCircle"
                                            />
                                            <div class="mt-5 text-3xl">Dialog Example</div>
                                            <div class="mt-2 opacity-70">
                                                Dialog with custom close button
                                            </div>
                                        </div>
                                        <div class="px-5 pb-8 text-center">
                                            <x-base.button
                                                class="w-24"
                                                data-tw-dismiss="modal"
                                                type="button"
                                                variant="primary"
                                            >
                                                Ok
                                            </x-base.button>
                                        </div>
                                    </x-base.dialog>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Custom Close Dialog -->
            <!-- BEGIN: Static Backdrop Dialog -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Static Backdrop Dialog</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex justify-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#static-backdrop-dialog"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    <x-base.lucide icon="Compass" />
                                    Show Dialog
                                </x-base.button>
                                <x-base.dialog
                                    id="static-backdrop-dialog"
                                    backdrop="static"
                                >
                                    <div
                                        class="mt-5 text-center text-3xl font-medium opacity-80 [text-shadow:_3px_3px_--alpha(var(--color-foreground)/30%)]">
                                        I will not close if you click outside me. Don't even try to press escape key.
                                    </div>
                                    <div class="mt-8 px-5 pb-8 text-center">
                                        <x-base.button
                                            class="w-54"
                                            data-tw-dismiss="modal"
                                            type="button"
                                            variant="primary"
                                        >
                                            Alright, I got it! 😂😂😂
                                        </x-base.button>
                                    </div>
                                </x-base.dialog>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex justify-center">
                                    <x-base.button
                                        data-tw-toggle="modal"
                                        data-tw-target="#static-backdrop-dialog"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="Compass" />
                                        Show Dialog
                                    </x-base.button>
                                    <x-base.dialog
                                        id="static-backdrop-dialog"
                                        backdrop="static"
                                    >
                                        <div
                                            class="mt-5 text-center text-3xl font-medium opacity-80 [text-shadow:_3px_3px_--alpha(var(--color-foreground)/30%)]">
                                            I will not close if you click outside me. Don't even try to press escape key.
                                        </div>
                                        <div class="mt-8 px-5 pb-8 text-center">
                                            <x-base.button
                                                class="w-54"
                                                data-tw-dismiss="modal"
                                                type="button"
                                                variant="primary"
                                            >
                                                Alright, I got it! 😂😂😂
                                            </x-base.button>
                                        </div>
                                    </x-base.dialog>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Static Backdrop Dialog -->
        </div>
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Header & Footer Dialog -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Header & Footer Dialog</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex justify-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#header-and-footer-dialog"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    <x-base.lucide icon="Compass" />
                                    Show Dialog
                                </x-base.button>
                                <x-base.dialog id="header-and-footer-dialog">
                                    <x-base.dialog.header>
                                        <x-base.dialog.title>Edit Profile</x-base.dialog.title>
                                        <x-base.dialog.description>
                                            Make changes to your profile here. Click save when you're done.
                                        </x-base.dialog.description>
                                    </x-base.dialog.header>
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
                                    <x-base.dialog.footer>
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
                                    </x-base.dialog.footer>
                                </x-base.dialog>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex justify-center">
                                    <x-base.button
                                        data-tw-toggle="modal"
                                        data-tw-target="#header-and-footer-dialog"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="Compass" />
                                        Show Dialog
                                    </x-base.button>
                                    <x-base.dialog id="header-and-footer-dialog">
                                        <x-base.dialog.header>
                                            <x-base.dialog.title>Edit Profile</x-base.dialog.title>
                                            <x-base.dialog.description>
                                                Make changes to your profile here. Click save when you're done.
                                            </x-base.dialog.description>
                                        </x-base.dialog.header>
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
                                        <x-base.dialog.footer>
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
                                        </x-base.dialog.footer>
                                    </x-base.dialog>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Header & Footer Dialog -->
            <!-- BEGIN: Delete Dialog -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Delete Dialog</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex justify-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#delete-dialog"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    <x-base.lucide icon="Compass" />
                                    Show Dialog
                                </x-base.button>
                                <x-base.dialog id="delete-dialog">
                                    <div class="p-5 text-center">
                                        <x-base.lucide
                                            class="text-danger mx-auto mt-3 size-16 stroke-1"
                                            icon="XCircle"
                                        />
                                        <div class="mt-5 text-3xl">Are you sure?</div>
                                        <div class="mt-2 opacity-70">
                                            Do you really want to delete these records? <br />
                                            This process cannot be undone.
                                        </div>
                                    </div>
                                    <div class="px-5 pb-8 text-center">
                                        <x-base.button
                                            class="mr-1 w-24"
                                            type="button"
                                        >
                                            Cancel
                                        </x-base.button>
                                        <x-base.button
                                            class="w-24"
                                            type="button"
                                            variant="danger"
                                        >
                                            Delete
                                        </x-base.button>
                                    </div>
                                </x-base.dialog>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex justify-center">
                                    <x-base.button
                                        data-tw-toggle="modal"
                                        data-tw-target="#delete-dialog"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="Compass" />
                                        Show Dialog
                                    </x-base.button>
                                    <x-base.dialog id="delete-dialog">
                                        <div class="p-5 text-center">
                                            <x-base.lucide
                                                class="text-danger mx-auto mt-3 size-16 stroke-1"
                                                icon="XCircle"
                                            />
                                            <div class="mt-5 text-3xl">Are you sure?</div>
                                            <div class="mt-2 opacity-70">
                                                Do you really want to delete these records? <br />
                                                This process cannot be undone.
                                            </div>
                                        </div>
                                        <div class="px-5 pb-8 text-center">
                                            <x-base.button
                                                class="mr-1 w-24"
                                                type="button"
                                            >
                                                Cancel
                                            </x-base.button>
                                            <x-base.button
                                                class="w-24"
                                                type="button"
                                                variant="danger"
                                            >
                                                Delete
                                            </x-base.button>
                                        </div>
                                    </x-base.dialog>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Delete Dialog -->
            <!-- BEGIN: Success Dialog -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Success Dialog</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex justify-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#success-dialog"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    <x-base.lucide icon="Compass" />
                                    Show Dialog
                                </x-base.button>
                                <x-base.dialog id="success-dialog">
                                    <div class="p-5 text-center">
                                        <x-base.lucide
                                            class="text-success mx-auto mt-3 size-16 stroke-1"
                                            icon="CheckCircle"
                                        />
                                        <div class="mt-5 text-3xl">Good job!</div>
                                        <div class="mt-2 opacity-70">
                                            You clicked the button!
                                        </div>
                                    </div>
                                    <div class="px-5 pb-8 text-center">
                                        <x-base.button
                                            class="w-24"
                                            type="button"
                                            variant="primary"
                                        >
                                            Ok
                                        </x-base.button>
                                    </div>
                                </x-base.dialog>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex justify-center">
                                    <x-base.button
                                        data-tw-toggle="modal"
                                        data-tw-target="#success-dialog"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="Compass" />
                                        Show Dialog
                                    </x-base.button>
                                    <x-base.dialog id="success-dialog">
                                        <div class="p-5 text-center">
                                            <x-base.lucide
                                                class="text-success mx-auto mt-3 size-16 stroke-1"
                                                icon="CheckCircle"
                                            />
                                            <div class="mt-5 text-3xl">Good job!</div>
                                            <div class="mt-2 opacity-70">
                                                You clicked the button!
                                            </div>
                                        </div>
                                        <div class="px-5 pb-8 text-center">
                                            <x-base.button
                                                class="w-24"
                                                type="button"
                                                variant="primary"
                                            >
                                                Ok
                                            </x-base.button>
                                        </div>
                                    </x-base.dialog>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Success Dialog -->
            <!-- BEGIN: Slider Dialog -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Slider Dialog</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex justify-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#slider-dialog"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    <x-base.lucide icon="Compass" />
                                    Show Dialog
                                </x-base.button>
                                <x-base.dialog id="slider-dialog">
                                    <x-base.tiny-slider
                                        config="{
                                        responsive: {
                                            600: {
                                                items: 2,
                                            },
                                        },
                                    }"
                                    >
                                        <div class="h-56 px-2">
                                            <div class="image-fit h-full overflow-hidden rounded-xl">
                                                <img
                                                    src="{{ Vite::asset($fakers[0]['images'][0]) }}"
                                                    alt="Midone - Tailwind Admin Dashboard Template"
                                                />
                                            </div>
                                        </div>
                                        <div class="h-56 px-2">
                                            <div class="image-fit h-full overflow-hidden rounded-xl">
                                                <img
                                                    src="{{ Vite::asset($fakers[0]['images'][1]) }}"
                                                    alt="Midone - Tailwind Admin Dashboard Template"
                                                />
                                            </div>
                                        </div>
                                        <div class="h-56 px-2">
                                            <div class="image-fit h-full overflow-hidden rounded-xl">
                                                <img
                                                    src="{{ Vite::asset($fakers[0]['images'][2]) }}"
                                                    alt="Midone - Tailwind Admin Dashboard Template"
                                                />
                                            </div>
                                        </div>
                                        <div class="h-56 px-2">
                                            <div class="image-fit h-full overflow-hidden rounded-xl">
                                                <img
                                                    src="{{ Vite::asset($fakers[0]['images'][3]) }}"
                                                    alt="Midone - Tailwind Admin Dashboard Template"
                                                />
                                            </div>
                                        </div>
                                    </x-base.tiny-slider>
                                </x-base.dialog>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex justify-center">
                                    <x-base.button
                                        data-tw-toggle="modal"
                                        data-tw-target="#slider-dialog"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="Compass" />
                                        Show Dialog
                                    </x-base.button>
                                    <x-base.dialog id="slider-dialog">
                                        <x-base.tiny-slider
                                            config="{
                                        responsive: {
                                            600: {
                                                items: 2,
                                            },
                                        },
                                    }"
                                        >
                                            <div class="h-56 px-2">
                                                <div class="image-fit h-full overflow-hidden rounded-xl">
                                                    <img
                                                        src="{{ Vite::asset($fakers[0]['images'][0]) }}"
                                                        alt="Midone - Tailwind Admin Dashboard Template"
                                                    />
                                                </div>
                                            </div>
                                            <div class="h-56 px-2">
                                                <div class="image-fit h-full overflow-hidden rounded-xl">
                                                    <img
                                                        src="{{ Vite::asset($fakers[0]['images'][1]) }}"
                                                        alt="Midone - Tailwind Admin Dashboard Template"
                                                    />
                                                </div>
                                            </div>
                                            <div class="h-56 px-2">
                                                <div class="image-fit h-full overflow-hidden rounded-xl">
                                                    <img
                                                        src="{{ Vite::asset($fakers[0]['images'][2]) }}"
                                                        alt="Midone - Tailwind Admin Dashboard Template"
                                                    />
                                                </div>
                                            </div>
                                            <div class="h-56 px-2">
                                                <div class="image-fit h-full overflow-hidden rounded-xl">
                                                    <img
                                                        src="{{ Vite::asset($fakers[0]['images'][3]) }}"
                                                        alt="Midone - Tailwind Admin Dashboard Template"
                                                    />
                                                </div>
                                            </div>
                                        </x-base.tiny-slider>
                                    </x-base.dialog>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Slider Dialog -->
            <!-- BEGIN: Overlapping Dialog -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Overlapping Dialog</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex justify-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#overlapping-dialog"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    <x-base.lucide icon="Compass" />
                                    Show Dialog
                                </x-base.button>
                                <x-base.dialog id="overlapping-dialog">
                                    <div>
                                        <div
                                            class="mt-5 text-center text-3xl font-medium opacity-80 [text-shadow:_3px_3px_--alpha(var(--color-foreground)/30%)]">
                                            Yoowww! Click button bellow to show overlapping Dialog!
                                        </div>
                                        <div class="mt-8 px-5 pb-8 text-center">
                                            <x-base.button
                                                class="px-10"
                                                data-tw-toggle="modal"
                                                data-tw-target="#overlapping-demo-dialog"
                                                href="#"
                                                as="a"
                                                variant="primary"
                                            >
                                                <x-base.lucide icon="Compass" />
                                                Show Dialog
                                            </x-base.button>
                                        </div>
                                        <x-base.dialog id="overlapping-demo-dialog">
                                            <div
                                                class="mt-5 text-center text-3xl font-medium opacity-80 [text-shadow:_3px_3px_--alpha(var(--color-foreground)/30%)]">
                                                This is totally awesome overlapping Dialog!
                                            </div>
                                            <div class="mt-8 px-5 pb-8 text-center">
                                                <x-base.button
                                                    class="px-10"
                                                    data-tw-dismiss="modal"
                                                    type="button"
                                                    variant="primary"
                                                >
                                                    Alright, close this Dialog! 👍👍👍
                                                </x-base.button>
                                            </div>
                                        </x-base.dialog>
                                    </div>
                                </x-base.dialog>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex justify-center">
                                    <x-base.button
                                        data-tw-toggle="modal"
                                        data-tw-target="#overlapping-dialog"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="Compass" />
                                        Show Dialog
                                    </x-base.button>
                                    <x-base.dialog id="overlapping-dialog">
                                        <div>
                                            <div
                                                class="mt-5 text-center text-3xl font-medium opacity-80 [text-shadow:_3px_3px_--alpha(var(--color-foreground)/30%)]">
                                                Yoowww! Click button bellow to show overlapping Dialog!
                                            </div>
                                            <div class="mt-8 px-5 pb-8 text-center">
                                                <x-base.button
                                                    class="px-10"
                                                    data-tw-toggle="modal"
                                                    data-tw-target="#overlapping-demo-dialog"
                                                    href="#"
                                                    as="a"
                                                    variant="primary"
                                                >
                                                    <x-base.lucide icon="Compass" />
                                                    Show Dialog
                                                </x-base.button>
                                            </div>
                                            <x-base.dialog id="overlapping-demo-dialog">
                                                <div
                                                    class="mt-5 text-center text-3xl font-medium opacity-80 [text-shadow:_3px_3px_--alpha(var(--color-foreground)/30%)]">
                                                    This is totally awesome overlapping Dialog!
                                                </div>
                                                <div class="mt-8 px-5 pb-8 text-center">
                                                    <x-base.button
                                                        class="px-10"
                                                        data-tw-dismiss="modal"
                                                        type="button"
                                                        variant="primary"
                                                    >
                                                        Alright, close this Dialog! 👍👍👍
                                                    </x-base.button>
                                                </div>
                                            </x-base.dialog>
                                        </div>
                                    </x-base.dialog>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Overlapping Dialog -->
        </div>
    </div>
@endsection

@pushOnce('vendors')
    @vite('resources/js/pages/dialog.js')
@endPushOnce
