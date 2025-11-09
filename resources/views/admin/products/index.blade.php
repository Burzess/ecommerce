<x-layouts.tailadmin title="Product Management">
    <!-- Breadcrumb Start -->
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Product Management
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('admin.dashboard') }}">Dashboard /</a>
                </li>
                <li class="font-medium text-primary">Products</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb End -->

    <!-- Add New Product Button -->
    <div class="mb-6 flex justify-end">
        <a href="{{ route('admin.products.create') }}" 
           class="inline-flex items-center justify-center rounded-md bg-primary py-4 px-10 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Add New Product
        </a>
    </div>

    <div class="flex flex-col gap-10">
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5">
            <!-- Total Products Card -->
            <div class="rounded-sm border border-stroke bg-white py-6 px-7.5 shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                    <svg class="fill-primary dark:fill-white" width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.18418 8.03751C9.31543 8.03751 11.0686 6.35313 11.0686 4.25626C11.0686 2.15938 9.31543 0.475006 7.18418 0.475006C5.05293 0.475006 3.2998 2.15938 3.2998 4.25626C3.2998 6.35313 5.05293 8.03751 7.18418 8.03751ZM7.18418 2.05626C8.45605 2.05626 9.52168 3.05313 9.52168 4.29063C9.52168 5.52813 8.49043 6.52501 7.18418 6.52501C5.87793 6.52501 4.84668 5.52813 4.84668 4.29063C4.84668 3.05313 5.9123 2.05626 7.18418 2.05626Z" fill=""/>
                        <path d="M15.8124 9.6875C17.6687 9.6875 19.1468 8.24375 19.1468 6.42188C19.1468 4.6 17.6687 3.15625 15.8124 3.15625C13.9562 3.15625 12.478 4.6 12.478 6.42188C12.478 8.24375 13.9562 9.6875 15.8124 9.6875ZM15.8124 4.7375C16.8093 4.7375 17.5999 5.49375 17.5999 6.45625C17.5999 7.41875 16.8093 8.175 15.8124 8.175C14.8155 8.175 14.0249 7.41875 14.0249 6.45625C14.0249 5.49375 14.8155 4.7375 15.8124 4.7375Z" fill=""/>
                        <path d="M15.9843 10.0313H15.6749C14.6437 10.0313 13.6468 10.3406 12.7781 10.8563C11.2312 9.32812 9.20619 8.475 7.04684 8.475C3.73434 8.475 0.919189 11.2875 0.919189 14.5687C0.919189 15.6156 1.86582 16.4906 2.99707 16.4906H11.1468C12.2781 16.4906 13.2249 15.6156 13.2249 14.5687C13.2249 13.1625 12.0593 12.0375 10.6312 12.0375H8.83744C8.70619 12.0375 8.60932 11.9406 8.60932 11.8094C8.60932 11.6781 8.70619 11.5812 8.83744 11.5812H10.6312C12.9749 11.5812 14.8999 13.4719 14.8999 15.7844C14.8999 16.5375 15.5218 17.1594 16.2749 17.1594C17.0281 17.1594 17.6499 16.5375 17.6499 15.7844C17.6499 12.7406 15.0218 10.2469 11.9031 10.2469C12.478 9.76875 13.2249 9.49375 14.0249 9.49375H15.3374C16.1593 9.49375 16.8124 8.84063 16.8124 8.01875C16.8124 7.19688 16.1593 6.54375 15.3374 6.54375H14.6437C14.228 6.54375 13.8437 6.15938 13.8437 5.74375C13.8437 5.32812 14.228 4.94375 14.6437 4.94375H15.3374C17.0843 4.94375 18.5124 6.37188 18.5124 8.11875V8.54063C18.5124 9.15 18.9281 9.56563 19.5374 9.56563C20.1468 9.56563 20.5624 9.15 20.5624 8.54063V8.11875C20.5624 5.23125 18.228 2.89688 15.3405 2.89688H14.6437C13.1343 2.89688 11.8968 4.13438 11.8968 5.64375C11.8968 7.15313 13.1343 8.39063 14.6437 8.39063H15.3374C15.5218 8.39063 15.6749 8.54375 15.6749 8.72813C15.6749 8.9125 15.5218 9.06563 15.3374 9.06563H14.6437C13.9593 9.06563 13.3374 8.85 12.8218 8.45938C14.3999 7.25 16.3249 6.54375 18.4218 6.54375C19.0312 6.54375 19.4468 6.9594 19.4468 7.56875C19.4468 8.17813 19.0312 8.59375 18.4218 8.59375C17.1093 8.59375 15.9843 9.32812 15.9843 10.0313Z" fill=""/>
                    </svg>
                </div>

                <div class="mt-4 flex items-end justify-between">
                    <div>
                        <h4 class="text-title-md font-bold text-black dark:text-white">
                            {{ $products->total() }}
                        </h4>
                        <span class="text-sm font-medium">Total Products</span>
                    </div>
                </div>
            </div>

            <!-- Available Stock Card -->
            <div class="rounded-sm border border-stroke bg-white py-6 px-7.5 shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-3 dark:bg-meta-4">
                    <svg class="fill-primary dark:fill-white" width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.5 18C2.11929 18 1 16.8807 1 15.5C1 14.1193 2.11929 13 3.5 13C4.88071 13 6 14.1193 6 15.5C6 16.8807 4.88071 18 3.5 18ZM3.5 15C3.22386 15 3 15.2239 3 15.5C3 15.7761 3.22386 16 3.5 16C3.77614 16 4 15.7761 4 15.5C4 15.2239 3.77614 15 3.5 15Z" fill=""/>
                        <path d="M15.5 18C14.1193 18 13 16.8807 13 15.5C13 14.1193 14.1193 13 15.5 13C16.8807 13 18 14.1193 18 15.5C18 16.8807 16.8807 18 15.5 18ZM15.5 15C15.2239 15 15 15.2239 15 15.5C15 15.7761 15.2239 16 15.5 16C15.7761 16 16 15.7761 16 15.5C16 15.2239 15.7761 15 15.5 15Z" fill=""/>
                        <path d="M19 4H16.5L15.2 2.4C14.9 2 14.5 1.8 14 1.8H5C4.5 1.8 4.1 2 3.8 2.4L2.5 4H1C0.4 4 0 4.4 0 5C0 5.6 0.4 6 1 6H2V13C2 14.1 2.9 15 4 15H15C16.1 15 17 14.1 17 13V6H18C18.6 6 19 5.6 19 5C19 4.4 18.6 4 18 4H19ZM5.5 4L6.3 3.2H12.7L13.5 4H5.5ZM15 13H4V6H15V13Z" fill=""/>
                    </svg>
                </div>

                <div class="mt-4 flex items-end justify-between">
                    <div>
                        <h4 class="text-title-md font-bold text-black dark:text-white">
                            {{ \App\Models\Product::where('stock', '>', 0)->count() }}
                        </h4>
                        <span class="text-sm font-medium">Available Stock</span>
                    </div>
                </div>
            </div>

            <!-- Low Stock Card -->
            <div class="rounded-sm border border-stroke bg-white py-6 px-7.5 shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-5 dark:bg-meta-4">
                    <svg class="fill-primary dark:fill-white" width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 1L13.09 6.26L18 7L13 11.74L14.18 17L11 14.27L7.82 17L9 11.74L4 7L8.91 6.26L11 1Z" fill=""/>
                    </svg>
                </div>

                <div class="mt-4 flex items-end justify-between">
                    <div>
                        <h4 class="text-title-md font-bold text-black dark:text-white">
                            {{ \App\Models\Product::where('stock', '<=', 10)->where('stock', '>', 0)->count() }}
                        </h4>
                        <span class="text-sm font-medium">Low Stock</span>
                    </div>
                </div>
            </div>

            <!-- Out of Stock Card -->
            <div class="rounded-sm border border-stroke bg-white py-6 px-7.5 shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-6 dark:bg-meta-4">
                    <svg class="fill-primary dark:fill-white" width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 5V19C21 20.1 20.1 21 19 21H5C3.9 21 3 20.1 3 19V5C3 3.9 3.9 3 5 3H7C7 1.9 7.9 1 9 1H15C16.1 1 17 1.9 17 3H19C20.1 3 21 3.9 21 5ZM9 3H15V5H9V3ZM19 5H5V19H19V5Z" fill=""/>
                        <path d="M13.5 12.5L16.5 9.5L15 8L12 11L9 8L7.5 9.5L10.5 12.5L7.5 15.5L9 17L12 14L15 17L16.5 15.5L13.5 12.5Z" fill=""/>
                    </svg>
                </div>

                <div class="mt-4 flex items-end justify-between">
                    <div>
                        <h4 class="text-title-md font-bold text-black dark:text-white">
                            {{ \App\Models\Product::where('stock', 0)->count() }}
                        </h4>
                        <span class="text-sm font-medium">Out of Stock</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products Table -->
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="py-6 px-4 md:px-6 xl:px-7.5">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                    <h4 class="text-xl font-semibold text-black dark:text-white">
                        Products List
                    </h4>
                    
                    <!-- Search Form -->
                    <div class="flex-1 max-w-md">
                        <form method="GET" action="{{ route('admin.products.index') }}">
                            <div class="relative">
                                <input type="text" 
                                       name="search" 
                                       value="{{ request('search') }}"
                                       placeholder="Search products..." 
                                       class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent py-3 px-5 pl-13 text-black outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                                <div class="absolute left-4 top-4">
                                    <svg class="fill-body hover:fill-primary dark:fill-bodydark dark:hover:fill-primary" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.16666 3.33332C5.945 3.33332 3.33332 5.945 3.33332 9.16666C3.33332 12.3883 5.945 15 9.16666 15C12.3883 15 15 12.3883 15 9.16666C15 5.945 12.3883 3.33332 9.16666 3.33332ZM1.66666 9.16666C1.66666 5.02452 5.02452 1.66666 9.16666 1.66666C13.3088 1.66666 16.6667 5.02452 16.6667 9.16666C16.6667 13.3088 13.3088 16.6667 9.16666 16.6667C5.02452 16.6667 1.66666 13.3088 1.66666 9.16666Z" fill=""/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2857 13.2857C13.6112 12.9603 14.1388 12.9603 14.4642 13.2857L18.0892 16.9107C18.4147 17.2362 18.4147 17.7638 18.0892 18.0892C17.7638 18.4147 17.2362 18.4147 16.9107 18.0892L13.2857 14.4642C12.9603 14.1388 12.9603 13.6112 13.2857 13.2857Z" fill=""/>
                                    </svg>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            @if(session('success'))
                <div class="mx-4 mb-4 md:mx-6">
                    <div class="border border-success bg-success bg-opacity-10 px-4 py-3 text-success rounded-md">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ session('success') }}
                        </div>
                    </div>
                </div>
            @endif

            <div class="max-w-full overflow-x-auto">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-2 text-left dark:bg-meta-4">
                            <th class="min-w-[50px] py-4 px-4 font-medium text-black dark:text-white">
                                ID
                            </th>
                            <th class="min-w-[220px] py-4 px-4 font-medium text-black dark:text-white">
                                Product
                            </th>
                            <th class="min-w-[120px] py-4 px-4 font-medium text-black dark:text-white">
                                Price
                            </th>
                            <th class="min-w-[120px] py-4 px-4 font-medium text-black dark:text-white">
                                Stock
                            </th>
                            <th class="min-w-[120px] py-4 px-4 font-medium text-black dark:text-white">
                                Created
                            </th>
                            <th class="py-4 px-4 font-medium text-black dark:text-white">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
                            <tr>
                                <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                                    <p class="text-black dark:text-white">{{ $product->id }}</p>
                                </td>
                                <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                                    <div class="flex items-center">
                                        <div class="h-12.5 w-15 rounded-md">
                                            <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="h-full w-full rounded-md object-cover object-center" />
                                        </div>
                                        <div class="ml-4">
                                            <h5 class="font-medium text-black dark:text-white">{{ $product->name }}</h5>
                                            <p class="text-sm text-gray-500 dark:text-gray-400">{{ Str::limit($product->description, 50) }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                                    <p class="text-black dark:text-white font-medium">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                                </td>
                                <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                                    @if($product->stock > 10)
                                        <p class="inline-flex rounded-full bg-success bg-opacity-10 py-1 px-3 text-sm font-medium text-success">
                                            {{ $product->stock }} Units
                                        </p>
                                    @elseif($product->stock > 0)
                                        <p class="inline-flex rounded-full bg-warning bg-opacity-10 py-1 px-3 text-sm font-medium text-warning">
                                            {{ $product->stock }} Units
                                        </p>
                                    @else
                                        <p class="inline-flex rounded-full bg-danger bg-opacity-10 py-1 px-3 text-sm font-medium text-danger">
                                            Out of Stock
                                        </p>
                                    @endif
                                </td>
                                <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                                    <p class="text-black dark:text-white">{{ $product->created_at->format('d M Y') }}</p>
                                </td>
                                <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                                    <div class="flex items-center space-x-3.5">
                                        <a href="{{ route('admin.products.show', $product) }}" 
                                           class="hover:text-primary">
                                            <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.99981 14.8219C3.43106 14.8219 0.674805 9.50624 0.562305 9.28124C0.47793 9.11249 0.47793 8.88749 0.562305 8.71874C0.674805 8.49374 3.43106 3.17812 8.99981 3.17812C14.5686 3.17812 17.3248 8.49374 17.4373 8.71874C17.5217 8.88749 17.5217 9.11249 17.4373 9.28124C17.3248 9.50624 14.5686 14.8219 8.99981 14.8219ZM1.85605 8.99999C2.4748 10.0406 4.89356 13.2031 8.99981 13.2031C13.1061 13.2031 15.5248 10.0406 16.1436 8.99999C15.5248 7.95936 13.1061 4.79687 8.99981 4.79687C4.89356 4.79687 2.4748 7.95936 1.85605 8.99999Z" fill=""/>
                                                <path d="M9 11.3906C7.67812 11.3906 6.60938 10.3219 6.60938 9C6.60938 7.67813 7.67812 6.60938 9 6.60938C10.3219 6.60938 11.3906 7.67813 11.3906 9C11.3906 10.3219 10.3219 11.3906 9 11.3906ZM9 8.10938C8.50313 8.10938 8.10938 8.50313 8.10938 9C8.10938 9.49688 8.50313 9.89063 9 9.89063C9.49688 9.89063 9.89063 9.49688 9.89063 9C9.89063 8.50313 9.49688 8.10938 9 8.10938Z" fill=""/>
                                            </svg>
                                        </a>
                                        <a href="{{ route('admin.products.edit', $product) }}" 
                                           class="hover:text-primary">
                                            <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.99981 14.8219C3.43106 14.8219 0.674805 9.50624 0.562305 9.28124C0.47793 9.11249 0.47793 8.88749 0.562305 8.71874C0.674805 8.49374 3.43106 3.17812 8.99981 3.17812C14.5686 3.17812 17.3248 8.49374 17.4373 8.71874C17.5217 8.88749 17.5217 9.11249 17.4373 9.28124C17.3248 9.50624 14.5686 14.8219 8.99981 14.8219ZM1.85605 8.99999C2.4748 10.0406 4.89356 13.2031 8.99981 13.2031C13.1061 13.2031 15.5248 10.0406 16.1436 8.99999C15.5248 7.95936 13.1061 4.79687 8.99981 4.79687C4.89356 4.79687 2.4748 7.95936 1.85605 8.99999Z" fill=""/>
                                                <path d="M9 11.3906C7.67812 11.3906 6.60938 10.3219 6.60938 9C6.60938 7.67813 7.67812 6.60938 9 6.60938C10.3219 6.60938 11.3906 7.67813 11.3906 9C11.3906 10.3219 10.3219 11.3906 9 11.3906ZM9 8.10938C8.50313 8.10938 8.10938 8.50313 8.10938 9C8.10938 9.49688 8.50313 9.89063 9 9.89063C9.49688 9.89063 9.89063 9.49688 9.89063 9C9.89063 8.50313 9.49688 8.10938 9 8.10938Z" fill=""/>
                                            </svg>
                                        </a>
                                        <form action="{{ route('admin.products.destroy', $product) }}" 
                                              method="POST" class="inline"
                                              onsubmit="return confirm('Are you sure you want to delete {{ $product->name }}?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="hover:text-danger">
                                                <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.7535 2.47502H11.5879V1.9969C11.5879 1.15315 10.9129 0.478149 10.0691 0.478149H7.90352C7.05977 0.478149 6.38477 1.15315 6.38477 1.9969V2.47502H4.21914C3.40352 2.47502 2.72852 3.15002 2.72852 3.96565C2.72852 4.78127 3.40352 5.45627 4.21914 5.45627H13.7535C14.5691 5.45627 15.2441 4.78127 15.2441 3.96565C15.2441 3.15002 14.5691 2.47502 13.7535 2.47502ZM7.67852 1.9969C7.67852 1.85627 7.79102 1.74377 7.90352 1.74377H10.0691C10.2129 1.74377 10.3254 1.85627 10.3254 1.9969V2.47502H7.67852V1.9969Z" fill=""/>
                                                    <path d="M5.31289 16.1406C5.31289 16.9563 6.01602 17.6594 6.83164 17.6594H11.1379C11.9535 17.6594 12.6566 16.9563 12.6566 16.1406V6.00002H5.31289V16.1406ZM7.19414 7.72189C7.19414 7.37814 7.47539 7.09689 7.81914 7.09689C8.16289 7.09689 8.44414 7.37814 8.44414 7.72189V14.8219C8.44414 15.1656 8.16289 15.4469 7.81914 15.4469C7.47539 15.4469 7.19414 15.1656 7.19414 14.8219V7.72189ZM9.55664 7.72189C9.55664 7.37814 9.83789 7.09689 10.1816 7.09689C10.5254 7.09689 10.8066 7.37814 10.8066 7.72189V14.8219C10.8066 15.1656 10.5254 15.4469 10.1816 15.4469C9.83789 15.4469 9.55664 15.1656 9.55664 14.8219V7.72189Z" fill=""/>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="border-b border-[#eee] py-16 px-4 text-center dark:border-strokedark">
                                    <div class="flex flex-col items-center">
                                        <svg class="w-16 h-16 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                        </svg>
                                        <h3 class="text-lg font-medium text-black dark:text-white mb-2">No products yet</h3>
                                        <p class="text-gray-500 dark:text-gray-400 mb-4">Start by adding your first product.</p>
                                        <a href="{{ route('admin.products.create') }}" 
                                           class="inline-flex items-center justify-center rounded-md bg-primary py-3 px-6 text-center font-medium text-white hover:bg-opacity-90">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            Add First Product
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($products->hasPages())
                <div class="px-4 py-4 md:px-6 border-t border-stroke dark:border-strokedark">
                    {{ $products->links() }}
                </div>
            @endif
        </div>
    </div>
</x-layouts.tailadmin>