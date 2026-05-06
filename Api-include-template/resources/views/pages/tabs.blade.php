@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Tabs - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Tabs</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Basic Tabs -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Basic Tabs</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box class="mx-auto max-w-sm">
                                <x-base.tabs>
                                    <x-base.tabs.list>
                                        <x-base.tabs.trigger>Account</x-base.tabs.trigger>
                                        <x-base.tabs.trigger>Password</x-base.tabs.trigger>
                                    </x-base.tabs.list>
                                    <x-base.tabs.contents class="mt-3.5 rounded-xl border p-5">
                                        <x-base.tabs.content>
                                            <div class="text-lg font-medium">Account</div>
                                            <div class="mt-1 opacity-70">
                                                Make changes to your account here. Click save when you're done.
                                            </div>
                                            <div class="grid grid-cols-12 gap-4 gap-y-3 py-8">
                                                <x-base.form.item class="col-span-12">
                                                    <x-base.label>Name</x-base.label>
                                                    <x-base.input
                                                        type="text"
                                                        value="{{ $fakers[0]['users'][0]['name'] }}"
                                                    />
                                                </x-base.form.item>
                                                <x-base.form.item class="col-span-12">
                                                    <x-base.label>Username</x-base.label>
                                                    <x-base.input
                                                        type="text"
                                                        value="{{ $fakers[0]['users'][0]['email'] }}"
                                                    />
                                                </x-base.form.item>
                                            </div>
                                            <div>
                                                <x-base.button
                                                    type="button"
                                                    variant="primary"
                                                >
                                                    Save Changes
                                                </x-base.button>
                                            </div>
                                        </x-base.tabs.content>
                                        <x-base.tabs.content>
                                            <div class="text-lg font-medium">Password</div>
                                            <div class="mt-1 opacity-70">
                                                Change your password here. After saving, you'll be logged out.
                                            </div>
                                            <div class="grid grid-cols-12 gap-4 gap-y-3 py-8">
                                                <x-base.form.item class="col-span-12">
                                                    <x-base.label>Current password</x-base.label>
                                                    <x-base.input type="password" />
                                                </x-base.form.item>
                                                <x-base.form.item class="col-span-12">
                                                    <x-base.label>New password</x-base.label>
                                                    <x-base.input type="password" />
                                                </x-base.form.item>
                                            </div>
                                            <div>
                                                <x-base.button
                                                    type="button"
                                                    variant="primary"
                                                >
                                                    Save Password
                                                </x-base.button>
                                            </div>
                                        </x-base.tabs.content>
                                    </x-base.tabs.contents>
                                </x-base.tabs>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box class="mx-auto max-w-sm">
                                    <x-base.tabs>
                                        <x-base.tabs.list>
                                            <x-base.tabs.trigger>Account</x-base.tabs.trigger>
                                            <x-base.tabs.trigger>Password</x-base.tabs.trigger>
                                        </x-base.tabs.list>
                                        <x-base.tabs.contents class="mt-3.5 rounded-xl border p-5">
                                            <x-base.tabs.content>
                                                <div class="text-lg font-medium">Account</div>
                                                <div class="mt-1 opacity-70">
                                                    Make changes to your account here. Click save when you're done.
                                                </div>
                                                <div class="grid grid-cols-12 gap-4 gap-y-3 py-8">
                                                    <x-base.form.item class="col-span-12">
                                                        <x-base.label>Name</x-base.label>
                                                        <x-base.input
                                                            type="text"
                                                            value="{{ $fakers[0]['users'][0]['name'] }}"
                                                        />
                                                    </x-base.form.item>
                                                    <x-base.form.item class="col-span-12">
                                                        <x-base.label>Username</x-base.label>
                                                        <x-base.input
                                                            type="text"
                                                            value="{{ $fakers[0]['users'][0]['email'] }}"
                                                        />
                                                    </x-base.form.item>
                                                </div>
                                                <div>
                                                    <x-base.button
                                                        type="button"
                                                        variant="primary"
                                                    >
                                                        Save Changes
                                                    </x-base.button>
                                                </div>
                                            </x-base.tabs.content>
                                            <x-base.tabs.content>
                                                <div class="text-lg font-medium">Password</div>
                                                <div class="mt-1 opacity-70">
                                                    Change your password here. After saving, you'll be logged out.
                                                </div>
                                                <div class="grid grid-cols-12 gap-4 gap-y-3 py-8">
                                                    <x-base.form.item class="col-span-12">
                                                        <x-base.label>Current password</x-base.label>
                                                        <x-base.input type="password" />
                                                    </x-base.form.item>
                                                    <x-base.form.item class="col-span-12">
                                                        <x-base.label>New password</x-base.label>
                                                        <x-base.input type="password" />
                                                    </x-base.form.item>
                                                </div>
                                                <div>
                                                    <x-base.button
                                                        type="button"
                                                        variant="primary"
                                                    >
                                                        Save Password
                                                    </x-base.button>
                                                </div>
                                            </x-base.tabs.content>
                                        </x-base.tabs.contents>
                                    </x-base.tabs>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Basic Tabs -->
        </div>
    </div>
@endsection
