@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Regular Form - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Regular Form</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Regular Form -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Regular Form</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box class="px-6 py-8">
                                <div class="flex flex-col gap-5">
                                    <x-base.form.item>
                                        <x-base.label class="opacity-70">Full Name</x-base.label>
                                        <x-base.input
                                            type="text"
                                            placeholder="John Doe"
                                        />
                                    </x-base.form.item>
                                    <x-base.form.item>
                                        <x-base.label class="opacity-70">Email</x-base.label>
                                        <x-base.input
                                            type="email"
                                            placeholder="johndoe@gmail.com"
                                        />
                                    </x-base.form.item>
                                    <x-base.form.item>
                                        <x-base.label class="opacity-70">When is your
                                            event?</x-base.label>
                                        <x-base.input type="date" />
                                    </x-base.form.item>
                                    <x-base.form.item>
                                        <x-base.label class="opacity-70">What type of event is
                                            it?</x-base.label>
                                        <x-base.select>
                                            <option>Corporate Event</option>
                                            <option>Wedding</option>
                                            <option>Birthday</option>
                                            <option>Other</option>
                                        </x-base.select>
                                    </x-base.form.item>
                                    <x-base.form.item>
                                        <x-base.label class="opacity-70">Additional
                                            details</x-base.label>
                                        <x-base.textarea />
                                    </x-base.form.item>
                                    <x-base.form.item class="flex-row items-center">
                                        <x-base.checkbox
                                            id="email-me"
                                            type="checkbox"
                                        />
                                        <x-base.label
                                            class="opacity-70"
                                            for="email-me"
                                        >
                                            Email me news and special offers
                                        </x-base.label>
                                    </x-base.form.item>
                                    <div class="mt-2 flex gap-3">
                                        <x-base.button variant="primary">
                                            <x-base.lucide icon="Rocket" /> Register Event
                                        </x-base.button>
                                        <x-base.button>
                                            <x-base.lucide icon="BookCheck" /> Show Events
                                        </x-base.button>
                                    </div>
                                </div>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box class="px-6 py-8">
                                    <div class="flex flex-col gap-5">
                                        <x-base.form.item>
                                            <x-base.label class="opacity-70">Full Name</x-base.label>
                                            <x-base.input
                                                type="text"
                                                placeholder="John Doe"
                                            />
                                        </x-base.form.item>
                                        <x-base.form.item>
                                            <x-base.label class="opacity-70">Email</x-base.label>
                                            <x-base.input
                                                type="email"
                                                placeholder="johndoe@gmail.com"
                                            />
                                        </x-base.form.item>
                                        <x-base.form.item>
                                            <x-base.label class="opacity-70">When is your
                                                event?</x-base.label>
                                            <x-base.input type="date" />
                                        </x-base.form.item>
                                        <x-base.form.item>
                                            <x-base.label class="opacity-70">What type of event is
                                                it?</x-base.label>
                                            <x-base.select>
                                                <option>Corporate Event</option>
                                                <option>Wedding</option>
                                                <option>Birthday</option>
                                                <option>Other</option>
                                            </x-base.select>
                                        </x-base.form.item>
                                        <x-base.form.item>
                                            <x-base.label class="opacity-70">Additional
                                                details</x-base.label>
                                            <x-base.textarea />
                                        </x-base.form.item>
                                        <x-base.form.item class="flex-row items-center">
                                            <x-base.checkbox
                                                id="email-me"
                                                type="checkbox"
                                            />
                                            <x-base.label
                                                class="opacity-70"
                                                for="email-me"
                                            >
                                                Email me news and special offers
                                            </x-base.label>
                                        </x-base.form.item>
                                        <div class="mt-2 flex gap-3">
                                            <x-base.button variant="primary">
                                                <x-base.lucide icon="Rocket" /> Register Event
                                            </x-base.button>
                                            <x-base.button>
                                                <x-base.lucide icon="BookCheck" /> Show Events
                                            </x-base.button>
                                        </div>
                                    </div>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Regular Form -->
            <!-- BEGIN: Input Group -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Input Group</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box class="px-6 py-8">
                                <div class="flex flex-col gap-5">
                                    <x-base.form.item>
                                        <x-base.label class="opacity-70">Blood Pressure</x-base.label>
                                        <x-base.form.group>
                                            <x-base.input
                                                type="text"
                                                placeholder="Systolic"
                                            />
                                            <x-base.input
                                                type="text"
                                                placeholder="Diastolic"
                                            />
                                            <div
                                                class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center border px-5 [--color:var(--color-foreground)]">
                                                mmHg</div>
                                        </x-base.form.group>
                                    </x-base.form.item>
                                    <x-base.form.item>
                                        <x-base.label class="opacity-70">Dimensions (L × W)</x-base.label>
                                        <x-base.form.group>
                                            <x-base.input
                                                type="text"
                                                placeholder="Length"
                                            />
                                            <x-base.input
                                                type="text"
                                                placeholder="Width"
                                            />
                                            <div
                                                class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center border px-5 [--color:var(--color-foreground)]">
                                                cm</div>
                                        </x-base.form.group>
                                    </x-base.form.item>
                                    <x-base.form.item>
                                        <x-base.label class="opacity-70">Internet Speed</x-base.label>
                                        <div class="flex gap-4">
                                            <x-base.form.group>
                                                <x-base.input
                                                    type="text"
                                                    placeholder="Download"
                                                />
                                                <div
                                                    class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center border px-5 [--color:var(--color-foreground)]">
                                                    Mbps</div>
                                            </x-base.form.group>
                                            <x-base.form.group>
                                                <x-base.input
                                                    type="text"
                                                    placeholder="Upload"
                                                />
                                                <div
                                                    class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center border px-5 [--color:var(--color-foreground)]">
                                                    Mbps</div>
                                            </x-base.form.group>
                                            <x-base.form.group>
                                                <x-base.input
                                                    type="text"
                                                    placeholder="Ping"
                                                />
                                                <div
                                                    class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center border px-5 [--color:var(--color-foreground)]">
                                                    ms</div>
                                            </x-base.form.group>
                                        </div>
                                    </x-base.form.item>
                                </div>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box class="px-6 py-8">
                                    <div class="flex flex-col gap-5">
                                        <x-base.form.item>
                                            <x-base.label class="opacity-70">Blood Pressure</x-base.label>
                                            <x-base.form.group>
                                                <x-base.input
                                                    type="text"
                                                    placeholder="Systolic"
                                                />
                                                <x-base.input
                                                    type="text"
                                                    placeholder="Diastolic"
                                                />
                                                <div
                                                    class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center border px-5 [--color:var(--color-foreground)]">
                                                    mmHg</div>
                                            </x-base.form.group>
                                        </x-base.form.item>
                                        <x-base.form.item>
                                            <x-base.label class="opacity-70">Dimensions (L × W)</x-base.label>
                                            <x-base.form.group>
                                                <x-base.input
                                                    type="text"
                                                    placeholder="Length"
                                                />
                                                <x-base.input
                                                    type="text"
                                                    placeholder="Width"
                                                />
                                                <div
                                                    class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center border px-5 [--color:var(--color-foreground)]">
                                                    cm</div>
                                            </x-base.form.group>
                                        </x-base.form.item>
                                        <x-base.form.item>
                                            <x-base.label class="opacity-70">Internet Speed</x-base.label>
                                            <div class="flex gap-4">
                                                <x-base.form.group>
                                                    <x-base.input
                                                        type="text"
                                                        placeholder="Download"
                                                    />
                                                    <div
                                                        class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center border px-5 [--color:var(--color-foreground)]">
                                                        Mbps</div>
                                                </x-base.form.group>
                                                <x-base.form.group>
                                                    <x-base.input
                                                        type="text"
                                                        placeholder="Upload"
                                                    />
                                                    <div
                                                        class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center border px-5 [--color:var(--color-foreground)]">
                                                        Mbps</div>
                                                </x-base.form.group>
                                                <x-base.form.group>
                                                    <x-base.input
                                                        type="text"
                                                        placeholder="Ping"
                                                    />
                                                    <div
                                                        class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center border px-5 [--color:var(--color-foreground)]">
                                                        ms</div>
                                                </x-base.form.group>
                                            </div>
                                        </x-base.form.item>
                                    </div>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Input Group -->
        </div>
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Horizontal Form -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Horizontal Form</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box class="px-6 py-8">
                                <div class="flex flex-col gap-5">
                                    <x-base.form.item class="flex-row items-center">
                                        <x-base.label class="w-32 flex-none text-right opacity-70">Full Name</x-base.label>
                                        <x-base.input
                                            type="text"
                                            placeholder="John Doe"
                                        />
                                    </x-base.form.item>
                                    <x-base.form.item class="flex-row items-center">
                                        <x-base.label class="w-32 flex-none text-right opacity-70">Receive
                                            Updates</x-base.label>
                                        <x-base.switch />
                                    </x-base.form.item>
                                    <x-base.form.item class="flex-row items-center">
                                        <x-base.label class="w-32 flex-none text-right opacity-70">Contact
                                            Number</x-base.label>
                                        <x-base.input
                                            type="email"
                                            placeholder="Enter your phone number (e.g., +1 234 567 890)"
                                        />
                                    </x-base.form.item>
                                    <x-base.form.item class="ml-32 flex-row items-center pl-3">
                                        <x-base.checkbox
                                            id="event-terms"
                                            type="checkbox"
                                        />
                                        <x-base.label
                                            class="opacity-70"
                                            for="event-terms"
                                        >
                                            I agree to the event terms
                                        </x-base.label>
                                    </x-base.form.item>
                                    <div class="ml-32 mt-2 flex gap-3 pl-3">
                                        <x-base.button
                                            class="min-w-32"
                                            variant="primary"
                                        >
                                            <x-base.lucide icon="Rocket" /> Register
                                        </x-base.button>
                                        <x-base.button class="min-w-32">
                                            <x-base.lucide icon="BookCheck" /> Cancel
                                        </x-base.button>
                                    </div>
                                </div>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box class="px-6 py-8">
                                    <div class="flex flex-col gap-5">
                                        <x-base.form.item class="flex-row items-center">
                                            <x-base.label class="w-32 flex-none text-right opacity-70">Full Name</x-base.label>
                                            <x-base.input
                                                type="text"
                                                placeholder="John Doe"
                                            />
                                        </x-base.form.item>
                                        <x-base.form.item class="flex-row items-center">
                                            <x-base.label class="w-32 flex-none text-right opacity-70">Receive
                                                Updates</x-base.label>
                                            <x-base.switch />
                                        </x-base.form.item>
                                        <x-base.form.item class="flex-row items-center">
                                            <x-base.label class="w-32 flex-none text-right opacity-70">Contact
                                                Number</x-base.label>
                                            <x-base.input
                                                type="email"
                                                placeholder="Enter your phone number (e.g., +1 234 567 890)"
                                            />
                                        </x-base.form.item>
                                        <x-base.form.item class="ml-32 flex-row items-center pl-3">
                                            <x-base.checkbox
                                                id="event-terms"
                                                type="checkbox"
                                            />
                                            <x-base.label
                                                class="opacity-70"
                                                for="event-terms"
                                            >
                                                I agree to the event terms
                                            </x-base.label>
                                        </x-base.form.item>
                                        <div class="ml-32 mt-2 flex gap-3 pl-3">
                                            <x-base.button
                                                class="min-w-32"
                                                variant="primary"
                                            >
                                                <x-base.lucide icon="Rocket" /> Register
                                            </x-base.button>
                                            <x-base.button class="min-w-32">
                                                <x-base.lucide icon="BookCheck" /> Cancel
                                            </x-base.button>
                                        </div>
                                    </div>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Horizontal Form -->
            <!-- BEGIN: Input State -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Input State</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box class="px-6 py-8">
                                <div class="mb-10 flex justify-center gap-5">
                                    <x-base.badge
                                        class="ring-foreground/15 active [&.active]:ring-5 size-8 cursor-pointer rounded-full [--color:var(--color-danger)]"
                                        data-color-toggle="danger"
                                    />
                                    <x-base.badge
                                        class="ring-foreground/15 [&.active]:ring-5 size-8 cursor-pointer rounded-full [--color:var(--color-success)]"
                                        data-color-toggle="success"
                                    />
                                    <x-base.badge
                                        class="ring-foreground/15 [&.active]:ring-5 size-8 cursor-pointer rounded-full [--color:var(--color-pending)]"
                                        data-color-toggle="pending"
                                    />
                                </div>
                                <div class="color-variable flex flex-col gap-8 [--color:var(--color-danger)]">
                                    <x-base.form.item class="error group">
                                        <x-base.label class="opacity-70">Blood
                                            Pressure</x-base.label>
                                        <x-base.form.group>
                                            <x-base.input
                                                class="group-[.error]:inset-ring inset-ring-(--color)"
                                                type="text"
                                                placeholder="Systolic"
                                            />
                                            <x-base.input
                                                class="group-[.error]:inset-ring inset-ring-(--color)"
                                                type="text"
                                                placeholder="Diastolic"
                                            />
                                            <div
                                                class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center border px-5 [--color:var(--color-foreground)]">
                                                mmHg</div>
                                        </x-base.form.group>
                                        <x-base.form.message class="text-(--color) hidden group-[.error]:block">
                                            Invalid blood pressure values. Please enter a systolic pressure between 90-180
                                            mmHg and a diastolic pressure between 60-120 mmHg.
                                        </x-base.form.message>
                                    </x-base.form.item>
                                    <x-base.form.item class="error group">
                                        <x-base.label class="opacity-70">Internet
                                            Speed</x-base.label>
                                        <div class="flex gap-4">
                                            <x-base.form.group>
                                                <x-base.input
                                                    class="group-[.error]:inset-ring inset-ring-(--color)"
                                                    type="text"
                                                    placeholder="Download"
                                                />
                                                <div
                                                    class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center border px-5 [--color:var(--color-foreground)]">
                                                    Mbps</div>
                                            </x-base.form.group>
                                            <x-base.form.group>
                                                <x-base.input
                                                    class="group-[.error]:inset-ring inset-ring-(--color)"
                                                    type="text"
                                                    placeholder="Upload"
                                                />
                                                <div
                                                    class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center border px-5 [--color:var(--color-foreground)]">
                                                    Mbps</div>
                                            </x-base.form.group>
                                            <x-base.form.group>
                                                <x-base.input
                                                    class="group-[.error]:inset-ring inset-ring-(--color)"
                                                    type="text"
                                                    placeholder="Ping"
                                                />
                                                <div
                                                    class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center border px-5 [--color:var(--color-foreground)]">
                                                    ms</div>
                                            </x-base.form.group>
                                        </div>
                                        <x-base.form.message class="text-(--color) hidden group-[.error]:block">
                                            Invalid internet speed input. Please enter valid numerical values for
                                            Download (Mbps), Upload (Mbps), and Ping (ms).
                                        </x-base.form.message>
                                    </x-base.form.item>
                                </div>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box class="px-6 py-8">
                                    <div class="mb-10 flex justify-center gap-5">
                                        <x-base.badge
                                            class="ring-foreground/15 active [&.active]:ring-5 size-8 cursor-pointer rounded-full [--color:var(--color-danger)]"
                                            data-color-toggle="danger"
                                        />
                                        <x-base.badge
                                            class="ring-foreground/15 [&.active]:ring-5 size-8 cursor-pointer rounded-full [--color:var(--color-success)]"
                                            data-color-toggle="success"
                                        />
                                        <x-base.badge
                                            class="ring-foreground/15 [&.active]:ring-5 size-8 cursor-pointer rounded-full [--color:var(--color-pending)]"
                                            data-color-toggle="pending"
                                        />
                                    </div>
                                    <div class="color-variable flex flex-col gap-8 [--color:var(--color-danger)]">
                                        <x-base.form.item class="error group">
                                            <x-base.label class="opacity-70">Blood
                                                Pressure</x-base.label>
                                            <x-base.form.group>
                                                <x-base.input
                                                    class="group-[.error]:inset-ring inset-ring-(--color)"
                                                    type="text"
                                                    placeholder="Systolic"
                                                />
                                                <x-base.input
                                                    class="group-[.error]:inset-ring inset-ring-(--color)"
                                                    type="text"
                                                    placeholder="Diastolic"
                                                />
                                                <div
                                                    class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center border px-5 [--color:var(--color-foreground)]">
                                                    mmHg</div>
                                            </x-base.form.group>
                                            <x-base.form.message class="text-(--color) hidden group-[.error]:block">
                                                Invalid blood pressure values. Please enter a systolic pressure between 90-180
                                                mmHg and a diastolic pressure between 60-120 mmHg.
                                            </x-base.form.message>
                                        </x-base.form.item>
                                        <x-base.form.item class="error group">
                                            <x-base.label class="opacity-70">Internet
                                                Speed</x-base.label>
                                            <div class="flex gap-4">
                                                <x-base.form.group>
                                                    <x-base.input
                                                        class="group-[.error]:inset-ring inset-ring-(--color)"
                                                        type="text"
                                                        placeholder="Download"
                                                    />
                                                    <div
                                                        class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center border px-5 [--color:var(--color-foreground)]">
                                                        Mbps</div>
                                                </x-base.form.group>
                                                <x-base.form.group>
                                                    <x-base.input
                                                        class="group-[.error]:inset-ring inset-ring-(--color)"
                                                        type="text"
                                                        placeholder="Upload"
                                                    />
                                                    <div
                                                        class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center border px-5 [--color:var(--color-foreground)]">
                                                        Mbps</div>
                                                </x-base.form.group>
                                                <x-base.form.group>
                                                    <x-base.input
                                                        class="group-[.error]:inset-ring inset-ring-(--color)"
                                                        type="text"
                                                        placeholder="Ping"
                                                    />
                                                    <div
                                                        class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center border px-5 [--color:var(--color-foreground)]">
                                                        ms</div>
                                                </x-base.form.group>
                                            </div>
                                            <x-base.form.message class="text-(--color) hidden group-[.error]:block">
                                                Invalid internet speed input. Please enter valid numerical values for
                                                Download (Mbps), Upload (Mbps), and Ping (ms).
                                            </x-base.form.message>
                                        </x-base.form.item>
                                    </div>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Input State -->
        </div>
    </div>
@endsection

@pushOnce('scripts')
    @vite('resources/js/pages/regular-form.js')
@endPushOnce
