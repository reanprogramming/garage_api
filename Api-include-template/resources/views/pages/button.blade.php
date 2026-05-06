@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Button - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Button</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Basic Button -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Basic Button</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box class="flex flex-wrap gap-3">
                                <x-base.button
                                    class="min-w-32"
                                    type="button"
                                    variant="primary"
                                >
                                    <x-base.lucide icon="Compass" /> Primary
                                </x-base.button>
                                <x-base.button
                                    class="min-w-32"
                                    type="button"
                                    variant="secondary"
                                >
                                    <x-base.lucide icon="Compass" /> Secondary
                                </x-base.button>
                                <x-base.button
                                    class="min-w-32"
                                    type="button"
                                    variant="success"
                                >
                                    <x-base.lucide icon="Compass" /> Success
                                </x-base.button>
                                <x-base.button
                                    class="min-w-32"
                                    type="button"
                                    variant="warning"
                                >
                                    <x-base.lucide icon="Compass" /> Warning
                                </x-base.button>
                                <x-base.button
                                    class="min-w-32"
                                    type="button"
                                    variant="pending"
                                >
                                    <x-base.lucide icon="Compass" /> Pending
                                </x-base.button>
                                <x-base.button
                                    class="min-w-32"
                                    type="button"
                                    variant="danger"
                                >
                                    <x-base.lucide icon="Compass" /> Danger
                                </x-base.button>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box class="flex flex-wrap gap-3">
                                    <x-base.button
                                        class="min-w-32"
                                        type="button"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="Compass" /> Primary
                                    </x-base.button>
                                    <x-base.button
                                        class="min-w-32"
                                        type="button"
                                        variant="secondary"
                                    >
                                        <x-base.lucide icon="Compass" /> Secondary
                                    </x-base.button>
                                    <x-base.button
                                        class="min-w-32"
                                        type="button"
                                        variant="success"
                                    >
                                        <x-base.lucide icon="Compass" /> Success
                                    </x-base.button>
                                    <x-base.button
                                        class="min-w-32"
                                        type="button"
                                        variant="warning"
                                    >
                                        <x-base.lucide icon="Compass" /> Warning
                                    </x-base.button>
                                    <x-base.button
                                        class="min-w-32"
                                        type="button"
                                        variant="pending"
                                    >
                                        <x-base.lucide icon="Compass" /> Pending
                                    </x-base.button>
                                    <x-base.button
                                        class="min-w-32"
                                        type="button"
                                        variant="danger"
                                    >
                                        <x-base.lucide icon="Compass" /> Danger
                                    </x-base.button>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Basic Button -->
            <!-- BEGIN: Button Size -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Button Size</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <div class="flex flex-col gap-y-8">
                                <x-base.box class="space-y-5 divide-y">
                                    <div class="pb-3 text-base font-medium">Small</div>
                                    <div class="flex flex-wrap gap-3">
                                        <x-base.button
                                            class="min-w-32"
                                            type="button"
                                            variant="primary"
                                            size="sm"
                                        >
                                            <x-base.lucide icon="Compass" /> Primary
                                        </x-base.button>
                                        <x-base.button
                                            class="min-w-32"
                                            type="button"
                                            variant="secondary"
                                            size="sm"
                                        >
                                            <x-base.lucide icon="Compass" /> Secondary
                                        </x-base.button>
                                        <x-base.button
                                            class="min-w-32"
                                            type="button"
                                            variant="success"
                                            size="sm"
                                        >
                                            <x-base.lucide icon="Compass" /> Success
                                        </x-base.button>
                                        <x-base.button
                                            class="min-w-32"
                                            type="button"
                                            variant="warning"
                                            size="sm"
                                        >
                                            <x-base.lucide icon="Compass" /> Warning
                                        </x-base.button>
                                        <x-base.button
                                            class="min-w-32"
                                            type="button"
                                            variant="pending"
                                            size="sm"
                                        >
                                            <x-base.lucide icon="Compass" /> Pending
                                        </x-base.button>
                                        <x-base.button
                                            class="min-w-32"
                                            type="button"
                                            variant="danger"
                                            size="sm"
                                        >
                                            <x-base.lucide icon="Compass" /> Danger
                                        </x-base.button>
                                    </div>
                                </x-base.box>
                                <x-base.box class="space-y-5 divide-y">
                                    <div class="pb-3 text-base font-medium">Default</div>
                                    <div class="flex flex-wrap gap-3">
                                        <x-base.button
                                            class="min-w-32"
                                            type="button"
                                            variant="primary"
                                        >
                                            <x-base.lucide icon="Compass" /> Primary
                                        </x-base.button>
                                        <x-base.button
                                            class="min-w-32"
                                            type="button"
                                            variant="secondary"
                                        >
                                            <x-base.lucide icon="Compass" /> Secondary
                                        </x-base.button>
                                        <x-base.button
                                            class="min-w-32"
                                            type="button"
                                            variant="success"
                                        >
                                            <x-base.lucide icon="Compass" /> Success
                                        </x-base.button>
                                        <x-base.button
                                            class="min-w-32"
                                            type="button"
                                            variant="warning"
                                        >
                                            <x-base.lucide icon="Compass" /> Warning
                                        </x-base.button>
                                        <x-base.button
                                            class="min-w-32"
                                            type="button"
                                            variant="pending"
                                        >
                                            <x-base.lucide icon="Compass" /> Pending
                                        </x-base.button>
                                        <x-base.button
                                            class="min-w-32"
                                            type="button"
                                            variant="danger"
                                        >
                                            <x-base.lucide icon="Compass" /> Danger
                                        </x-base.button>
                                    </div>
                                </x-base.box>
                                <x-base.box class="space-y-5 divide-y">
                                    <div class="pb-3 text-base font-medium">Large</div>
                                    <div class="flex flex-wrap gap-3">
                                        <x-base.button
                                            class="min-w-32"
                                            type="button"
                                            variant="primary"
                                            size="lg"
                                        >
                                            <x-base.lucide icon="Compass" /> Primary
                                        </x-base.button>
                                        <x-base.button
                                            class="min-w-32"
                                            type="button"
                                            variant="secondary"
                                            size="lg"
                                        >
                                            <x-base.lucide icon="Compass" /> Secondary
                                        </x-base.button>
                                        <x-base.button
                                            class="min-w-32"
                                            type="button"
                                            variant="success"
                                            size="lg"
                                        >
                                            <x-base.lucide icon="Compass" /> Success
                                        </x-base.button>
                                        <x-base.button
                                            class="min-w-32"
                                            type="button"
                                            variant="warning"
                                            size="lg"
                                        >
                                            <x-base.lucide icon="Compass" /> Warning
                                        </x-base.button>
                                        <x-base.button
                                            class="min-w-32"
                                            type="button"
                                            variant="pending"
                                            size="lg"
                                        >
                                            <x-base.lucide icon="Compass" /> Pending
                                        </x-base.button>
                                        <x-base.button
                                            class="min-w-32"
                                            type="button"
                                            variant="danger"
                                            size="lg"
                                        >
                                            <x-base.lucide icon="Compass" /> Danger
                                        </x-base.button>
                                    </div>
                                </x-base.box>
                            </div>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <div class="flex flex-col gap-y-8">
                                    <x-base.box class="space-y-5 divide-y">
                                        <div class="pb-3 text-base font-medium">Small</div>
                                        <div class="flex flex-wrap gap-3">
                                            <x-base.button
                                                class="min-w-32"
                                                type="button"
                                                variant="primary"
                                                size="sm"
                                            >
                                                <x-base.lucide icon="Compass" /> Primary
                                            </x-base.button>
                                            <x-base.button
                                                class="min-w-32"
                                                type="button"
                                                variant="secondary"
                                                size="sm"
                                            >
                                                <x-base.lucide icon="Compass" /> Secondary
                                            </x-base.button>
                                            <x-base.button
                                                class="min-w-32"
                                                type="button"
                                                variant="success"
                                                size="sm"
                                            >
                                                <x-base.lucide icon="Compass" /> Success
                                            </x-base.button>
                                            <x-base.button
                                                class="min-w-32"
                                                type="button"
                                                variant="warning"
                                                size="sm"
                                            >
                                                <x-base.lucide icon="Compass" /> Warning
                                            </x-base.button>
                                            <x-base.button
                                                class="min-w-32"
                                                type="button"
                                                variant="pending"
                                                size="sm"
                                            >
                                                <x-base.lucide icon="Compass" /> Pending
                                            </x-base.button>
                                            <x-base.button
                                                class="min-w-32"
                                                type="button"
                                                variant="danger"
                                                size="sm"
                                            >
                                                <x-base.lucide icon="Compass" /> Danger
                                            </x-base.button>
                                        </div>
                                    </x-base.box>
                                    <x-base.box class="space-y-5 divide-y">
                                        <div class="pb-3 text-base font-medium">Default</div>
                                        <div class="flex flex-wrap gap-3">
                                            <x-base.button
                                                class="min-w-32"
                                                type="button"
                                                variant="primary"
                                            >
                                                <x-base.lucide icon="Compass" /> Primary
                                            </x-base.button>
                                            <x-base.button
                                                class="min-w-32"
                                                type="button"
                                                variant="secondary"
                                            >
                                                <x-base.lucide icon="Compass" /> Secondary
                                            </x-base.button>
                                            <x-base.button
                                                class="min-w-32"
                                                type="button"
                                                variant="success"
                                            >
                                                <x-base.lucide icon="Compass" /> Success
                                            </x-base.button>
                                            <x-base.button
                                                class="min-w-32"
                                                type="button"
                                                variant="warning"
                                            >
                                                <x-base.lucide icon="Compass" /> Warning
                                            </x-base.button>
                                            <x-base.button
                                                class="min-w-32"
                                                type="button"
                                                variant="pending"
                                            >
                                                <x-base.lucide icon="Compass" /> Pending
                                            </x-base.button>
                                            <x-base.button
                                                class="min-w-32"
                                                type="button"
                                                variant="danger"
                                            >
                                                <x-base.lucide icon="Compass" /> Danger
                                            </x-base.button>
                                        </div>
                                    </x-base.box>
                                    <x-base.box class="space-y-5 divide-y">
                                        <div class="pb-3 text-base font-medium">Large</div>
                                        <div class="flex flex-wrap gap-3">
                                            <x-base.button
                                                class="min-w-32"
                                                type="button"
                                                variant="primary"
                                                size="lg"
                                            >
                                                <x-base.lucide icon="Compass" /> Primary
                                            </x-base.button>
                                            <x-base.button
                                                class="min-w-32"
                                                type="button"
                                                variant="secondary"
                                                size="lg"
                                            >
                                                <x-base.lucide icon="Compass" /> Secondary
                                            </x-base.button>
                                            <x-base.button
                                                class="min-w-32"
                                                type="button"
                                                variant="success"
                                                size="lg"
                                            >
                                                <x-base.lucide icon="Compass" /> Success
                                            </x-base.button>
                                            <x-base.button
                                                class="min-w-32"
                                                type="button"
                                                variant="warning"
                                                size="lg"
                                            >
                                                <x-base.lucide icon="Compass" /> Warning
                                            </x-base.button>
                                            <x-base.button
                                                class="min-w-32"
                                                type="button"
                                                variant="pending"
                                                size="lg"
                                            >
                                                <x-base.lucide icon="Compass" /> Pending
                                            </x-base.button>
                                            <x-base.button
                                                class="min-w-32"
                                                type="button"
                                                variant="danger"
                                                size="lg"
                                            >
                                                <x-base.lucide icon="Compass" /> Danger
                                            </x-base.button>
                                        </div>
                                    </x-base.box>
                                </div>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Button Size -->
            <!-- BEGIN: Filled Button -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Filled Button</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box class="flex flex-wrap gap-3">
                                <x-base.button
                                    class="min-w-32"
                                    type="button"
                                    variant="primary"
                                    filled
                                >
                                    <x-base.lucide icon="Compass" /> Primary
                                </x-base.button>
                                <x-base.button
                                    class="min-w-32"
                                    type="button"
                                    variant="secondary"
                                    filled
                                >
                                    <x-base.lucide icon="Compass" /> Secondary
                                </x-base.button>
                                <x-base.button
                                    class="min-w-32"
                                    type="button"
                                    variant="success"
                                    filled
                                >
                                    <x-base.lucide icon="Compass" /> Success
                                </x-base.button>
                                <x-base.button
                                    class="min-w-32"
                                    type="button"
                                    variant="warning"
                                    filled
                                >
                                    <x-base.lucide icon="Compass" /> Warning
                                </x-base.button>
                                <x-base.button
                                    class="min-w-32"
                                    type="button"
                                    variant="pending"
                                    filled
                                >
                                    <x-base.lucide icon="Compass" /> Pending
                                </x-base.button>
                                <x-base.button
                                    class="min-w-32"
                                    type="button"
                                    variant="danger"
                                    filled
                                >
                                    <x-base.lucide icon="Compass" /> Danger
                                </x-base.button>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim

                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Filled Button -->
        </div>
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Loading State Button -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Loading State Button</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box class="flex flex-wrap gap-3">
                                <x-base.button
                                    class="min-w-32"
                                    type="button"
                                    variant="primary"
                                >
                                    <div class="loader-dots ![--color:--alpha(var(--color-primary)/80%)]"></div>
                                    Loading...
                                </x-base.button>
                                <x-base.button
                                    class="min-w-32"
                                    type="button"
                                    variant="secondary"
                                >
                                    <div class="loader-spinner ![--color:--alpha(var(--color-foreground)/80%)]"></div>
                                    Loading...
                                </x-base.button>
                                <x-base.button
                                    class="min-w-32"
                                    type="button"
                                    variant="success"
                                >
                                    <div class="loader-dots ![--color:--alpha(var(--color-success)/80%)]"></div>
                                    Loading...
                                </x-base.button>
                                <x-base.button
                                    class="min-w-32"
                                    type="button"
                                    variant="warning"
                                >
                                    <div class="loader-spinner ![--color:--alpha(var(--color-warning)/80%)]"></div>
                                    Loading...
                                </x-base.button>
                                <x-base.button
                                    class="min-w-32"
                                    type="button"
                                    variant="pending"
                                >
                                    <div class="loader-dots ![--color:--alpha(var(--color-pending)/80%)]"></div>
                                    Loading...
                                </x-base.button>
                                <x-base.button
                                    class="min-w-32"
                                    type="button"
                                    variant="danger"
                                >
                                    <div class="loader-spinner ![--color:--alpha(var(--color-danger)/80%)]"></div>
                                    Loading...
                                </x-base.button>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box class="flex flex-wrap gap-3">
                                    <x-base.button
                                        class="min-w-32"
                                        type="button"
                                        variant="primary"
                                    >
                                        <div class="loader-dots ![--color:--alpha(var(--color-primary)/80%)]"></div>
                                        Loading...
                                    </x-base.button>
                                    <x-base.button
                                        class="min-w-32"
                                        type="button"
                                        variant="secondary"
                                    >
                                        <div class="loader-spinner ![--color:--alpha(var(--color-foreground)/80%)]"></div>
                                        Loading...
                                    </x-base.button>
                                    <x-base.button
                                        class="min-w-32"
                                        type="button"
                                        variant="success"
                                    >
                                        <div class="loader-dots ![--color:--alpha(var(--color-success)/80%)]"></div>
                                        Loading...
                                    </x-base.button>
                                    <x-base.button
                                        class="min-w-32"
                                        type="button"
                                        variant="warning"
                                    >
                                        <div class="loader-spinner ![--color:--alpha(var(--color-warning)/80%)]"></div>
                                        Loading...
                                    </x-base.button>
                                    <x-base.button
                                        class="min-w-32"
                                        type="button"
                                        variant="pending"
                                    >
                                        <div class="loader-dots ![--color:--alpha(var(--color-pending)/80%)]"></div>
                                        Loading...
                                    </x-base.button>
                                    <x-base.button
                                        class="min-w-32"
                                        type="button"
                                        variant="danger"
                                    >
                                        <div class="loader-spinner ![--color:--alpha(var(--color-danger)/80%)]"></div>
                                        Loading...
                                    </x-base.button>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Loading State Button -->
            <!-- BEGIN: Rounded Button -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Rounded Button</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box class="flex flex-wrap gap-3">
                                <x-base.button
                                    class="min-w-32 rounded-full"
                                    type="button"
                                    variant="primary"
                                >
                                    <x-base.lucide icon="Compass" /> Primary
                                </x-base.button>
                                <x-base.button
                                    class="min-w-32 rounded-full"
                                    type="button"
                                    variant="secondary"
                                >
                                    <x-base.lucide icon="Compass" /> Secondary
                                </x-base.button>
                                <x-base.button
                                    class="min-w-32 rounded-full"
                                    type="button"
                                    variant="success"
                                >
                                    <x-base.lucide icon="Compass" /> Success
                                </x-base.button>
                                <x-base.button
                                    class="min-w-32 rounded-full"
                                    type="button"
                                    variant="warning"
                                >
                                    <x-base.lucide icon="Compass" /> Warning
                                </x-base.button>
                                <x-base.button
                                    class="min-w-32 rounded-full"
                                    type="button"
                                    variant="pending"
                                >
                                    <x-base.lucide icon="Compass" /> Pending
                                </x-base.button>
                                <x-base.button
                                    class="min-w-32 rounded-full"
                                    type="button"
                                    variant="danger"
                                >
                                    <x-base.lucide icon="Compass" /> Danger
                                </x-base.button>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box class="flex flex-wrap gap-3">
                                    <x-base.button
                                        class="min-w-32 rounded-full"
                                        type="button"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="Compass" /> Primary
                                    </x-base.button>
                                    <x-base.button
                                        class="min-w-32 rounded-full"
                                        type="button"
                                        variant="secondary"
                                    >
                                        <x-base.lucide icon="Compass" /> Secondary
                                    </x-base.button>
                                    <x-base.button
                                        class="min-w-32 rounded-full"
                                        type="button"
                                        variant="success"
                                    >
                                        <x-base.lucide icon="Compass" /> Success
                                    </x-base.button>
                                    <x-base.button
                                        class="min-w-32 rounded-full"
                                        type="button"
                                        variant="warning"
                                    >
                                        <x-base.lucide icon="Compass" /> Warning
                                    </x-base.button>
                                    <x-base.button
                                        class="min-w-32 rounded-full"
                                        type="button"
                                        variant="pending"
                                    >
                                        <x-base.lucide icon="Compass" /> Pending
                                    </x-base.button>
                                    <x-base.button
                                        class="min-w-32 rounded-full"
                                        type="button"
                                        variant="danger"
                                    >
                                        <x-base.lucide icon="Compass" /> Danger
                                    </x-base.button>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Rounded Button -->
            <!-- BEGIN: Icon Button -->
            <x-base.box class="p-0">
                <div class="flex flex-col items-center border-b p-5 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Icon Button</h2>
                </div>
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box class="flex flex-wrap gap-3">
                                <x-base.button
                                    type="button"
                                    variant="primary"
                                >
                                    <x-base.lucide icon="Trello" />
                                </x-base.button>
                                <x-base.button
                                    type="button"
                                    variant="secondary"
                                >
                                    <x-base.lucide icon="Dribbble" />
                                </x-base.button>
                                <x-base.button
                                    type="button"
                                    variant="success"
                                >
                                    <x-base.lucide icon="Instagram" />
                                </x-base.button>
                                <x-base.button
                                    type="button"
                                    variant="warning"
                                >
                                    <x-base.lucide icon="Chrome" />
                                </x-base.button>
                                <x-base.button
                                    type="button"
                                    variant="pending"
                                >
                                    <x-base.lucide icon="Twitch" />
                                </x-base.button>
                                <x-base.button
                                    type="button"
                                    variant="danger"
                                >
                                    <x-base.lucide icon="Slack" />
                                </x-base.button>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box class="flex flex-wrap gap-3">
                                    <x-base.button
                                        type="button"
                                        variant="primary"
                                    >
                                        <x-base.lucide icon="Trello" />
                                    </x-base.button>
                                    <x-base.button
                                        type="button"
                                        variant="secondary"
                                    >
                                        <x-base.lucide icon="Dribbble" />
                                    </x-base.button>
                                    <x-base.button
                                        type="button"
                                        variant="success"
                                    >
                                        <x-base.lucide icon="Instagram" />
                                    </x-base.button>
                                    <x-base.button
                                        type="button"
                                        variant="warning"
                                    >
                                        <x-base.lucide icon="Chrome" />
                                    </x-base.button>
                                    <x-base.button
                                        type="button"
                                        variant="pending"
                                    >
                                        <x-base.lucide icon="Twitch" />
                                    </x-base.button>
                                    <x-base.button
                                        type="button"
                                        variant="danger"
                                    >
                                        <x-base.lucide icon="Slack" />
                                    </x-base.button>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Icon Button -->
        </div>
    </div>
@endsection
