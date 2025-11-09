<x-layouts.tailadmin title="Product Details">
    <!-- Breadcrumb Start -->
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Product Details
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('admin.dashboard') }}">Dashboard /</a>
                </li>
                <li>
                    <a class="font-medium" href="{{ route('admin.products.index') }}">Products /</a>
                </li>
                <li class="font-medium text-primary">{{ $product->name }}</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb End -->

    <!-- Action Buttons -->
    <div class="mb-6 flex gap-3">
        <a href="{{ route('admin.products.edit', $product) }}" 
           class="inline-flex items-center justify-center rounded-md bg-warning py-3 px-6 text-center font-medium text-white hover:bg-opacity-90">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
            </svg>
            Edit Product
        </a>
        <a href="{{ route('admin.products.index') }}" 
           class="inline-flex items-center justify-center rounded-md border border-stroke py-3 px-6 text-center font-medium text-black hover:bg-opacity-10 dark:border-strokedark dark:text-white">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Back to Products
        </a>
    </div>

    <div class="grid grid-cols-5 gap-8">
        <div class="col-span-5 xl:col-span-3">
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="border-b border-stroke py-4 px-7 dark:border-strokedark">
                    <h3 class="font-medium text-black dark:text-white">
                        Product Information
                    </h3>
                </div>
                <div class="p-7">
                    <div class="mb-5.5">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Product Name
                        </label>
                        <div class="w-full rounded border border-stroke bg-gray py-3 px-4.5 text-black dark:border-strokedark dark:bg-meta-4 dark:text-white">
                            {{ $product->name }}
                        </div>
                    </div>

                    <div class="mb-5.5">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Description
                        </label>
                        <div class="w-full rounded border border-stroke bg-gray py-3 px-4.5 text-black dark:border-strokedark dark:bg-meta-4 dark:text-white">
                            {{ $product->description }}
                        </div>
                    </div>

                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full sm:w-1/2">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Price
                            </label>
                            <div class="w-full rounded border border-stroke bg-gray py-3 px-4.5 text-black dark:border-strokedark dark:bg-meta-4 dark:text-white">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </div>
                        </div>

                        <div class="w-full sm:w-1/2">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Stock
                            </label>
                            <div class="w-full rounded border border-stroke bg-gray py-3 px-4.5 text-black dark:border-strokedark dark:bg-meta-4 dark:text-white">
                                @if($product->stock > 10)
                                    <span class="inline-flex rounded-full bg-success bg-opacity-10 py-1 px-3 text-sm font-medium text-success">
                                        {{ $product->stock }} Units
                                    </span>
                                @elseif($product->stock > 0)
                                    <span class="inline-flex rounded-full bg-warning bg-opacity-10 py-1 px-3 text-sm font-medium text-warning">
                                        {{ $product->stock }} Units
                                    </span>
                                @else
                                    <span class="inline-flex rounded-full bg-danger bg-opacity-10 py-1 px-3 text-sm font-medium text-danger">
                                        Out of Stock
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full sm:w-1/2">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Created At
                            </label>
                            <div class="w-full rounded border border-stroke bg-gray py-3 px-4.5 text-black dark:border-strokedark dark:bg-meta-4 dark:text-white">
                                {{ $product->created_at->format('d M Y, H:i') }}
                            </div>
                        </div>

                        <div class="w-full sm:w-1/2">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Last Updated
                            </label>
                            <div class="w-full rounded border border-stroke bg-gray py-3 px-4.5 text-black dark:border-strokedark dark:bg-meta-4 dark:text-white">
                                {{ $product->updated_at->format('d M Y, H:i') }}
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end gap-4.5">
                        <form action="{{ route('admin.products.destroy', $product) }}" 
                              method="POST" 
                              onsubmit="return confirm('Are you sure you want to delete this product? This action cannot be undone.')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="flex justify-center rounded bg-danger py-2 px-6 font-medium text-gray hover:bg-opacity-90">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                                Delete Product
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-5 xl:col-span-2">
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="border-b border-stroke py-4 px-7 dark:border-strokedark">
                    <h3 class="font-medium text-black dark:text-white">
                        Product Image
                    </h3>
                </div>
                <div class="p-7">
                    @if($product->image_url)
                        <div class="mb-4">
                            <img src="{{ $product->image_url }}" 
                                 alt="{{ $product->name }}"
                                 class="h-64 w-full rounded-md object-cover object-center">
                        </div>
                        <div class="mb-5.5">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Image URL
                            </label>
                            <div class="w-full rounded border border-stroke bg-gray py-3 px-4.5 text-black dark:border-strokedark dark:bg-meta-4 dark:text-white text-sm break-all">
                                {{ $product->image_url }}
                            </div>
                        </div>
                    @else
                        <div class="flex h-64 w-full items-center justify-center rounded-md border border-dashed border-stroke bg-gray dark:border-strokedark dark:bg-meta-4">
                            <div class="text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">No image available</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layouts.tailadmin>