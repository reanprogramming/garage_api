@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Wizard - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Wizard Layout</h2>
    </div>
    <!-- BEGIN: Wizard Layout -->
    <x-base.box class="mt-5 py-10 sm:py-20">
        <div
            class="before:bg-foreground/10 relative flex flex-col justify-center px-5 before:absolute before:bottom-0 before:top-0 before:mt-6 before:hidden before:h-0.5 before:w-[69%] sm:px-20 lg:flex-row before:lg:block">
            <div class="active group z-10 flex flex-1 items-center lg:block lg:text-center">
                <x-base.button class="group-[.active]:bg-primary/20 group-[.active]:text-primary mx-2 size-12 rounded-full">
                    1
                </x-base.button>
                <div
                    class="group-[.active]:text-primary ml-3 opacity-70 group-[.active]:font-medium group-[.active]:opacity-100 lg:mx-auto lg:mt-3 lg:w-32">
                    Create New Account
                </div>
            </div>
            <div class="group z-10 flex flex-1 items-center lg:block lg:text-center">
                <x-base.button class="group-[.active]:bg-primary/20 group-[.active]:text-primary mx-2 size-12 rounded-full">
                    2
                </x-base.button>
                <div
                    class="group-[.active]:text-primary ml-3 opacity-70 group-[.active]:font-medium group-[.active]:opacity-100 lg:mx-auto lg:mt-3 lg:w-32">
                    Setup Your Profile
                </div>
            </div>
            <div class="group z-10 flex flex-1 items-center lg:block lg:text-center">
                <x-base.button class="group-[.active]:bg-primary/20 group-[.active]:text-primary mx-2 size-12 rounded-full">
                    3
                </x-base.button>
                <div
                    class="group-[.active]:text-primary ml-3 opacity-70 group-[.active]:font-medium group-[.active]:opacity-100 lg:mx-auto lg:mt-3 lg:w-32">
                    Setup Your Business Details
                </div>
            </div>
            <div class="group z-10 flex flex-1 items-center lg:block lg:text-center">
                <x-base.button class="group-[.active]:bg-primary/20 group-[.active]:text-primary mx-2 size-12 rounded-full">
                    4
                </x-base.button>
                <div
                    class="group-[.active]:text-primary ml-3 opacity-70 group-[.active]:font-medium group-[.active]:opacity-100 lg:mx-auto lg:mt-3 lg:w-32">
                    Setup Billing Account
                </div>
            </div>
            <div class="group z-10 flex flex-1 items-center lg:block lg:text-center">
                <x-base.button class="group-[.active]:bg-primary/20 group-[.active]:text-primary mx-2 size-12 rounded-full">
                    5
                </x-base.button>
                <div
                    class="group-[.active]:text-primary ml-3 opacity-70 group-[.active]:font-medium group-[.active]:opacity-100 lg:mx-auto lg:mt-3 lg:w-32">
                    Finalize your purchase
                </div>
            </div>
        </div>
        <div class="mt-10 border-t px-5 pt-10 sm:px-20">
            <div class="text-base font-medium">Profile Settings</div>
            <div class="mt-5 grid grid-cols-12 gap-4 gap-y-5">
                <x-base.form.item class="col-span-12 sm:col-span-6">
                    <x-base.label for="input-wizard-1">From</x-base.label>
                    <x-base.input
                        id="input-wizard-1"
                        type="text"
                        placeholder="example@gmail.com"
                    />
                </x-base.form.item>
                <x-base.form.item class="col-span-12 sm:col-span-6">
                    <x-base.label for="input-wizard-2">To</x-base.label>
                    <x-base.input
                        id="input-wizard-2"
                        type="text"
                        placeholder="example@gmail.com"
                    />
                </x-base.form.item>
                <x-base.form.item class="col-span-12 sm:col-span-6">
                    <x-base.label for="input-wizard-3">Subject</x-base.label>
                    <x-base.input
                        id="input-wizard-3"
                        type="text"
                        placeholder="Important Meeting"
                    />
                </x-base.form.item>
                <x-base.form.item class="col-span-12 sm:col-span-6">
                    <x-base.label for="input-wizard-4">Has the Words</x-base.label>
                    <x-base.input
                        id="input-wizard-4"
                        type="text"
                        placeholder="Job, Work, Documentation"
                    />
                </x-base.form.item>
                <x-base.form.item class="col-span-12 sm:col-span-6">
                    <x-base.label for="input-wizard-5">Doesn't Have</x-base.label>
                    <x-base.input
                        id="input-wizard-5"
                        type="text"
                        placeholder="Job, Work, Documentation"
                    />
                </x-base.form.item>
                <x-base.form.item class="col-span-12 sm:col-span-6">
                    <x-base.label for="input-wizard-6">Size</x-base.label>
                    <x-base.select id="input-wizard-6">
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                    </x-base.select>
                </x-base.form.item>
                <div class="col-span-12 mt-5 flex items-center justify-center sm:justify-end">
                    <x-base.button class="w-32">
                        Previous
                    </x-base.button>
                    <x-base.button
                        class="ml-2 w-32"
                        variant="primary"
                    >
                        Next
                    </x-base.button>
                </div>
            </div>
        </div>
    </x-base.box>
    <!-- END: Wizard Layout -->
@endsection
