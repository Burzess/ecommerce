<x-layouts.tailadmin title="Dashboard Admin">
<div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5">
    <!-- Card Item Start -->
    <div class="rounded-sm border border-stroke bg-white py-6 px-7.5 shadow-default dark:border-strokedark dark:bg-boxdark">
        <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
            <svg class="fill-primary dark:fill-white" width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 15.1156C4.19376 15.1156 0.825012 8.61876 0.687512 8.34376C0.584387 8.13751 0.584387 7.86251 0.687512 7.65626C0.825012 7.38126 4.19376 0.918762 11 0.918762C17.8063 0.918762 21.175 7.38126 21.3125 7.65626C21.4156 7.86251 21.4156 8.13751 21.3125 8.34376C21.175 8.61876 17.8063 15.1156 11 15.1156ZM2.26876 8.00001C3.02501 9.27189 5.98126 13.5688 11 13.5688C16.0188 13.5688 18.975 9.27189 19.7313 8.00001C18.975 6.72814 16.0188 2.43126 11 2.43126C5.98126 2.43126 3.02501 6.72814 2.26876 8.00001Z" fill=""/>
                <path d="M11 10.9219C9.38438 10.9219 8.07812 9.61562 8.07812 8C8.07812 6.38438 9.38438 5.07812 11 5.07812C12.6156 5.07812 13.9219 6.38438 13.9219 8C13.9219 9.61562 12.6156 10.9219 11 10.9219ZM11 6.625C10.2437 6.625 9.625 7.24375 9.625 8C9.625 8.75625 10.2437 9.375 11 9.375C11.7563 9.375 12.375 8.75625 12.375 8C12.375 7.24375 11.7563 6.625 11 6.625Z" fill=""/>
            </svg>
        </div>

        <div class="mt-4 flex items-end justify-between">
            <div>
                <h4 class="text-title-md font-bold text-black dark:text-white">
                    {{ \App\Models\Product::count() }}
                </h4>
                <span class="text-sm font-medium">Total Produk</span>
            </div>

            <span class="flex items-center gap-1 text-sm font-medium text-meta-3">
                {{ \App\Models\Product::count() > 0 ? '+2.59%' : '0%' }}
                <svg class="fill-meta-3" width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z" fill=""/>
                </svg>
            </span>
        </div>
    </div>
    <!-- Card Item End -->

    <!-- Card Item Start -->
    <div class="rounded-sm border border-stroke bg-white py-6 px-7.5 shadow-default dark:border-strokedark dark:bg-boxdark">
        <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
            <svg class="fill-primary dark:fill-white" width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.7531 16.4312C10.3781 16.4312 9.27808 17.5312 9.27808 18.9062C9.27808 20.2812 10.3781 21.3812 11.7531 21.3812C13.1281 21.3812 14.2281 20.2812 14.2281 18.9062C14.2281 17.5656 13.1281 16.4312 11.7531 16.4312ZM11.7531 19.8687C11.2375 19.8687 10.825 19.4562 10.825 18.9406C10.825 18.425 11.2375 18.0125 11.7531 18.0125C12.2687 18.0125 12.6812 18.425 12.6812 18.9406C12.6812 19.4219 12.2343 19.8687 11.7531 19.8687Z" fill=""/>
                <path d="M5.22183 16.4312C3.84683 16.4312 2.74683 17.5312 2.74683 18.9062C2.74683 20.2812 3.84683 21.3812 5.22183 21.3812C6.59683 21.3812 7.69683 20.2812 7.69683 18.9062C7.69683 17.5656 6.59683 16.4312 5.22183 16.4312ZM5.22183 19.8687C4.7062 19.8687 4.2937 19.4562 4.2937 18.9406C4.2937 18.425 4.7062 18.0125 5.22183 18.0125C5.73745 18.0125 6.14995 18.425 6.14995 18.9406C6.14995 19.4219 5.70308 19.8687 5.22183 19.8687Z" fill=""/>
                <path d="M19.0062 0.618744H17.15C16.325 0.618744 15.6031 1.23749 15.5 2.06249L14.95 6.01562H1.37185C1.0281 6.01562 0.684353 6.18749 0.443728 6.46249C0.237478 6.73749 0.134353 7.11562 0.237478 7.45937L2.36873 13.9375C2.50623 14.4187 2.9531 14.7281 3.46873 14.7281H12.9562C14.2281 14.7281 15.3281 13.8 15.5 12.5281L16.9437 2.26874C16.9437 2.19999 17.0125 2.16562 17.0812 2.16562H19.0062C19.4187 2.16562 19.7281 1.85624 19.7281 1.44374C19.7281 1.03124 19.4187 0.618744 19.0062 0.618744ZM14.0219 12.3937C13.9531 12.8062 13.5062 13.0812 13.0937 13.0812H3.7781L2.0656 7.56249H14.7C14.8031 8.49374 14.0219 12.3937 14.0219 12.3937Z" fill=""/>
            </svg>
        </div>

        <div class="mt-4 flex items-end justify-between">
            <div>
                <h4 class="text-title-md font-bold text-black dark:text-white">
                    {{ \App\Models\Product::where('stock', '<=', 10)->count() }}
                </h4>
                <span class="text-sm font-medium">Stok Rendah</span>
            </div>

            <span class="flex items-center gap-1 text-sm font-medium text-meta-5">
                @if(\App\Models\Product::where('stock', '<=', 10)->count() > 0)
                    Perlu Restok
                @else
                    Aman
                @endif
            </span>
        </div>
    </div>
    <!-- Card Item End -->

    <!-- Card Item Start -->
    <div class="rounded-sm border border-stroke bg-white py-6 px-7.5 shadow-default dark:border-strokedark dark:bg-boxdark">
        <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
            <svg class="fill-primary dark:fill-white" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.1063 18.0469L19.3875 3.23126C19.2157 1.71876 17.9438 0.584381 16.3969 0.584381H5.56878C4.05628 0.584381 2.78441 1.71876 2.57816 3.23126L0.859406 18.0469C0.756281 18.9063 1.03128 19.7313 1.61566 20.3844C2.20003 21.0375 2.99066 21.3813 3.85003 21.3813H18.1157C18.975 21.3813 19.8 21.0031 20.35 20.3844C20.9 19.7656 21.2094 18.9063 21.1063 18.0469ZM19.2157 19.3531C18.9407 19.6625 18.5625 19.8344 18.15 19.8344H3.85003C3.43753 19.8344 3.05941 19.6625 2.78441 19.3531C2.50941 19.0438 2.37191 18.6313 2.44066 18.2188L4.12503 3.43751C4.19378 2.71563 4.81253 2.16563 5.56878 2.16563H16.4313C17.1875 2.16563 17.8063 2.71563 17.875 3.43751L19.5594 18.2188C19.6281 18.6313 19.4906 19.0438 19.2157 19.3531Z" fill=""/>
                <path d="M14.3406 7.39062C13.7875 7.39062 13.3406 7.83751 13.3406 8.39062C13.3406 9.59375 12.3281 10.6062 11.125 10.6062C9.92184 10.6062 8.90934 9.59375 8.90934 8.39062C8.90934 7.83751 8.46246 7.39062 7.90934 7.39062C7.35621 7.39062 6.90934 7.83751 6.90934 8.39062C6.90934 10.6969 8.81871 12.6062 11.125 12.6062C13.4312 12.6062 15.3406 10.6969 15.3406 8.39062C15.3406 7.83751 14.8937 7.39062 14.3406 7.39062Z" fill=""/>
            </svg>
        </div>

        <div class="mt-4 flex items-end justify-between">
            <div>
                <h4 class="text-title-md font-bold text-black dark:text-white">
                    {{ \App\Models\Product::where('stock', 0)->count() }}
                </h4>
                <span class="text-sm font-medium">Stok Habis</span>
            </div>

            <span class="flex items-center gap-1 text-sm font-medium text-meta-1">
                @if(\App\Models\Product::where('stock', 0)->count() > 0)
                    Segera Restok
                @else
                    Tersedia
                @endif
            </span>
        </div>
    </div>
    <!-- Card Item End -->

    <!-- Card Item Start -->
    <div class="rounded-sm border border-stroke bg-white py-6 px-7.5 shadow-default dark:border-strokedark dark:bg-boxdark">
        <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
            <svg class="fill-primary dark:fill-white" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.0002 7.79065C11.0814 7.79065 12.7689 6.1594 12.7689 4.1344C12.7689 2.1094 11.0814 0.478149 9.0002 0.478149C6.91895 0.478149 5.23145 2.1094 5.23145 4.1344C5.23145 6.1594 6.91895 7.79065 9.0002 7.79065ZM9.0002 1.7719C10.3783 1.7719 11.5033 2.84065 11.5033 4.16252C11.5033 5.4844 10.3783 6.55315 9.0002 6.55315C7.62207 6.55315 6.49707 5.4844 6.49707 4.16252C6.49707 2.84065 7.62207 1.7719 9.0002 1.7719Z" fill=""/>
                <path d="M10.8283 9.05627H7.17207C4.16269 9.05627 1.71582 11.5031 1.71582 14.5125V16.875C1.71582 17.2125 1.99707 17.4938 2.33457 17.4938C2.67207 17.4938 2.95332 17.2125 2.95332 16.875V14.5125C2.95332 12.2188 4.87832 10.2938 7.17207 10.2938H10.8283C13.1221 10.2938 15.0471 12.2188 15.0471 14.5125V16.875C15.0471 17.2125 15.3283 17.4938 15.6658 17.4938C16.0033 17.4938 16.2846 17.2125 16.2846 16.875V14.5125C16.2846 11.5031 13.8377 9.05627 10.8283 9.05627Z" fill=""/>
            </svg>
        </div>

        <div class="mt-4 flex items-end justify-between">
            <div>
                <h4 class="text-title-md font-bold text-black dark:text-white">
                    {{ \App\Models\User::where('role', 'buyer')->count() }}
                </h4>
                <span class="text-sm font-medium">Total Pengguna</span>
            </div>

            <span class="flex items-center gap-1 text-sm font-medium text-meta-3">
                {{ \App\Models\User::count() }} total
            </span>
        </div>
    </div>
    <!-- Card Item End -->
</div>

<!-- ====== Chart One Start -->
<div class="mt-4 grid grid-cols-12 gap-4 md:mt-6 md:gap-6 2xl:mt-7.5 2xl:gap-7.5">
    <!-- ====== Data Table One Start -->
    <div class="col-span-12 xl:col-span-8">
        <div class="rounded-sm border border-stroke bg-white px-5 pt-6 pb-2.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
            <h4 class="mb-6 text-xl font-semibold text-black dark:text-white">
                Produk Terbaru
            </h4>

            <div class="flex flex-col">
                <div class="grid grid-cols-3 rounded-sm bg-gray-2 dark:bg-meta-4 sm:grid-cols-5">
                    <div class="p-2.5 xl:p-5">
                        <h5 class="text-sm font-medium uppercase xsm:text-base">
                            Nama Produk
                        </h5>
                    </div>
                    <div class="p-2.5 text-center xl:p-5">
                        <h5 class="text-sm font-medium uppercase xsm:text-base">
                            Harga
                        </h5>
                    </div>
                    <div class="p-2.5 text-center xl:p-5">
                        <h5 class="text-sm font-medium uppercase xsm:text-base">
                            Stok
                        </h5>
                    </div>
                    <div class="hidden p-2.5 text-center sm:block xl:p-5">
                        <h5 class="text-sm font-medium uppercase xsm:text-base">
                            Dibuat
                        </h5>
                    </div>
                    <div class="hidden p-2.5 text-center sm:block xl:p-5">
                        <h5 class="text-sm font-medium uppercase xsm:text-base">
                            Aksi
                        </h5>
                    </div>
                </div>

                @foreach(\App\Models\Product::latest()->take(5)->get() as $product)
                <div class="grid grid-cols-3 border-b border-stroke dark:border-strokedark sm:grid-cols-5">
                    <div class="flex items-center gap-3 p-2.5 xl:p-5">
                        <p class="hidden text-black dark:text-white sm:block">{{ $product->name }}</p>
                    </div>

                    <div class="flex items-center justify-center p-2.5 xl:p-5">
                        <p class="text-black dark:text-white">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    </div>

                    <div class="flex items-center justify-center p-2.5 xl:p-5">
                        <p class="text-meta-3">{{ $product->stock }}</p>
                    </div>

                    <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
                        <p class="text-black dark:text-white">{{ $product->created_at->diffForHumans() }}</p>
                    </div>

                    <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
                        <a href="{{ route('admin.products.show', $product) }}" class="inline-flex items-center justify-center rounded-full bg-primary py-1 px-3 text-sm font-medium text-white hover:bg-opacity-90">
                            Lihat
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- ====== Data Table One End -->

    <!-- ====== Quick Actions Start -->
    <div class="col-span-12 xl:col-span-4">
        <div class="rounded-sm border border-stroke bg-white p-7.5 shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="mb-4 justify-between gap-4 sm:flex">
                <div>
                    <h4 class="text-xl font-semibold text-black dark:text-white">
                        Aksi Cepat
                    </h4>
                </div>
            </div>

            <div class="mb-2">
                <p class="font-medium text-black dark:text-white">
                    Manajemen Produk
                </p>
                <p class="text-sm text-body">Kelola produk dan stok</p>
            </div>

            <div class="space-y-4">
                <a href="{{ route('admin.products.create') }}" 
                   class="inline-flex w-full items-center justify-center rounded-md bg-primary py-3 px-6 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10">
                    <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Tambah Produk Baru
                </a>
                
                <a href="{{ route('admin.products.index') }}" 
                   class="inline-flex w-full items-center justify-center rounded-md border border-stroke py-3 px-6 text-center font-medium text-black hover:bg-opacity-90 dark:border-strokedark dark:text-white lg:px-8 xl:px-10">
                    <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                    Kelola Produk
                </a>

                <div class="rounded-sm border border-stroke p-4 dark:border-strokedark">
                    <h5 class="text-sm font-medium text-black dark:text-white mb-2">Statistik Hari Ini</h5>
                    <div class="flex justify-between">
                        <span class="text-sm text-body">Produk Baru:</span>
                        <span class="text-sm font-medium text-black dark:text-white">{{ \App\Models\Product::whereDate('created_at', today())->count() }}</span>
                    </div>
                    <div class="flex justify-between mt-1">
                        <span class="text-sm text-body">Stok Rendah:</span>
                        <span class="text-sm font-medium text-meta-1">{{ \App\Models\Product::where('stock', '<=', 10)->count() }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Quick Actions End -->
</div>
</x-layouts.tailadmin>