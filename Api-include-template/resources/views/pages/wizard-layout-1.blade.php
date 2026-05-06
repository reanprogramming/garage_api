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
        <div class="flex justify-center">
            <x-base.button
                class="[&.active]:bg-(--color)/20 [&.active]:text-(--color) active mx-2 size-14 rounded-full [&.active]:[--color:var(--color-primary)]"
            >
                1
            </x-base.button>
            <x-base.button
                class="[&.active]:bg-(--color)/20 [&.active]:text-(--color) mx-2 size-14 rounded-full [&.active]:[--color:var(--color-primary)]"
            >
                2
            </x-base.button>
            <x-base.button
                class="[&.active]:bg-(--color)/20 [&.active]:text-(--color) mx-2 size-14 rounded-full [&.active]:[--color:var(--color-primary)]"
            >
                3
            </x-base.button>
        </div>
        <div class="mt-10 px-5">
            <div class="text-center text-lg font-medium">
                Setup Your Account
            </div>
            <div class="mt-2 text-center opacity-70">
                To start off, please enter your username, email address and
                password.
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
