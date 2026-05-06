@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Update Profile - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Update Profile</h2>
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
            <!-- BEGIN: Display Information -->
            <x-base.box class="p-0 lg:mt-5">
                <div class="flex items-center border-b p-5">
                    <h2 class="mr-auto text-base font-medium">
                        Display Information
                    </h2>
                </div>
                <div class="p-5">
                    <div class="flex flex-col xl:flex-row">
                        <div class="mt-6 flex-1 xl:mt-0">
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 2xl:col-span-6">
                                    <x-base.form.item>
                                        <x-base.label for="update-profile-form-1">
                                            Display Name
                                        </x-base.label>
                                        <x-base.input
                                            id="update-profile-form-1"
                                            type="text"
                                            value="{{ $fakers[0]['users'][0]['name'] }}"
                                            placeholder="Input text"
                                            disabled
                                        />
                                    </x-base.form.item>
                                    <x-base.form.item class="mt-3">
                                        <x-base.label for="update-profile-form-2">
                                            Nearest MRT Station
                                        </x-base.label>
                                        <x-base.tom-select
                                            class="w-full"
                                            id="update-profile-form-2"
                                        >
                                            <option value="1">Admiralty</option>
                                            <option value="2">Aljunied</option>
                                            <option value="3">Ang Mo Kio</option>
                                            <option value="4">Bartley</option>
                                            <option value="5">Beauty World</option>
                                        </x-base.tom-select>
                                    </x-base.form.item>
                                </div>
                                <div class="col-span-12 2xl:col-span-6">
                                    <x-base.form.item class="mt-3 2xl:mt-0">
                                        <x-base.label for="update-profile-form-3">
                                            Postal Code
                                        </x-base.label>
                                        <x-base.tom-select
                                            class="w-full"
                                            id="update-profile-form-3"
                                        >
                                            <option value="1">
                                                018906 - 1 STRAITS BOULEVARD SINGA...
                                            </option>
                                            <option value="2">
                                                018910 - 5A MARINA GARDENS DRIVE...
                                            </option>
                                            <option value="3">
                                                018915 - 100A CENTRAL BOULEVARD...
                                            </option>
                                            <option value="4">
                                                018925 - 21 PARK STREET MARINA...
                                            </option>
                                            <option value="5">
                                                018926 - 23 PARK STREET MARINA...
                                            </option>
                                        </x-base.tom-select>
                                    </x-base.form.item>
                                    <x-base.form.item class="mt-3">
                                        <x-base.label for="update-profile-form-4">
                                            Phone Number
                                        </x-base.label>
                                        <x-base.input
                                            id="update-profile-form-4"
                                            type="text"
                                            value="65570828"
                                            placeholder="Input text"
                                        />
                                    </x-base.form.item>
                                </div>
                                <div class="col-span-12">
                                    <x-base.form.item class="mt-3">
                                        <x-base.label for="update-profile-form-5">
                                            Address
                                        </x-base.label>
                                        <x-base.textarea
                                            id="update-profile-form-5"
                                            value="10 Anson Road, International Plaza, #10-11, 079903 Singapore, Singapore"
                                            placeholder="Adress"
                                        ></x-base.textarea>
                                    </x-base.form.item>
                                </div>
                            </div>
                            <x-base.button
                                class="mt-3 w-28"
                                type="button"
                                variant="primary"
                            >
                                Save
                            </x-base.button>
                        </div>
                        <div class="mx-auto w-52 xl:ml-6 xl:mr-0">
                            <div class="rounded-xl border-2 border-dashed p-5">
                                <div class="image-fit relative mx-auto h-40 cursor-pointer">
                                    <img
                                        class="rounded-xl"
                                        src="{{ Vite::asset($fakers[0]['photos'][0]) }}"
                                        alt="Midone - Tailwind Admin Dashboard Template"
                                    />
                                    <x-base.tooltip
                                        class="bg-(--color)/80 border-(--color) text-medium absolute right-0 top-0 -mr-2 -mt-2 flex size-5 items-center justify-center rounded-full text-white [--color:var(--color-danger)]"
                                        as="div"
                                        content="Remove this profile photo?"
                                    >
                                        <x-base.lucide
                                            class="h-4 w-4"
                                            icon="X"
                                        />
                                    </x-base.tooltip>
                                </div>
                                <div class="relative mx-auto mt-5 cursor-pointer">
                                    <x-base.button
                                        class="w-full"
                                        type="button"
                                        variant="primary"
                                    >
                                        Change Photo
                                    </x-base.button>
                                    <x-base.input
                                        class="absolute left-0 top-0 h-full w-full opacity-0"
                                        type="file"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </x-base.box>
            <!-- END: Display Information -->
            <!-- BEGIN: Personal Information -->
            <x-base.box class="mt-8 p-0">
                <div class="flex items-center border-b p-5">
                    <h2 class="mr-auto text-base font-medium">
                        Personal Information
                    </h2>
                </div>
                <div class="p-5">
                    <div class="grid grid-cols-12 gap-x-5">
                        <div class="col-span-12 xl:col-span-6">
                            <x-base.form.item>
                                <x-base.label for="update-profile-form-6">Email</x-base.label>
                                <x-base.input
                                    id="update-profile-form-6"
                                    type="text"
                                    value="{{ $fakers[0]['users'][0]['email'] }}"
                                    placeholder="Input text"
                                    disabled
                                />
                            </x-base.form.item>
                            <x-base.form.item class="mt-3">
                                <x-base.label for="update-profile-form-7">Name</x-base.label>
                                <x-base.input
                                    id="update-profile-form-7"
                                    type="text"
                                    value="{{ $fakers[0]['users'][0]['name'] }}"
                                    placeholder="Input text"
                                    disabled
                                />
                            </x-base.form.item>
                            <x-base.form.item class="mt-3">
                                <x-base.label for="update-profile-form-8">
                                    ID Type
                                </x-base.label>
                                <x-base.select id="update-profile-form-8">
                                    <option>IC</option>
                                    <option>FIN</option>
                                    <option>Passport</option>
                                </x-base.select>
                            </x-base.form.item>
                            <x-base.form.item class="mt-3">
                                <x-base.label for="update-profile-form-9">
                                    ID Number
                                </x-base.label>
                                <x-base.input
                                    id="update-profile-form-9"
                                    type="text"
                                    value="357821204950001"
                                    placeholder="Input text"
                                />
                            </x-base.form.item>
                        </div>
                        <div class="col-span-12 xl:col-span-6">
                            <x-base.form.item class="mt-3 xl:mt-0">
                                <x-base.label for="update-profile-form-10">
                                    Phone Number
                                </x-base.label>
                                <x-base.input
                                    id="update-profile-form-10"
                                    type="text"
                                    value="65570828"
                                    placeholder="Input text"
                                />
                            </x-base.form.item>
                            <x-base.form.item class="mt-3">
                                <x-base.label for="update-profile-form-11">
                                    Address
                                </x-base.label>
                                <x-base.input
                                    id="update-profile-form-11"
                                    type="text"
                                    value="10 Anson Road, International Plaza, #10-11, 079903 Singapore, Singapore"
                                    placeholder="Input text"
                                />
                            </x-base.form.item>
                            <x-base.form.item class="mt-3">
                                <x-base.label for="update-profile-form-12">
                                    Bank Name
                                </x-base.label>
                                <x-base.tom-select
                                    class="w-full"
                                    id="update-profile-form-12"
                                >
                                    <option value="1">SBI - STATE BANK OF INDIA</option>
                                    <option value="2">CITI BANK - CITI BANK</option>
                                </x-base.tom-select>
                            </x-base.form.item>
                            <x-base.form.item class="mt-3">
                                <x-base.label for="update-profile-form-13">
                                    Bank Account
                                </x-base.label>
                                <x-base.input
                                    id="update-profile-form-13"
                                    type="text"
                                    value="DBS Current 011-903573-0"
                                    placeholder="Input text"
                                />
                            </x-base.form.item>
                        </div>
                    </div>
                    <div class="mt-4 flex justify-end">
                        <x-base.button
                            class="mr-auto w-28"
                            type="button"
                            variant="primary"
                        >
                            Save
                        </x-base.button>
                        <x-base.button
                            type="button"
                            variant="danger"
                        >
                            <x-base.lucide
                                class="mr-1 size-4"
                                icon="Trash"
                            /> Delete Account
                        </x-base.button>
                    </div>
                </div>
            </x-base.box>
            <!-- END: Personal Information -->
        </div>
    </div>
@endsection
