@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Form Validation - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Form Validation</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 flex flex-col gap-8 lg:col-span-6">
            <!-- BEGIN: Form Validation -->
            <x-base.box class="p-0">
                <div class="p-5">
                    <x-base.code>
                        <x-base.code.preview>
                            <x-base.box class="px-6 py-8">
                                <form class="form-validation flex flex-col gap-5">
                                    <x-base.form.item class="form-item">
                                        <div class="flex place-content-between items-center">
                                            <x-base.label class="opacity-70">Full Name</x-base.label>
                                            <div class="text-right text-xs opacity-70">Required, at least 2 characters</div>
                                        </div>
                                        <x-base.input
                                            name="fullName"
                                            type="text"
                                            placeholder="John Doe"
                                            minlength="2"
                                            required
                                        />
                                    </x-base.form.item>
                                    <x-base.form.item class="form-item">
                                        <div class="flex place-content-between items-center">
                                            <x-base.label class="opacity-70">Email</x-base.label>
                                            <div class="text-right text-xs opacity-70">Required, email address format</div>
                                        </div>
                                        <x-base.input
                                            name="email"
                                            type="email"
                                            placeholder="johndoe@gmail.com"
                                            required
                                        />
                                    </x-base.form.item>
                                    <x-base.form.item class="form-item">
                                        <div class="flex place-content-between items-center">
                                            <x-base.label class="opacity-70">Password</x-base.label>
                                            <div class="text-right text-xs opacity-70">Required, at least 6 characters</div>
                                        </div>
                                        <x-base.input
                                            name="password"
                                            type="password"
                                            placeholder="secret"
                                            minlength="6"
                                            required
                                        />
                                    </x-base.form.item>
                                    <x-base.form.item class="form-item">
                                        <div class="flex place-content-between items-center">
                                            <x-base.label class="opacity-70">Age</x-base.label>
                                            <div class="text-right text-xs opacity-70">Required, integer only & maximum 3
                                                characters</div>
                                        </div>
                                        <x-base.input
                                            name="age"
                                            type="number"
                                            placeholder="21"
                                            required
                                        />
                                    </x-base.form.item>
                                    <x-base.form.item class="form-item">
                                        <div class="flex place-content-between items-center">
                                            <x-base.label class="opacity-70">Profile Link</x-base.label>
                                            <div class="text-right text-xs opacity-70">Optional, URL format</div>
                                        </div>
                                        <x-base.input
                                            name="profileLink"
                                            type="url"
                                            placeholder="https://google.com"
                                        />
                                    </x-base.form.item>
                                    <x-base.form.item class="form-item">
                                        <div class="flex place-content-between items-center">
                                            <x-base.label class="opacity-70">Comment</x-base.label>
                                            <div class="text-right text-xs opacity-70">Required, at least 10 characters
                                            </div>
                                        </div>
                                        <x-base.textarea
                                            name="comment"
                                            minlength="10"
                                            required
                                            placeholder="Type your comments"
                                        />
                                    </x-base.form.item>
                                    <div class="mt-2 flex gap-3">
                                        <x-base.button
                                            type="submit"
                                            variant="primary"
                                        >
                                            <x-base.lucide icon="Rocket" /> Register Event
                                        </x-base.button>
                                    </div>
                                </form>
                            </x-base.box>
                        </x-base.code.preview>
                        <x-base.code.source>
                            @verbatim
                                <x-base.box class="px-6 py-8">
                                    <form class="form-validation flex flex-col gap-5">
                                        <x-base.form.item class="form-item">
                                            <div class="flex place-content-between items-center">
                                                <x-base.label class="opacity-70">Full Name</x-base.label>
                                                <div class="text-right text-xs opacity-70">Required, at least 2 characters</div>
                                            </div>
                                            <x-base.input
                                                name="fullName"
                                                type="text"
                                                placeholder="John Doe"
                                                minlength="2"
                                                required
                                            />
                                        </x-base.form.item>
                                        <x-base.form.item class="form-item">
                                            <div class="flex place-content-between items-center">
                                                <x-base.label class="opacity-70">Email</x-base.label>
                                                <div class="text-right text-xs opacity-70">Required, email address format</div>
                                            </div>
                                            <x-base.input
                                                name="email"
                                                type="email"
                                                placeholder="johndoe@gmail.com"
                                                required
                                            />
                                        </x-base.form.item>
                                        <x-base.form.item class="form-item">
                                            <div class="flex place-content-between items-center">
                                                <x-base.label class="opacity-70">Password</x-base.label>
                                                <div class="text-right text-xs opacity-70">Required, at least 6 characters</div>
                                            </div>
                                            <x-base.input
                                                name="password"
                                                type="password"
                                                placeholder="secret"
                                                minlength="6"
                                                required
                                            />
                                        </x-base.form.item>
                                        <x-base.form.item class="form-item">
                                            <div class="flex place-content-between items-center">
                                                <x-base.label class="opacity-70">Age</x-base.label>
                                                <div class="text-right text-xs opacity-70">Required, integer only & maximum 3
                                                    characters</div>
                                            </div>
                                            <x-base.input
                                                name="age"
                                                type="number"
                                                placeholder="21"
                                                required
                                            />
                                        </x-base.form.item>
                                        <x-base.form.item class="form-item">
                                            <div class="flex place-content-between items-center">
                                                <x-base.label class="opacity-70">Profile Link</x-base.label>
                                                <div class="text-right text-xs opacity-70">Optional, URL format</div>
                                            </div>
                                            <x-base.input
                                                name="profileLink"
                                                type="url"
                                                placeholder="https://google.com"
                                            />
                                        </x-base.form.item>
                                        <x-base.form.item class="form-item">
                                            <div class="flex place-content-between items-center">
                                                <x-base.label class="opacity-70">Comment</x-base.label>
                                                <div class="text-right text-xs opacity-70">Required, at least 10 characters
                                                </div>
                                            </div>
                                            <x-base.textarea
                                                name="comment"
                                                minlength="10"
                                                required
                                                placeholder="Type your comments"
                                            />
                                        </x-base.form.item>
                                        <div class="mt-2 flex gap-3">
                                            <x-base.button
                                                type="submit"
                                                variant="primary"
                                            >
                                                <x-base.lucide icon="Rocket" /> Register Event
                                            </x-base.button>
                                        </div>
                                    </form>
                                </x-base.box>
                            @endverbatim
                        </x-base.code.source>
                    </x-base.code>
                </div>
            </x-base.box>
            <!-- END: Form Validation -->
        </div>
    </div>
@endsection

@pushOnce('vendors')
    @vite('resources/js/vendors/pristine.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/pages/form-validation.js')
@endPushOnce
