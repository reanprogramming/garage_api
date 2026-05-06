@extends('../themes/base')

@section('head')
    <title>Error Page - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('content')
    <div @class([
        'relative py-2',
        'before:bg-primary dark:before:bg-foreground/[.01] before:fixed before:inset-0 before:bg-noise',
        'after:bg-accent after:bg-contain after:fixed after:inset-0 after:blur-xl dark:after:opacity-20',
    ])>
        <div class="container relative z-10 mx-auto">
            <!-- BEGIN: Error Page -->
            <div class="flex h-screen flex-col items-center justify-center text-center lg:flex-row lg:text-left">
                <div class="lg:mr-20">
                    <img
                        class="h-48 w-[450px] lg:h-auto"
                        src="{{ Vite::asset('resources/images/error-illustration.svg') }}"
                        alt="Midone - Tailwind Admin Dashboard Template"
                    />
                </div>
                <div class="mt-10 text-white lg:mt-0">
                    <div class="text-9xl [text-shadow:_7px_7px_--alpha(var(--color-white)_/_20%)]">404</div>
                    <div class="mt-8 text-xl font-medium lg:text-2xl">
                        Oops. This page has gone missing.
                    </div>
                    <div class="mt-3 text-base opacity-70">
                        You may have mistyped the address or the page may have moved.
                    </div>
                    <x-base.button
                        class="box mt-10 border-white bg-transparent px-7 py-6 text-white"
                        href=""
                        as="a"
                    >
                        Back to Home
                    </x-base.button>
                </div>
            </div>
            <!-- END: Error Page -->
        </div>
    </div>
@endsection
