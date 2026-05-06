@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Update Profile - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Change Password</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        <div class="col-span-12 flex flex-col-reverse lg:col-span-4 lg:block 2xl:col-span-3">
            <x-base.box class="mt-5 p-0">
                <div class="relative flex items-center p-5">
                    <x-base.avatar
                        class="size-12"
                        src="{{ Vite::asset($fakers[0]['photos'][0]) }}"
                    />
                    <div class="ml-4 mr-auto">
                        <div class="text-base font-medium">
                            {{ $fakers[0]['users'][0]['name'] }}
                        </div>
                        <div class="opacity-70">{{ $fakers[0]['jobs'][0] }}</div>
                    </div>
                    <x-base.dropdown-menu>
                        <x-base.dropdown-menu.trigger
                            class="block size-5"
                            href="#"
                            as="a"
                        >
                            <x-base.lucide
                                class="size-5 opacity-70"
                                icon="MoreHorizontal"
                            />
                        </x-base.dropdown-menu.trigger>
                        <x-base.dropdown-menu.content class="w-56">
                            <x-base.dropdown-menu.item class="py-3 font-medium">Export Options</x-base.dropdown-menu.item>
                            <x-base.dropdown-menu.separator />
                            <x-base.dropdown-menu.item>
                                <x-base.lucide
                                    class="mr-2"
                                    icon="Activity"
                                />
                                English
                            </x-base.dropdown-menu.item>
                            <x-base.dropdown-menu.item>
                                <x-base.lucide
                                    class="mr-2"
                                    icon="Box"
                                />
                                Indonesia
                                <x-base.badge class="ml-auto [--color:var(--color-danger)]">10</x-base.badge>
                            </x-base.dropdown-menu.item>
                            <x-base.dropdown-menu.item>
                                <x-base.lucide
                                    class="mr-2"
                                    icon="Layout"
                                />
                                English
                            </x-base.dropdown-menu.item>
                            <x-base.dropdown-menu.item>
                                <x-base.lucide
                                    class="mr-2"
                                    icon="Sidebar"
                                />
                                Indonesia
                            </x-base.dropdown-menu.item>
                            <x-base.dropdown-menu.separator />
                            <div class="flex px-2 py-1.5">
                                <x-base.button
                                    class="text-xs"
                                    type="button"
                                    variant="primary"
                                    size="sm"
                                >
                                    Settings
                                </x-base.button>
                                <x-base.button
                                    class="ml-auto text-xs"
                                    type="button"
                                    variant="secondary"
                                    size="sm"
                                >
                                    View Profile
                                </x-base.button>
                            </div>
                        </x-base.dropdown-menu.content>
                    </x-base.dropdown-menu>
                </div>
                <div class="flex flex-col gap-5 border-t p-5">
                    <a
                        class="[&.active]:text-primary active flex items-center [&.active]:font-medium"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Activity"
                        /> Personal
                        Information
                    </a>
                    <a
                        class="[&.active]:text-primary flex items-center [&.active]:font-medium"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Box"
                        /> Account Settings
                    </a>
                    <a
                        class="[&.active]:text-primary flex items-center [&.active]:font-medium"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Lock"
                        /> Change Password
                    </a>
                    <a
                        class="[&.active]:text-primary flex items-center [&.active]:font-medium"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Settings"
                        /> User
                        Settings
                    </a>
                </div>
                <div class="flex flex-col gap-5 border-t p-5">
                    <a
                        class="flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Activity"
                        /> Email
                        Settings
                    </a>
                    <a
                        class="[&.active]:text-primary flex items-center [&.active]:font-medium"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Box"
                        /> Saved Credit
                        Cards
                    </a>
                    <a
                        class="[&.active]:text-primary flex items-center [&.active]:font-medium"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Lock"
                        /> Social Networks
                    </a>
                    <a
                        class="[&.active]:text-primary flex items-center [&.active]:font-medium"
                        href=""
                    >
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="Settings"
                        /> Tax
                        Information
                    </a>
                </div>
                <div class="flex border-t p-5">
                    <x-base.button type="button">
                        New Group
                    </x-base.button>
                    <x-base.button
                        class="ml-auto"
                        type="button"
                    >
                        New Quick Link
                    </x-base.button>
                </div>
            </x-base.box>
        </div>
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
            <!-- BEGIN: Change Password -->
            <x-base.box class="p-0 lg:mt-5">
                <div class="flex items-center border-b p-5">
                    <h2 class="mr-auto text-base font-medium">Change Password</h2>
                </div>
                <div class="p-5">
                    <x-base.form.item>
                        <x-base.label for="change-password-form-1">
                            Old Password
                        </x-base.label>
                        <x-base.input
                            id="change-password-form-1"
                            type="password"
                            placeholder="Input text"
                        />
                    </x-base.form.item>
                    <x-base.form.item class="mt-3">
                        <x-base.label for="change-password-form-2">
                            New Password
                        </x-base.label>
                        <x-base.input
                            id="change-password-form-2"
                            type="password"
                            placeholder="Input text"
                        />
                    </x-base.form.item>
                    <x-base.form.item class="mt-3">
                        <x-base.label for="change-password-form-3">
                            Confirm New Password
                        </x-base.label>
                        <x-base.input
                            id="change-password-form-3"
                            type="password"
                            placeholder="Input text"
                        />
                    </x-base.form.item>
                    <x-base.button
                        class="mt-4"
                        type="button"
                        variant="primary"
                    >
                        Change Password
                    </x-base.button>
                </div>
            </x-base.box>
            <!-- END: Change Password -->
        </div>
    </div>
@endsection
