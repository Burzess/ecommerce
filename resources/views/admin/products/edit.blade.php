<x-layouts.tailadmin title="Edit Product">
    <!-- Breadcrumb Start -->
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Edit Product
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('admin.dashboard') }}">Dashboard /</a>
                </li>
                <li>
                    <a class="font-medium" href="{{ route('admin.products.index') }}">Products /</a>
                </li>
                <li class="font-medium text-primary">Edit</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb End -->

    <div class="grid grid-cols-1 gap-9 sm:grid-cols-1">
        <div class="flex flex-col gap-9">
            <!-- Product Form -->
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="border-b border-stroke py-4 px-6.5 dark:border-strokedark">
                    <h3 class="font-medium text-black dark:text-white">
                        Edit Product Information
                    </h3>
                </div>
                <form action="{{ route('admin.products.update', $product) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="p-6.5">
                        <div class="mb-4.5">
                            <label class="mb-2.5 block text-black dark:text-white">
                                Product Name <span class="text-meta-1">*</span>
                            </label>
                            <input
                                type="text"
                                name="name"
                                value="{{ old('name', $product->name) }}"
                                placeholder="Enter product name"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary @error('name') border-meta-1 @enderror"
                            />
                            @error('name')
                                <p class="text-meta-1 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4.5">
                            <label class="mb-2.5 block text-black dark:text-white">
                                Description <span class="text-meta-1">*</span>
                            </label>
                            <textarea
                                rows="4"
                                name="description"
                                placeholder="Enter product description"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary @error('description') border-meta-1 @enderror"
                            >{{ old('description', $product->description) }}</textarea>
                            @error('description')
                                <p class="text-meta-1 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                            <div class="w-full xl:w-1/2">
                                <label class="mb-2.5 block text-black dark:text-white">
                                    Price (Rp) <span class="text-meta-1">*</span>
                                </label>
                                <input
                                    type="number"
                                    name="price"
                                    value="{{ old('price', $product->price) }}"
                                    placeholder="0"
                                    min="0"
                                    step="1000"
                                    class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary @error('price') border-meta-1 @enderror"
                                />
                                @error('price')
                                    <p class="text-meta-1 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="w-full xl:w-1/2">
                                <label class="mb-2.5 block text-black dark:text-white">
                                    Stock Quantity <span class="text-meta-1">*</span>
                                </label>
                                <input
                                    type="number"
                                    name="stock"
                                    value="{{ old('stock', $product->stock) }}"
                                    placeholder="0"
                                    min="0"
                                    class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary @error('stock') border-meta-1 @enderror"
                                />
                                @error('stock')
                                    <p class="text-meta-1 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="mb-2.5 block text-black dark:text-white">
                                Image URL
                            </label>
                            <input
                                type="url"
                                name="image_url"
                                value="{{ old('image_url', $product->image_url) }}"
                                placeholder="https://example.com/image.jpg"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary @error('image_url') border-meta-1 @enderror"
                            />
                            @error('image_url')
                                <p class="text-meta-1 text-sm mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-sm text-body mt-2">
                                Link to product image. Use placeholder if no image available.
                            </p>
                        </div>

                        <div class="flex gap-4.5">
                            <a href="{{ route('admin.products.index') }}" 
                               class="flex justify-center rounded border border-stroke py-2 px-6 font-medium text-black hover:shadow-1 dark:border-strokedark dark:text-white">
                                Cancel
                            </a>
                            <button
                                type="submit"
                                class="flex justify-center rounded bg-primary py-2 px-6 font-medium text-gray hover:bg-opacity-90"
                            >
                                Update Product
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.tailadmin>