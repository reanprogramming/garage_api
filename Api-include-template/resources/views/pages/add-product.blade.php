@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>CRUD Form - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Add Product</h2>
    </div>
    <div class="mt-5 grid grid-cols-11 gap-x-6 pb-20">
        <!-- BEGIN: Notification -->
        <x-base.alert
            class="before:bg-(--color)/5 before:border-(--color)/15 after:bg-(--color)/10 after:border-(--color)/20 col-span-11 mb-8 border-transparent bg-transparent [--color:var(--color-primary)]"
            variant="primary"
            dismissible
            as="x-base.box"
        >
            <span>
                <x-base.lucide
                    class="mr-2 size-4"
                    icon="Info"
                />
            </span>
            <span>
                Starting May 10, 2024, there will be changes to the Terms & Conditions
                regarding the number of products that may be added by the Seller.
                <a
                    class="decoration-(--color)/70 underline-offset-3 ml-1 font-medium underline decoration-dotted"
                    href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820"
                    target="blank"
                >
                    Learn More
                </a>
            </span>
        </x-base.alert>
        <!-- BEGIN: Notification -->
        <div class="col-span-11 2xl:col-span-9">
            <!-- BEGIN: Upload Product -->
            <x-base.box>
                <div class="rounded-lg border p-5">
                    <div class="flex items-center border-b pb-5 text-base font-medium">
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="ChevronDown"
                        /> Upload Product
                    </div>
                    <div class="mt-5 flex flex-col gap-5">
                        <div class="mb-5 flex items-center">
                            <span>
                                <x-base.lucide
                                    class="text-warning h-5 w-5"
                                    icon="Lightbulb"
                                />
                            </span>
                            <div class="ml-2">
                                <span class="mr-1 opacity-70">
                                    Avoid selling counterfeit products / violating Intellectual
                                    Property Rights, so that your products are not deleted.
                                </span>
                                <a
                                    class="text-primary font-medium"
                                    href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820"
                                    target="blank"
                                >
                                    Learn More
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-col items-start xl:flex-row">
                            <div class="w-full xl:mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Product Photos</div>
                                        <x-base.badge
                                            class="bg-(--color)/5 border-(--color)/15 ml-3">Required</x-base.badge>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed opacity-70">
                                        <div>
                                            The image format is .jpg .jpeg .png and a minimum size of
                                            300 x 300 pixels (For optimal images use a minimum size of
                                            700 x 700 pixels).
                                        </div>
                                        <div class="mt-2">
                                            Select product photos or drag and drop up to 5 photos at
                                            once here. Include min. 3 attractive photos to make the
                                            product more attractive to buyers.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="rounded-xl border-2 border-dashed pt-4">
                                    <div class="grid grid-cols-10 gap-5 pl-4 pr-5">
                                        @foreach (array_slice($fakers, 0, 5) as $faker)
                                            <div
                                                class="image-fit relative col-span-5 h-28 cursor-pointer md:col-span-2"
                                                v-for="(faker, fakerKey) in _.take(fakerData, 5)"
                                                :key="fakerKey"
                                            >
                                                <img
                                                    class="rounded-xl"
                                                    src="{{ Vite::asset($faker['images'][0]) }}"
                                                    alt="Midone - Tailwind Admin Dashboard Template"
                                                />
                                                <x-base.tooltip
                                                    class="bg-(--color)/80 border-(--color) text-medium absolute right-0 top-0 -mr-2 -mt-2 flex size-5 items-center justify-center rounded-full text-white [--color:var(--color-danger)]"
                                                    content="Remove this image?"
                                                >
                                                    <x-base.lucide
                                                        class="size-4"
                                                        icon="X"
                                                    />
                                                </x-base.tooltip>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="relative mt-5 flex cursor-pointer items-center justify-center px-4 pb-4">
                                        <x-base.lucide
                                            class="mr-2 size-4"
                                            icon="Image"
                                        />
                                        <span class="text-primary mr-1"> Upload a file </span>
                                        or drag and drop
                                        <x-base.input
                                            class="absolute left-0 top-0 h-full w-full opacity-0"
                                            id="horizontal-form-1"
                                            type="file"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </x-base.box>
            <!-- END: Upload Product -->
            <!-- BEGIN: Product Information -->
            <x-base.box class="mt-8">
                <div class="rounded-lg border p-5">
                    <div class="flex items-center border-b pb-5 text-base font-medium">
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="ChevronDown"
                        /> Product
                        Information
                    </div>
                    <div class="mt-5 flex flex-col gap-5">
                        <div class="flex flex-col items-start xl:flex-row">
                            <div class="w-full xl:mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Product Photos</div>
                                        <x-base.badge
                                            class="bg-(--color)/5 border-(--color)/15 ml-3">Required</x-base.badge>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed opacity-70">
                                        Include min. 40 characters to make it more attractive and
                                        easy for buyers to find, consisting of product type, brand,
                                        and information such as color, material, or type.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.form.item>
                                    <x-base.input
                                        type="text"
                                        placeholder="Product name"
                                    />
                                    <x-base.form.description class="text-right">Maximum character
                                        0/70</x-base.form.description>
                                </x-base.form.item>
                            </div>
                        </div>
                        <div class="flex flex-col items-start xl:flex-row">
                            <div class="w-full xl:mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Category</div>
                                        <x-base.badge
                                            class="bg-(--color)/5 border-(--color)/15 ml-3">Required</x-base.badge>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.select>
                                    @foreach (array_slice($fakers, 0, 9) as $faker)
                                        <option
                                            value="{{ $faker['categories'][0]['name'] }}"
                                            selected
                                        >{{ $faker['categories'][0]['name'] }}</option>
                                    @endforeach
                                </x-base.select>
                            </div>
                        </div>
                        <div class="flex flex-col items-start xl:flex-row">
                            <div class="w-full xl:mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Subcategory</div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed opacity-70">
                                        You can add a new subcategory or choose from the existing
                                        subcategory list.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.select>
                                    @foreach (array_slice($fakers, 0, 2) as $faker)
                                        <option
                                            value="{{ $faker['categories'][0]['name'] }}"
                                            selected
                                        >{{ $faker['categories'][0]['name'] }}</option>
                                    @endforeach
                                </x-base.select>
                            </div>
                        </div>
                    </div>
                </div>
            </x-base.box>
            <!-- END: Product Information -->
            <!-- BEGIN: Product Detail -->
            <x-base.box class="mt-8">
                <div class="rounded-lg border p-5">
                    <div class="flex items-center border-b pb-5 text-base font-medium">
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="ChevronDown"
                        /> Product Detail
                    </div>
                    <div class="mt-5 flex flex-col gap-5">
                        <div class="flex flex-col items-start xl:flex-row">
                            <div class="w-full xl:mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Condition</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.radio-group class="w-40 grid-cols-2">
                                    <div class="flex items-center space-x-2">
                                        <x-base.radio-group.item
                                            id="r1"
                                            name="condition"
                                            value="new"
                                        />
                                        <x-base.label for="r1">New</x-base.label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <x-base.radio-group.item
                                            id="r2"
                                            name="condition"
                                            value="used"
                                        />
                                        <x-base.label for="r2">Used</x-base.label>
                                    </div>
                                </x-base.radio-group>
                            </div>
                        </div>
                        <div class="flex flex-col items-start xl:flex-row">
                            <div class="w-full xl:mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Product Description</div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed opacity-70">
                                        <div>
                                            Make sure the product description provides a detailed
                                            explanation of your product so that it is easy to
                                            understand and find your product.
                                        </div>
                                        <div class="mt-2">
                                            It is recommended not to enter info on mobile numbers,
                                            e-mails, etc. into the product description to protect your
                                            personal data.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.form.item>
                                    <x-base.ckeditor-classic>
                                        <p>Content of the editor.</p>
                                    </x-base.ckeditor-classic>
                                    <x-base.form.description class="text-right">Maximum character
                                        0/2000</x-base.form.description>
                                </x-base.form.item>
                            </div>
                        </div>
                        <div class="flex flex-col items-start xl:flex-row">
                            <div class="w-full xl:mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Product Video</div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed opacity-70">
                                        Add a video so that buyers are more interested in your
                                        product.
                                        <a
                                            class="text-primary font-medium"
                                            href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820"
                                            target="blank"
                                        >
                                            Learn more.
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.button class="w-40">
                                    <x-base.lucide
                                        class="mr-2 size-4"
                                        icon="Plus"
                                    /> Add Video URL
                                </x-base.button>
                            </div>
                        </div>
                    </div>
                </div>
            </x-base.box>
            <!-- END: Product Detail -->
            <!-- BEGIN: Product Variant -->
            <x-base.box class="mt-8">
                <div class="rounded-lg border p-5">
                    <div class="flex items-center border-b pb-5 text-base font-medium">
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="ChevronDown"
                        /> Product Variant
                    </div>
                    <div class="mt-5 flex flex-col gap-5">
                        <div class="flex flex-col items-start xl:flex-row">
                            <div class="w-full">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Product Variant</div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed opacity-70">
                                        Add variants such as color, size, or more. Choose a maximum
                                        of 2 variant types.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="xl:text-right">
                                    <x-base.button
                                        class="w-44"
                                        variant="primary"
                                    >
                                        <x-base.lucide
                                            class="mr-2 size-4"
                                            icon="Plus"
                                        /> Add Variant
                                    </x-base.button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </x-base.box>
            <!-- END: Product Variant -->
            <!-- BEGIN: Product Variant (Details) -->
            <x-base.box class="mt-8">
                <div class="rounded-lg border p-5">
                    <div class="flex items-center border-b pb-5 text-base font-medium">
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="ChevronDown"
                        /> Product Variant
                        (Details)
                    </div>
                    <div class="mt-5 flex flex-col gap-5">
                        <div class="flex flex-col items-start xl:flex-row">
                            <div class="w-full xl:mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Variant 1</div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed opacity-70">
                                        Add the types of variants and options, you can add up to 5
                                        options.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div
                                    class="bg-(--color)/[.03] border-(--color)/5 relative rounded-lg border py-10 pl-5 pr-5 [--color:var(--color-foreground)] xl:pr-10">
                                    <a
                                        class="absolute right-0 top-0 mr-4 mt-4 opacity-70"
                                        href=""
                                    >
                                        <x-base.lucide
                                            class="size-5"
                                            icon="X"
                                        />
                                    </a>
                                    <div class="flex flex-col gap-5">
                                        <div class="grid gap-5 sm:grid-cols-12">
                                            <div class="col-span-2">
                                                <x-base.label class="block sm:mt-3 sm:text-right">Name</x-base.label>
                                            </div>
                                            <div class="col-span-10 grid gap-5">
                                                <div class="grid gap-5 sm:grid-cols-12">
                                                    <div class="col-span-10 flex">
                                                        <x-base.input
                                                            class="rounded-e-none border-e-0"
                                                            type="text"
                                                            placeholder="Size"
                                                        />
                                                        <div
                                                            class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-r-lg border [--color:var(--color-foreground)]">
                                                            6/14</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid gap-5 sm:grid-cols-12">
                                            <div class="col-span-2">
                                                <x-base.label class="block sm:mt-3 sm:text-right">Options</x-base.label>
                                            </div>
                                            <div class="col-span-10 grid gap-5">
                                                <div class="grid gap-5 sm:grid-cols-12">
                                                    <div class="col-span-10 flex">
                                                        <x-base.input
                                                            class="rounded-e-none border-e-0"
                                                            type="text"
                                                            placeholder="Small"
                                                        />
                                                        <div
                                                            class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-r-lg border [--color:var(--color-foreground)]">
                                                            6/14</div>
                                                    </div>
                                                    <div class="col-span-2 flex w-16 items-center gap-3 opacity-70">
                                                        <a href="">
                                                            <x-base.lucide
                                                                class="size-4"
                                                                icon="Move"
                                                            />
                                                        </a>
                                                        <a href="">
                                                            <x-base.lucide
                                                                class="size-4"
                                                                icon="Trash"
                                                            />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid gap-5 sm:grid-cols-12">
                                                    <div class="col-span-10 flex">
                                                        <x-base.input
                                                            class="rounded-e-none border-e-0"
                                                            type="text"
                                                            placeholder="Medium"
                                                        />
                                                        <div
                                                            class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-r-lg border [--color:var(--color-foreground)]">
                                                            6/14</div>
                                                    </div>
                                                    <div class="col-span-2 flex w-16 items-center gap-3 opacity-70">
                                                        <a href="">
                                                            <x-base.lucide
                                                                class="size-4"
                                                                icon="Move"
                                                            />
                                                        </a>
                                                        <a href="">
                                                            <x-base.lucide
                                                                class="size-4"
                                                                icon="Trash"
                                                            />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid gap-5 sm:grid-cols-12">
                                                    <div class="col-span-10 flex">
                                                        <x-base.input
                                                            class="rounded-e-none border-e-0"
                                                            type="text"
                                                            placeholder="Large"
                                                        />
                                                        <div
                                                            class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-r-lg border [--color:var(--color-foreground)]">
                                                            6/14</div>
                                                    </div>
                                                    <div class="col-span-2 flex w-16 items-center gap-3 opacity-70">
                                                        <a href="">
                                                            <x-base.lucide
                                                                class="size-4"
                                                                icon="Move"
                                                            />
                                                        </a>
                                                        <a href="">
                                                            <x-base.lucide
                                                                class="size-4"
                                                                icon="Trash"
                                                            />
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid gap-5 sm:grid-cols-12">
                                            <div class="col-span-2"></div>
                                            <div class="col-span-10 grid gap-5">
                                                <div class="grid gap-5 sm:grid-cols-12">
                                                    <div class="col-span-10 flex">
                                                        <x-base.button class="w-full border-dashed">
                                                            <x-base.lucide
                                                                class="mr-2 size-4"
                                                                icon="Plus"
                                                            /> Add New Option
                                                        </x-base.button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-start xl:flex-row">
                            <div class="w-full xl:mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Variant 2</div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed opacity-70">
                                        Add the types of variants and options, you can add up to 5
                                        options.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div
                                    class="bg-(--color)/[.03] border-(--color)/5 relative rounded-lg border py-10 pl-5 pr-5 [--color:var(--color-foreground)] xl:pr-10">
                                    <a
                                        class="absolute right-0 top-0 mr-4 mt-4 opacity-70"
                                        href=""
                                    >
                                        <x-base.lucide
                                            class="size-5"
                                            icon="X"
                                        />
                                    </a>
                                    <div class="flex flex-col gap-5">
                                        <div class="grid gap-5 sm:grid-cols-12">
                                            <div class="col-span-2">
                                                <x-base.label class="block sm:mt-3 sm:text-right">Name</x-base.label>
                                            </div>
                                            <div class="col-span-10 grid gap-5">
                                                <div class="grid gap-5 sm:grid-cols-12">
                                                    <div class="col-span-10 flex">
                                                        <x-base.input
                                                            class="rounded-e-none border-e-0"
                                                            type="text"
                                                            placeholder="Color"
                                                        />
                                                        <div
                                                            class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-r-lg border [--color:var(--color-foreground)]">
                                                            6/14</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid gap-5 sm:grid-cols-12">
                                            <div class="col-span-2">
                                                <x-base.label class="block sm:mt-3 sm:text-right">Options</x-base.label>
                                            </div>
                                            <div class="col-span-10 grid gap-5">
                                                <div class="grid gap-5 sm:grid-cols-12">
                                                    <div class="col-span-10 flex">
                                                        <x-base.input
                                                            class="rounded-e-none border-e-0"
                                                            type="text"
                                                            placeholder="Black"
                                                        />
                                                        <div
                                                            class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-r-lg border [--color:var(--color-foreground)]">
                                                            6/14</div>
                                                    </div>
                                                    <div class="col-span-2 flex w-16 items-center gap-3 opacity-70">
                                                        <a href="">
                                                            <x-base.lucide
                                                                class="size-4"
                                                                icon="Move"
                                                            />
                                                        </a>
                                                        <a href="">
                                                            <x-base.lucide
                                                                class="size-4"
                                                                icon="Trash"
                                                            />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid gap-5 sm:grid-cols-12">
                                                    <div class="col-span-10 flex">
                                                        <x-base.input
                                                            class="rounded-e-none border-e-0"
                                                            type="text"
                                                            placeholder="White"
                                                        />
                                                        <div
                                                            class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-r-lg border [--color:var(--color-foreground)]">
                                                            6/14</div>
                                                    </div>
                                                    <div class="col-span-2 flex w-16 items-center gap-3 opacity-70">
                                                        <a href="">
                                                            <x-base.lucide
                                                                class="size-4"
                                                                icon="Move"
                                                            />
                                                        </a>
                                                        <a href="">
                                                            <x-base.lucide
                                                                class="size-4"
                                                                icon="Trash"
                                                            />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid gap-5 sm:grid-cols-12">
                                                    <div class="col-span-10 flex">
                                                        <x-base.input
                                                            class="rounded-e-none border-e-0"
                                                            type="text"
                                                            placeholder="Gray"
                                                        />
                                                        <div
                                                            class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-r-lg border [--color:var(--color-foreground)]">
                                                            6/14</div>
                                                    </div>
                                                    <div class="col-span-2 flex w-16 items-center gap-3 opacity-70">
                                                        <a href="">
                                                            <x-base.lucide
                                                                class="size-4"
                                                                icon="Move"
                                                            />
                                                        </a>
                                                        <a href="">
                                                            <x-base.lucide
                                                                class="size-4"
                                                                icon="Trash"
                                                            />
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid gap-5 sm:grid-cols-12">
                                            <div class="col-span-2"></div>
                                            <div class="col-span-10 grid gap-5">
                                                <div class="grid gap-5 sm:grid-cols-12">
                                                    <div class="col-span-10 flex">
                                                        <x-base.button class="w-full border-dashed">
                                                            <x-base.lucide
                                                                class="mr-2 size-4"
                                                                icon="Plus"
                                                            /> Add New Option
                                                        </x-base.button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:ml-64 xl:pl-10">
                            <x-base.button class="w-full">
                                <x-base.lucide
                                    class="size-4"
                                    icon="Plus"
                                /> Add New Variant
                            </x-base.button>
                        </div>
                        <div class="flex flex-col items-start xl:flex-row">
                            <div class="w-full xl:mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Variant Information</div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed opacity-70">
                                        Apply price and stock on all variants or based on certain
                                        variant codes.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="grid grid-cols-4 gap-5">
                                    <div>
                                        <div class="flex">
                                            <div
                                                class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-s-lg border [--color:var(--color-foreground)]">
                                                $</div>
                                            <x-base.input
                                                class="rounded-s-none border-s-0"
                                                type="text"
                                                placeholder="Price"
                                            />
                                        </div>
                                    </div>
                                    <div>
                                        <x-base.input
                                            type="text"
                                            placeholder="Stock"
                                        />
                                    </div>
                                    <div>
                                        <x-base.input
                                            type="text"
                                            placeholder="Variant Code"
                                        />
                                    </div>
                                    <div>
                                        <x-base.button
                                            class="w-full"
                                            type="button"
                                            variant="primary"
                                        >Apply To All</x-base.button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-start xl:flex-row">
                            <div class="w-full xl:mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Variant List</div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed opacity-70">
                                        Set the price and stock for each variant.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.table>
                                    <x-base.table.thead>
                                        <x-base.table.tr>
                                            <x-base.table.th class="bg-foreground/5">
                                                Size
                                            </x-base.table.th>
                                            <x-base.table.th class="bg-foreground/5">
                                                <div class="flex items-center">
                                                    Color
                                                    <x-base.lucide
                                                        class="ml-2 size-4"
                                                        icon="HelpCircle"
                                                    />
                                                </div>
                                            </x-base.table.th>
                                            <x-base.table.th class="bg-foreground/5">
                                                Price
                                            </x-base.table.th>
                                            <x-base.table.th class="bg-foreground/5">
                                                <div class="flex items-center">
                                                    <div @class([
                                                        'relative -mt-0.5 mr-2 size-4',
                                                        'after:bg-primary after:absolute after:size-4 after:rounded-full after:border-4 after:border-white/60 after:box-border',
                                                        'before:bg-primary/20 before:absolute before:size-4 before:rounded-full lg:before:animate-ping',
                                                    ])>
                                                    </div>
                                                    Stock
                                                    <x-base.lucide
                                                        class="ml-2 size-4"
                                                        icon="HelpCircle"
                                                    />
                                                </div>
                                            </x-base.table.th>
                                            <x-base.table.th class="bg-foreground/5">
                                                Variant Code
                                            </x-base.table.th>
                                        </x-base.table.tr>
                                    </x-base.table.thead>
                                    <x-base.table.tbody>
                                        <x-base.table.tr>
                                            <x-base.table.td
                                                class="border-r"
                                                rowspan="3"
                                            >
                                                Small
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                Black
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <div class="flex">
                                                    <div
                                                        class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-l-lg border [--color:var(--color-foreground)]">
                                                        $</div>
                                                    <x-base.input
                                                        class="rounded-s-none border-s-0"
                                                        type="text"
                                                        placeholder="Price"
                                                    />
                                                </div>
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <x-base.input
                                                    class="min-w-[6rem]"
                                                    type="text"
                                                    placeholder="Stock"
                                                />
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <x-base.input
                                                    class="min-w-[6rem]"
                                                    type="text"
                                                    placeholder="Variant Code"
                                                />
                                            </x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>
                                                White
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <div class="flex">
                                                    <div
                                                        class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-l-lg border [--color:var(--color-foreground)]">
                                                        $</div>
                                                    <x-base.input
                                                        class="rounded-s-none border-s-0"
                                                        type="text"
                                                        placeholder="Price"
                                                    />
                                                </div>
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <x-base.input
                                                    class="min-w-[6rem]"
                                                    type="text"
                                                    placeholder="Stock"
                                                />
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <x-base.input
                                                    class="min-w-[6rem]"
                                                    type="text"
                                                    placeholder="Variant Code"
                                                />
                                            </x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>
                                                Gray
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <div class="flex">
                                                    <div
                                                        class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-l-lg border [--color:var(--color-foreground)]">
                                                        $</div>
                                                    <x-base.input
                                                        class="rounded-s-none border-s-0"
                                                        type="text"
                                                        placeholder="Price"
                                                    />
                                                </div>
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <x-base.input
                                                    class="min-w-[6rem]"
                                                    type="text"
                                                    placeholder="Stock"
                                                />
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <x-base.input
                                                    class="min-w-[6rem]"
                                                    type="text"
                                                    placeholder="Variant Code"
                                                />
                                            </x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td
                                                class="border-r"
                                                rowspan="3"
                                            >
                                                Medium
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                Black
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <div class="flex">
                                                    <div
                                                        class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-l-lg border [--color:var(--color-foreground)]">
                                                        $</div>
                                                    <x-base.input
                                                        class="rounded-s-none border-s-0"
                                                        type="text"
                                                        placeholder="Price"
                                                    />
                                                </div>
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <x-base.input
                                                    class="min-w-[6rem]"
                                                    type="text"
                                                    placeholder="Stock"
                                                />
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <x-base.input
                                                    class="min-w-[6rem]"
                                                    type="text"
                                                    placeholder="Variant Code"
                                                />
                                            </x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>
                                                White
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <div class="flex">
                                                    <div
                                                        class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-l-lg border [--color:var(--color-foreground)]">
                                                        $</div>
                                                    <x-base.input
                                                        class="rounded-s-none border-s-0"
                                                        type="text"
                                                        placeholder="Price"
                                                    />
                                                </div>
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <x-base.input
                                                    class="min-w-[6rem]"
                                                    type="text"
                                                    placeholder="Stock"
                                                />
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <x-base.input
                                                    class="min-w-[6rem]"
                                                    type="text"
                                                    placeholder="Variant Code"
                                                />
                                            </x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>
                                                Gray
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <div class="flex">
                                                    <div
                                                        class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-l-lg border [--color:var(--color-foreground)]">
                                                        $</div>
                                                    <x-base.input
                                                        class="rounded-s-none border-s-0"
                                                        type="text"
                                                        placeholder="Price"
                                                    />
                                                </div>
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <x-base.input
                                                    class="min-w-[6rem]"
                                                    type="text"
                                                    placeholder="Stock"
                                                />
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <x-base.input
                                                    class="min-w-[6rem]"
                                                    type="text"
                                                    placeholder="Variant Code"
                                                />
                                            </x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td
                                                class="border-r"
                                                rowspan="3"
                                            >
                                                Large
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                Black
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <div class="flex">
                                                    <div
                                                        class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-l-lg border [--color:var(--color-foreground)]">
                                                        $</div>
                                                    <x-base.input
                                                        class="rounded-s-none border-s-0"
                                                        type="text"
                                                        placeholder="Price"
                                                    />
                                                </div>
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <x-base.input
                                                    class="min-w-[6rem]"
                                                    type="text"
                                                    placeholder="Stock"
                                                />
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <x-base.input
                                                    class="min-w-[6rem]"
                                                    type="text"
                                                    placeholder="Variant Code"
                                                />
                                            </x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>
                                                White
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <div class="flex">
                                                    <div
                                                        class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-l-lg border [--color:var(--color-foreground)]">
                                                        $</div>
                                                    <x-base.input
                                                        class="rounded-s-none border-s-0"
                                                        type="text"
                                                        placeholder="Price"
                                                    />
                                                </div>
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <x-base.input
                                                    class="min-w-[6rem]"
                                                    type="text"
                                                    placeholder="Stock"
                                                />
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <x-base.input
                                                    class="min-w-[6rem]"
                                                    type="text"
                                                    placeholder="Variant Code"
                                                />
                                            </x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>
                                                Gray
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <div class="flex">
                                                    <div
                                                        class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-l-lg border [--color:var(--color-foreground)]">
                                                        $</div>
                                                    <x-base.input
                                                        class="rounded-s-none border-s-0"
                                                        type="text"
                                                        placeholder="Price"
                                                    />
                                                </div>
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <x-base.input
                                                    class="min-w-[6rem]"
                                                    type="text"
                                                    placeholder="Stock"
                                                />
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <x-base.input
                                                    class="min-w-[6rem]"
                                                    type="text"
                                                    placeholder="Variant Code"
                                                />
                                            </x-base.table.td>
                                        </x-base.table.tr>
                                    </x-base.table.tbody>
                                </x-base.table>
                            </div>
                        </div>
                        <div class="flex flex-col items-start xl:flex-row">
                            <div class="w-full xl:mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Wholesale</div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed opacity-70">
                                        Add wholesale price for certain quantity purchases.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.table>
                                    <x-base.table.thead>
                                        <x-base.table.tr>
                                            <x-base.table.th></x-base.table.th>
                                            <x-base.table.th></x-base.table.th>
                                            <x-base.table.th>
                                                Min.
                                            </x-base.table.th>
                                            <x-base.table.th>
                                                Max.
                                            </x-base.table.th>
                                            <x-base.table.th>
                                                Unit Price
                                            </x-base.table.th>
                                            <x-base.table.th></x-base.table.th>
                                        </x-base.table.tr>
                                    </x-base.table.thead>
                                    <x-base.table.tbody>
                                        <x-base.table.tr>
                                            <x-base.table.td>1.</x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                Wholesale
                                                Price
                                                1
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <x-base.input
                                                    type="text"
                                                    placeholder="Min Qty"
                                                />
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <x-base.input
                                                    type="text"
                                                    placeholder="Max Qty"
                                                />
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <div class="flex">
                                                    <div
                                                        class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-l-lg border [--color:var(--color-foreground)]">
                                                        $</div>
                                                    <x-base.input
                                                        class="rounded-s-none border-s-0"
                                                        type="text"
                                                        placeholder="Price"
                                                    />
                                                </div>
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <a href="">
                                                    <x-base.lucide
                                                        class="size-4 opacity-70"
                                                        icon="Trash"
                                                    />
                                                </a>
                                            </x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>2.</x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                Wholesale
                                                Price
                                                2
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <x-base.input
                                                    type="text"
                                                    placeholder="Min Qty"
                                                />
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <x-base.input
                                                    type="text"
                                                    placeholder="Max Qty"
                                                />
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <div class="flex">
                                                    <div
                                                        class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-l-lg border [--color:var(--color-foreground)]">
                                                        $</div>
                                                    <x-base.input
                                                        class="rounded-s-none border-s-0"
                                                        type="text"
                                                        placeholder="Price"
                                                    />
                                                </div>
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <a href="">
                                                    <x-base.lucide
                                                        class="size-4 opacity-70"
                                                        icon="Trash"
                                                    />
                                                </a>
                                            </x-base.table.td>
                                        </x-base.table.tr>
                                        <x-base.table.tr>
                                            <x-base.table.td>3.</x-base.table.td>
                                            <x-base.table.td class="whitespace-nowrap">
                                                Wholesale
                                                Price
                                                3
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <x-base.input
                                                    type="text"
                                                    placeholder="Min Qty"
                                                />
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <x-base.input
                                                    type="text"
                                                    placeholder="Max Qty"
                                                />
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <div class="flex">
                                                    <div
                                                        class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-l-lg border [--color:var(--color-foreground)]">
                                                        $</div>
                                                    <x-base.input
                                                        class="rounded-s-none border-s-0"
                                                        type="text"
                                                        placeholder="Price"
                                                    />
                                                </div>
                                            </x-base.table.td>
                                            <x-base.table.td>
                                                <a href="">
                                                    <x-base.lucide
                                                        class="size-4 opacity-70"
                                                        icon="Trash"
                                                    />
                                                </a>
                                            </x-base.table.td>
                                        </x-base.table.tr>
                                    </x-base.table.tbody>
                                </x-base.table>
                                <x-base.button class="mt-4 w-full">
                                    <x-base.lucide
                                        class="mr-2 size-4"
                                        icon="Plus"
                                    /> Add New Wholesale
                                    Price
                                </x-base.button>
                            </div>
                        </div>
                    </div>
                </div>
            </x-base.box>
            <!-- END: Product Variant (Details) -->
            <!-- BEGIN: Product Management -->
            <x-base.box class="mt-8">
                <div class="rounded-lg border p-5">
                    <div class="flex items-center border-b pb-5 text-base font-medium">
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="ChevronDown"
                        /> Product
                        Management
                    </div>
                    <div class="mt-5 flex flex-col gap-5">
                        <div class="flex flex-col items-start xl:flex-row">
                            <div class="w-full xl:mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Product Status</div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed opacity-70">
                                        If the status is active, your product can be searched for by potential buyers.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex items-center space-x-2">
                                    <x-base.switch id="r8" />
                                    <x-base.label
                                        class="text-xs font-normal leading-relaxed opacity-70"
                                        for="r8"
                                    >Active</x-base.label>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-start xl:flex-row">
                            <div class="w-full xl:mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Product Stock</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.input
                                    type="text"
                                    placeholder="Input Product Stock"
                                />
                            </div>
                        </div>
                        <div class="flex flex-col items-start xl:flex-row">
                            <div class="w-full xl:mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">SKU (Stock Keeping Unit)</div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed opacity-70">
                                        Use a unique SKU code if you want to mark your product.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.input
                                    type="text"
                                    placeholder="Input SKU"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </x-base.box>
            <!-- END: Product Management -->
            <!-- BEGIN: Weight & Shipping -->
            <x-base.box class="mt-8">
                <div class="rounded-lg border p-5">
                    <div class="flex items-center border-b pb-5 text-base font-medium">
                        <x-base.lucide
                            class="mr-2 size-4"
                            icon="ChevronDown"
                        /> Weight & Shipping
                    </div>
                    <div class="mt-5 flex flex-col gap-5">
                        <div class="flex flex-col items-start xl:flex-row">
                            <div class="w-full xl:mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Product Weight</div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed opacity-70">
                                        Enter the weight by weighing the product after it is
                                        <a
                                            class="text-primary font-medium"
                                            href=""
                                        >
                                            packaged
                                        </a>
                                        .
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="grid grid-cols-4 gap-5">
                                    <div>
                                        <x-base.select>
                                            <option value="Gram (g)">Gram (g)</option>
                                            <option value="Kilogram (kg)">Kilogram (kg)</option>
                                        </x-base.select>
                                    </div>
                                    <div>
                                        <x-base.input
                                            class="mt-2 sm:mt-0"
                                            id="product-weight"
                                            type="text"
                                            placeholder="Stock"
                                        />
                                    </div>
                                </div>
                                <x-base.alert
                                    class="mt-5"
                                    variant="warning"
                                    dismissible
                                >
                                    <span>
                                        <x-base.lucide
                                            class="mr-2 size-4"
                                            icon="AlertTriangle"
                                        />
                                    </span>
                                    <span>
                                        Pay close attention to the weight of the product so that
                                        there is no difference in data with the shipping courier.
                                        <a
                                            class="decoration-(--color)/70 underline-offset-3 ml-1 font-medium underline decoration-dotted"
                                            href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820"
                                            target="blank"
                                        >
                                            Learn More
                                        </a>
                                    </span>
                                </x-base.alert>
                            </div>
                        </div>
                        <div class="flex flex-col items-start xl:flex-row">
                            <div class="w-full xl:mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Product Size</div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed opacity-70">
                                        Enter the product size after packing to calculate the volume weight.
                                        <a
                                            class="text-primary font-medium"
                                            href=""
                                        >
                                            Learn Volume Weight
                                        </a>
                                        .
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="grid grid-cols-3 gap-5">
                                    <div>
                                        <div class="flex">
                                            <x-base.input
                                                class="rounded-e-none border-e-0"
                                                type="text"
                                                placeholder="Width"
                                            />
                                            <div
                                                class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-e-lg border [--color:var(--color-foreground)]">
                                                cm</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex">
                                            <x-base.input
                                                class="rounded-e-none border-e-0"
                                                type="text"
                                                placeholder="Height"
                                            />
                                            <div
                                                class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-e-lg border [--color:var(--color-foreground)]">
                                                cm</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex">
                                            <x-base.input
                                                class="rounded-e-none border-e-0"
                                                type="text"
                                                placeholder="Length"
                                            />
                                            <div
                                                class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-e-lg border [--color:var(--color-foreground)]">
                                                cm</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-start xl:flex-row">
                            <div class="w-full xl:mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Shipping Insurance</div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed opacity-70">
                                        Refund product & postage for the seller and buyer in case of damage / loss during
                                        shipping.
                                        <a
                                            class="text-primary font-medium"
                                            href=""
                                        >
                                            Learn More
                                        </a>
                                        .
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.radio-group class="w-[30rem] grid-cols-2">
                                    <div class="flex items-center space-x-2">
                                        <x-base.radio-group.item
                                            id="r3"
                                            name="shipping-insurance"
                                            value="new"
                                        />
                                        <x-base.label
                                            class="font-normal"
                                            for="r3"
                                        >
                                            <div class="font-medium">Required</div>
                                            <div class="mt-1 text-xs leading-relaxed opacity-70">You require the buyer to
                                                activate shipping insurance</div>
                                        </x-base.label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <x-base.radio-group.item
                                            id="r4"
                                            name="shipping-insurance"
                                            value="used"
                                        />
                                        <x-base.label
                                            class="font-normal"
                                            for="r4"
                                        >
                                            <div class="font-medium">Optional</div>
                                            <div class="mt-1 text-xs leading-relaxed opacity-70">You give the buyer the
                                                option to activate shipping insurance</div>
                                        </x-base.label>
                                    </div>
                                </x-base.radio-group>
                            </div>
                        </div>
                        <div class="flex flex-col items-start xl:flex-row">
                            <div class="w-full xl:mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Shipping Service</div>
                                    </div>
                                    <div class="mt-3 text-xs leading-relaxed opacity-70">
                                        Configure shipping services according to your product type.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.radio-group class="w-72 grid-cols-2">
                                    <div class="flex items-center space-x-2">
                                        <x-base.radio-group.item
                                            id="r5"
                                            name="shipping-service"
                                            value="standard"
                                        />
                                        <x-base.label for="r5">Standard</x-base.label>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <x-base.radio-group.item
                                            id="r6"
                                            name="shipping-service"
                                            value="custom"
                                        />
                                        <x-base.label for="r6">Custom</x-base.label>
                                    </div>
                                </x-base.radio-group>
                                <div class="mt-3 text-xs leading-relaxed opacity-70">The delivery service for this product
                                    will be the same as in the <a
                                        class="text-primary"
                                        href=""
                                    >Shipping Settings</a>.</div>
                            </div>
                        </div>
                        <div class="flex flex-col items-start xl:flex-row">
                            <div class="w-full xl:mr-10 xl:w-64">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Pre-order</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex items-center space-x-2">
                                    <x-base.switch id="r7" />
                                    <x-base.label
                                        class="text-xs font-normal leading-relaxed opacity-70"
                                        for="r7"
                                    >Activate PreOrder if you need a longer shipping process.
                                        <a
                                            class="text-primary"
                                            href=""
                                        >Learn more</a>.</x-base.label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </x-base.box>
            <!-- END: Weight & Shipping -->
            <div class="mt-8 flex flex-col justify-end gap-4 md:flex-row">
                <x-base.button
                    class="box w-full py-3 md:w-64"
                    type="button"
                >
                    Cancel
                </x-base.button>
                <x-base.button
                    class="box w-full py-3 md:w-64"
                    type="button"
                >
                    Save & Add New Product
                </x-base.button>
                <x-base.button
                    class="box w-full py-3 md:w-64"
                    type="button"
                    variant="primary"
                >
                    Save
                </x-base.button>
            </div>
        </div>
        <div class="col-span-2 hidden 2xl:block">
            <div class="sticky top-0 pt-5">
                <ul
                    class="before:bg-foreground/10 relative before:absolute before:left-0 before:z-[-1] before:h-full before:w-[2px] before:content-['']">
                    <li
                        class="[&.active]:border-primary [&.active]:text-primary active mb-4 border-l-2 border-transparent py-1 pl-5 opacity-70 [&.active]:font-medium [&.active]:opacity-100">
                        <a href="">Upload Product</a>
                    </li>
                    <li
                        class="[&.active]:border-primary [&.active]:text-primary mb-4 border-l-2 border-transparent py-1 pl-5 opacity-70 [&.active]:font-medium [&.active]:opacity-100">
                        <a href="">Product Information</a>
                    </li>
                    <li
                        class="[&.active]:border-primary [&.active]:text-primary mb-4 border-l-2 border-transparent py-1 pl-5 opacity-70 [&.active]:font-medium [&.active]:opacity-100">
                        <a href="">Product Detail</a>
                    </li>
                    <li
                        class="[&.active]:border-primary [&.active]:text-primary mb-4 border-l-2 border-transparent py-1 pl-5 opacity-70 [&.active]:font-medium [&.active]:opacity-100">
                        <a href="">Product Variant</a>
                    </li>
                    <li
                        class="[&.active]:border-primary [&.active]:text-primary mb-4 border-l-2 border-transparent py-1 pl-5 opacity-70 [&.active]:font-medium [&.active]:opacity-100">
                        <a href="">Product Variant (Details)</a>
                    </li>
                    <li
                        class="[&.active]:border-primary [&.active]:text-primary mb-4 border-l-2 border-transparent py-1 pl-5 opacity-70 [&.active]:font-medium [&.active]:opacity-100">
                        <a href="">Product Management</a>
                    </li>
                    <li
                        class="[&.active]:border-primary [&.active]:text-primary mb-4 border-l-2 border-transparent py-1 pl-5 opacity-70 [&.active]:font-medium [&.active]:opacity-100">
                        <a href="">Weight & Shipping</a>
                    </li>
                </ul>
                <div
                    class="bg-(--color)/10 border-(--color)/20 box text-(--color) box relative mt-10 border p-5 [--color:var(--color-warning)]">
                    <x-base.lucide
                        class="text-warning/80 absolute right-0 top-0 mr-3 mt-5 size-12 stroke-[.8]"
                        icon="Lightbulb"
                    />
                    <h2 class="text-lg font-medium">Tips</h2>
                    <div class="mt-5 font-medium">Price</div>
                    <div class="mt-2 text-xs leading-relaxed opacity-70">
                        <div>
                            The image format is .jpg .jpeg .png and a minimum size of 300 x
                            300 pixels (For optimal images use a minimum size of 700 x 700
                            pixels).
                        </div>
                        <div class="mt-2">
                            Select product photos or drag and drop up to 5 photos at once
                            here. Include min. 3 attractive photos to make the product more
                            attractive to buyers.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
