@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Easepick - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Easepick</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Single Date Picker -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Single Date Picker</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview class="overflow-auto">
                            <x-base.box>
                                <x-base.easepick type="text" />
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box>
                                    <x-base.easepick type="text" />
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Single Date Picker -->
            <!-- BEGIN: Multiple Date Picker -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Multiple Date Picker</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview class="overflow-auto">
                            <x-base.box>
                                <x-base.easepick
                                    type="text"
                                    config="{
                                        multipleMode: true
                                    }"
                                />
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box>
                                    <x-base.easepick
                                        type="text"
                                        config="{
                                            multipleMode: true
                                        }"
                                    />
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Multiple Date Picker -->
        </div>
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Input Group Date Picker -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Input Group - Date Picker</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview class="overflow-auto">
                            <x-base.box>
                                <x-base.form.group>
                                    <div
                                        class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center border px-5 [--color:var(--color-foreground)]">
                                        <x-base.lucide icon="Calendar" />
                                    </div>
                                    <x-base.easepick
                                        type="text"
                                        config="{
                                            multipleMode: true
                                        }"
                                    />
                                </x-base.form.group>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box>
                                    <x-base.form.group>
                                        <div
                                            class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center border px-5 [--color:var(--color-foreground)]">
                                            <x-base.lucide icon="Calendar" />
                                        </div>
                                        <x-base.easepick
                                            type="text"
                                            config="{
                                                multipleMode: true
                                            }"
                                        />
                                    </x-base.form.group>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Input Group Date Picker -->
            <!-- BEGIN: Dialog Date Picker -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Dialog - Date Picker</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview class="overflow-auto">
                            <div class="flex justify-center">
                                <x-base.button
                                    data-tw-toggle="modal"
                                    data-tw-target="#delete-confirmation-dialog"
                                    href="#"
                                    as="a"
                                    variant="primary"
                                >
                                    <x-base.lucide icon="Compass" />
                                    Show Dialog
                                </x-base.button>
                                <x-base.dialog id="easepick-dialog">
                                    <x-base.dialog.header>
                                        <x-base.dialog.title>Event Registration Form</x-base.dialog.title>
                                        <x-base.dialog.description>
                                            Fill in the details below to register for the event. Choose your preferred date
                                            and enable notifications to stay updated.
                                        </x-base.dialog.description>
                                    </x-base.dialog.header>
                                    <div class="grid grid-cols-12 gap-4 gap-y-3 py-8">
                                        <x-base.form.item class="col-span-12">
                                            <x-base.label for="form-1">Full Name</x-base.label>
                                            <x-base.input
                                                id="form-1"
                                                type="text"
                                                placeholder="Enter your full name as it appears on your ID."
                                            />
                                        </x-base.form.item>
                                        <x-base.form.item class="col-span-12">
                                            <x-base.label for="form-2">Contact Number</x-base.label>
                                            <x-base.input
                                                id="form-2"
                                                type="text"
                                                placeholder="Provide a valid phone number for event-related updates."
                                            />
                                        </x-base.form.item>
                                        <x-base.form.item class="col-span-12">
                                            <x-base.label for="form-3">Event Date</x-base.label>
                                            <x-base.easepick
                                                id="form-3"
                                                type="text"
                                                config="{
                                                    multipleMode: true
                                                }"
                                            />
                                        </x-base.form.item>
                                    </div>
                                    <x-base.dialog.footer>
                                        <x-base.button
                                            data-tw-dismiss="modal"
                                            type="button"
                                        >
                                            Cancel
                                        </x-base.button>
                                        <x-base.button
                                            type="button"
                                            variant="primary"
                                        >
                                            Register
                                        </x-base.button>
                                    </x-base.dialog.footer>
                                </x-base.dialog>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="my-10 flex justify-center">
                                    <x-base.button
                                        data-tw-toggle="modal"
                                        data-tw-target="#delete-confirmation-dialog"
                                        href="#"
                                        as="a"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="Compass" />
                                        Show Dialog
                                    </x-base.button>
                                    <x-base.dialog id="easepick-dialog">
                                        <x-base.dialog.header>
                                            <x-base.dialog.title>Event Registration Form</x-base.dialog.title>
                                            <x-base.dialog.description>
                                                Fill in the details below to register for the event. Choose your preferred date
                                                and enable notifications to stay updated.
                                            </x-base.dialog.description>
                                        </x-base.dialog.header>
                                        <div class="grid grid-cols-12 gap-4 gap-y-3 py-8">
                                            <x-base.form.item class="col-span-12">
                                                <x-base.label for="form-1">Full Name</x-base.label>
                                                <x-base.input
                                                    id="form-1"
                                                    type="text"
                                                    placeholder="Enter your full name as it appears on your ID."
                                                />
                                            </x-base.form.item>
                                            <x-base.form.item class="col-span-12">
                                                <x-base.label for="form-2">Contact Number</x-base.label>
                                                <x-base.input
                                                    id="form-2"
                                                    type="text"
                                                    placeholder="Provide a valid phone number for event-related updates."
                                                />
                                            </x-base.form.item>
                                            <x-base.form.item class="col-span-12">
                                                <x-base.label for="form-3">Event Date</x-base.label>
                                                <x-base.easepick
                                                    id="form-3"
                                                    type="text"
                                                    config="{
                                                        multipleMode: true
                                                    }"
                                                />
                                            </x-base.form.item>
                                        </div>
                                        <x-base.dialog.footer>
                                            <x-base.button
                                                data-tw-dismiss="modal"
                                                type="button"
                                            >
                                                Cancel
                                            </x-base.button>
                                            <x-base.button
                                                type="button"
                                                variant="primary"
                                            >
                                                Register
                                            </x-base.button>
                                        </x-base.dialog.footer>
                                    </x-base.dialog>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Dialog Date Picker -->
        </div>
    </div>
@endsection
