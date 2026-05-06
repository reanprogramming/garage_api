@extends('../themes/base')

@section('head')
    <title>{{ env('APP_NAME') }}-Login</title>
@endsection

@section('content')
    <div @class([
        'relative h-screen lg:overflow-hidden bg-primary bg-noise xl:bg-background xl:bg-none',
        'before:hidden before:xl:block before:content-[\'\'] before:w-[57%] before:-mt-[28%] before:-mb-[16%] before:-ml-[12%] before:absolute before:inset-y-0 before:left-0 before:transform before:rotate-[6deg] before:bg-primary/[.95] before:bg-noise before:rounded-[35%]',
        'after:hidden after:xl:block after:content-[\'\'] after:w-[57%] after:-mt-[28%] after:-mb-[16%] after:-ml-[12%] after:absolute after:inset-y-0 after:left-0 after:transform after:rotate-[6deg] after:border after:bg-accent after:bg-cover after:blur-xl after:rounded-[35%] after:border-[20px] after:border-primary',
    ])>
        <div @class([
            'p-3 sm:px-8 relative h-full',
            'before:hidden before:xl:block before:w-[57%] before:-mt-[20%] before:-mb-[13%] before:-ml-[12%] before:absolute before:inset-y-0 before:left-0 before:transform before:rotate-[-6deg] before:bg-primary/40 before:bg-noise before:border before:border-primary/50 before:opacity-60 before:rounded-[20%]',
        ])>
            <div class="container relative z-10 mx-auto sm:px-20">
                <div class="block grid-cols-2 gap-4 xl:grid">
                    <!-- BEGIN: Login Info -->
                    <div class="hidden min-h-screen flex-col xl:flex">
                        <a
                            class="flex items-center pt-10"
                            href=""
                        >
                            <img
                                class="w-6"
                                src="{{ Vite::asset('resources/images/logo.svg') }}"
                                alt="Midone - Tailwind Admin Dashboard Template"
                            />
                            <span class="ml-3 text-xl font-medium text-white">
                                {{ env('APP_NAME') }} <span class="font-light opacity-70">Admin</span>
                            </span>
                        </a>
                        <div class="my-auto">
                            <img
                                class="-mt-16 w-1/2"
                                src="{{ Vite::asset('resources/images/illustration.svg') }}"
                                alt="Midone - Tailwind Admin Dashboard Template"
                            />
                            <div class="mt-10 text-4xl font-medium leading-tight text-white">
                                A few more clicks to <br />
                                sign in to your account.
                            </div>
                            <div class="mt-5 text-lg text-white opacity-60">
                                Manage all your e-commerce accounts in one place
                            </div>
                        </div>
                    </div>
                    <!-- END: Login Info -->
                    <!-- BEGIN: Login Form -->
                    <div class="my-10 flex h-screen py-5 xl:my-0 xl:h-auto xl:py-0">
                        <x-base.box
                            class="mx-auto my-auto w-full px-5 py-8 sm:w-3/4 sm:px-8 lg:w-2/4 xl:ml-24 xl:w-auto xl:p-0 xl:before:hidden xl:after:hidden"
                        >
                            <h2 class="text-center text-2xl font-semibold xl:text-left xl:text-3xl">
                                Sign In
                            </h2>
                            <div class="mt-2 text-center opacity-70 xl:hidden">
                                A few more clicks to sign in to your account. Manage all your
                                e-commerce accounts in one place
                            </div>
                            <div class="mt-8 flex flex-col gap-5">
                                <x-base.input
                                    class="box block min-w-full px-5 py-6 xl:min-w-[28rem]"
                                    type="text"
                                    value="joincoder@toanchet.com"
                                    placeholder="Email"
                                />
                                <x-base.input
                                    class="box block min-w-full px-5 py-6 xl:min-w-[28rem]"
                                    type="password"
                                    value="123456"
                                    placeholder="Password"
                                />
                                <div class="flex text-xs sm:text-sm">
                                    <x-base.form.item class="mr-auto flex-row items-center">
                                        <x-base.checkbox
                                            id="remember-me"
                                            type="checkbox"
                                        />
                                        <x-base.label
                                            class="opacity-70"
                                            for="remember-me"
                                        >
                                            Remember me
                                        </x-base.label>
                                    </x-base.form.item>
                                    <a
                                        class="opacity-70"
                                        href=""
                                    >Forgot Password?</a>
                                </div>
                            </div>
                            <div class="mt-5 text-center xl:mt-10 xl:text-left">
                                <x-base.button
                                    class="login-button box w-full px-4 py-5"
                                    variant="primary"
                                >Login</x-base.button>
                                <x-base.button class="box mt-4 w-full px-4 py-5">
                                    Register
                                </x-base.button>
                            </div>
                            <div class="mt-10 text-center opacity-70 xl:mt-24 xl:text-left">
                                By signin up, you agree to our
                                <a
                                    class="text-primary"
                                    href=""
                                >
                                    Terms and Conditions
                                </a>
                                &
                                <a
                                    class="text-primary"
                                    href=""
                                >
                                    Privacy Policy
                                </a>
                            </div>
                        </x-base.box>
                    </div>
                    <!-- END: Login Form -->
                </div>
            </div>
        </div>
    </div>
@endsection

@pushOnce('vendors')
    @vite('resources/js/pages/login.js')
@endPushOnce
