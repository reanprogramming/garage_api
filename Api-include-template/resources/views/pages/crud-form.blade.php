@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>CRUD Form - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Form Layout</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <x-base.box>
                <x-base.form.item>
                    <x-base.label for="crud-form-1">Product Name</x-base.label>
                    <x-base.input
                        class="w-full"
                        id="crud-form-1"
                        type="text"
                        placeholder="Input text"
                    />
                </x-base.form.item>
                <x-base.form.item class="mt-3">
                    <x-base.label for="crud-form-2">Category</x-base.label>
                    <x-base.tom-select
                        class="w-full"
                        id="crud-form-2"
                        multiple
                    >
                        <option
                            value="1"
                            selected
                        >Sport & Outdoor</option>
                        <option value="2">PC & Laptop</option>
                        <option
                            value="3"
                            selected
                        >Smartphone & Tablet</option>
                        <option value="4">Photography</option>
                    </x-base.tom-select>
                </x-base.form.item>
                <x-base.form.item class="mt-3">
                    <x-base.label for="crud-form-3">Quantity</x-base.label>
                    <div class="flex">
                        <x-base.input
                            class="rounded-e-none border-e-0"
                            type="text"
                            placeholder="Quantity"
                        />
                        <div
                            class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-e-lg border [--color:var(--color-foreground)]">
                            pcs</div>
                    </div>
                </x-base.form.item>
                <x-base.form.item class="mt-3">
                    <x-base.label for="crud-form-4">Weight</x-base.label>
                    <div class="flex">
                        <x-base.input
                            class="rounded-e-none border-e-0"
                            type="text"
                            placeholder="Weight"
                        />
                        <div
                            class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex w-16 items-center justify-center rounded-e-lg border [--color:var(--color-foreground)]">
                            grams</div>
                    </div>
                </x-base.form.item>
                <x-base.form.item class="mt-3">
                    <x-base.label>Price</x-base.label>
                    <div class="grid-cols-3 gap-2 sm:grid">
                        <div class="flex">
                            <div
                                class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center rounded-s-lg border px-3 [--color:var(--color-foreground)]">
                                Unit</div>
                            <x-base.input
                                class="rounded-s-none border-s-0"
                                type="text"
                                placeholder="Unit"
                            />
                        </div>
                        <div class="mt-2 flex sm:mt-0">
                            <div
                                class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center rounded-s-lg border px-3 [--color:var(--color-foreground)]">
                                Wholesale</div>
                            <x-base.input
                                class="rounded-s-none border-s-0"
                                type="text"
                                placeholder="Wholesale"
                            />
                        </div>
                        <div class="mt-2 flex sm:mt-0">
                            <div
                                class="bg-(--color)/[.03] border-(--color)/[.08] text-(--color)/70 flex items-center justify-center rounded-s-lg border px-3 [--color:var(--color-foreground)]">
                                Bulk</div>
                            <x-base.input
                                class="rounded-s-none border-s-0"
                                type="text"
                                placeholder="Bulk"
                            />
                        </div>
                    </div>
                </x-base.form.item>
                <x-base.form.item class="mt-3">
                    <x-base.label>Active Status</x-base.label>
                    <x-base.switch type="checkbox" />
                </x-base.form.item>
                <x-base.form.item class="mt-3">
                    <x-base.label>Description</x-base.label>
                    <x-base.ckeditor-classic>
                        <p>Content of the editor.</p>
                    </x-base.ckeditor-classic>
                </x-base.form.item>
                <div class="mt-5 text-right">
                    <x-base.button
                        class="mr-1 w-24"
                        type="button"
                    >
                        Cancel
                    </x-base.button>
                    <x-base.button
                        class="w-24"
                        type="button"
                        variant="primary"
                    >
                        Save
                    </x-base.button>
                </div>
            </x-base.box>
            <!-- END: Form Layout -->
        </div>
    </div>
@endsection
