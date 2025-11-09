<x-layouts.ecommerce title="{{ $product->name }}">
    <!-- breadcrumb -->
    <div class="container py-4 flex items-center gap-3">
        <a href="{{ route('home') }}" class="text-primary text-base">
            <i class="fa-solid fa-house"></i>
        </a>
        <span class="text-sm text-gray-400">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
        <p class="text-gray-600 font-medium">Product</p>
    </div>
    <!-- ./breadcrumb -->

    @if(session('success'))
        <div class="container mb-6">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if(session('warning'))
        <div class="container mb-6">
            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded">
                {{ session('warning') }}
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="container mb-6">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                {{ session('error') }}
            </div>
        </div>
    @endif

    <!-- product detail -->
    <div class="container grid grid-cols-2 gap-6">
        <div>
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="product" class="w-full">
            @else
                <img src="{{ asset('assets/ecommerce/images/products/product1.jpg') }}" alt="product" class="w-full">
            @endif
            <div class="grid grid-cols-5 gap-4 mt-4">
                <img src="{{ asset('assets/ecommerce/images/products/product2.jpg') }}" alt="product2" class="w-full cursor-pointer border border-primary">
                <img src="{{ asset('assets/ecommerce/images/products/product3.jpg') }}" alt="product2" class="w-full cursor-pointer border">
                <img src="{{ asset('assets/ecommerce/images/products/product4.jpg') }}" alt="product2" class="w-full cursor-pointer border">
                <img src="{{ asset('assets/ecommerce/images/products/product5.jpg') }}" alt="product2" class="w-full cursor-pointer border">
                <img src="{{ asset('assets/ecommerce/images/products/product6.jpg') }}" alt="product2" class="w-full cursor-pointer border">
            </div>
        </div>

        <div>
            <h2 class="text-3xl font-medium uppercase mb-2">{{ $product->name }}</h2>
            <div class="flex items-center mb-4">
                <div class="flex gap-1 text-sm text-yellow-400">
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                </div>
                <div class="text-xs text-gray-500 ml-3">(150 Reviews)</div>
            </div>
            <div class="space-y-2">
                <p class="text-gray-800 font-semibold space-x-2">
                    <span>Availability: </span>
                    @if($product->stock > 0)
                        <span class="text-green-600">In Stock ({{ $product->stock }} items)</span>
                    @else
                        <span class="text-red-600">Out of Stock</span>
                    @endif
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">Brand: </span>
                    <span class="text-gray-600">Apex</span>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">Category: </span>
                    <span class="text-gray-600">Sofa</span>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">SKU: </span>
                    <span class="text-gray-600">BE45VGRT</span>
                </p>
            </div>
            <div class="flex items-baseline mb-1 space-x-2 font-roboto mt-4">
                <p class="text-xl text-primary font-semibold">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
            </div>

            <p class="mt-4 text-gray-600">{{ $product->description }}</p>

            <!-- size filter -->
            <div class="pt-4">
                <h3 class="text-sm text-gray-800 uppercase mb-1">Size</h3>
                <div class="flex items-center gap-2">
                    <div class="size-selector">
                        <input type="radio" name="size" id="size-xs" class="hidden">
                        <label for="size-xs" class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">XS</label>
                    </div>
                    <div class="size-selector">
                        <input type="radio" name="size" id="size-sm" class="hidden">
                        <label for="size-sm" class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">S</label>
                    </div>
                    <div class="size-selector">
                        <input type="radio" name="size" id="size-m" class="hidden">
                        <label for="size-m" class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">M</label>
                    </div>
                    <div class="size-selector">
                        <input type="radio" name="size" id="size-l" class="hidden">
                        <label for="size-l" class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">L</label>
                    </div>
                    <div class="size-selector">
                        <input type="radio" name="size" id="size-xl" class="hidden">
                        <label for="size-xl" class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">XL</label>
                    </div>
                </div>
            </div>
            <!-- ./size filter -->

            <!-- color filter -->
            <div class="pt-4">
                <h3 class="text-sm text-gray-800 uppercase mb-1">Color</h3>
                <div class="flex items-center gap-2">
                    <div class="color-selector">
                        <input type="radio" name="color" id="red" class="hidden">
                        <label for="red" class="border border-gray-200 rounded-sm h-5 w-5 cursor-pointer shadow-sm block" style="background-color: #fc3d57;"></label>
                    </div>
                    <div class="color-selector">
                        <input type="radio" name="color" id="black" class="hidden">
                        <label for="black" class="border border-gray-200 rounded-sm h-5 w-5 cursor-pointer shadow-sm block" style="background-color: #000;"></label>
                    </div>
                    <div class="color-selector">
                        <input type="radio" name="color" id="white" class="hidden">
                        <label for="white" class="border border-gray-200 rounded-sm h-5 w-5 cursor-pointer shadow-sm block" style="background-color: #fff;"></label>
                    </div>
                </div>
            </div>
            <!-- ./color filter -->

            <!-- quantity -->
            @auth
                @if($product->stock > 0)
                    <form action="{{ route('cart.store') }}" method="POST" class="mt-6">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        
                        <div class="flex border border-gray-300 text-gray-600 divide-x divide-gray-300 w-max">
                            <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none" onclick="decreaseQuantity()">-</div>
                            <input type="number" name="quantity" id="quantity" value="1" min="1" max="{{ min(10, $product->stock) }}" class="w-10 h-8 text-base flex items-center justify-center border-0 text-center" readonly>
                            <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none" onclick="increaseQuantity()">+</div>
                        </div>
                        
                        <div class="mt-6 flex gap-3 border-b border-gray-200 pb-5 pt-5">
                            <button type="submit" class="bg-primary border border-primary text-white px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:bg-transparent hover:text-primary transition">
                                <i class="fa-solid fa-bag-shopping"></i> Add to cart
                            </button>
                            <a href="#" class="border border-gray-300 text-gray-600 px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:text-primary transition">
                                <i class="fa-solid fa-heart"></i> Wishlist
                            </a>
                        </div>
                    </form>
                @else
                    <div class="mt-6">
                        <button disabled class="bg-gray-400 border border-gray-400 text-white px-8 py-2 font-medium rounded uppercase cursor-not-allowed">
                            Out of Stock
                        </button>
                    </div>
                @endif
            @else
                <div class="mt-6">
                    <a href="{{ route('login') }}" class="bg-primary border border-primary text-white px-8 py-2 font-medium rounded uppercase hover:bg-transparent hover:text-primary transition">
                        Login to Buy
                    </a>
                </div>
            @endauth
            <!-- ./quantity -->

            <!-- product share -->
            <div class="flex gap-3 mt-4">
                <a href="#" class="text-gray-400 hover:text-gray-500 h-8 w-8 rounded-full border border-gray-300 flex items-center justify-center">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500 h-8 w-8 rounded-full border border-gray-300 flex items-center justify-center">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500 h-8 w-8 rounded-full border border-gray-300 flex items-center justify-center">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
            <!-- ./product share -->
        </div>
    </div>
    <!-- ./product detail -->

    <!-- description -->
    <div class="container pb-16">
        <h3 class="border-b border-gray-200 font-roboto text-gray-800 pb-3 font-medium">Product details</h3>
        <div class="w-3/5 pt-6">
            <div class="text-gray-600">
                <p>{{ $product->description }}</p>
            </div>

            <table class="table-auto border-collapse w-full text-left text-gray-600 text-sm mt-6">
                <tr>
                    <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Color</th>
                    <td class="py-2 px-4 border border-gray-300">Blank, Brown, Red</td>
                </tr>
                <tr>
                    <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Material</th>
                    <td class="py-2 px-4 border border-gray-300">Latex</td>
                </tr>
                <tr>
                    <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Weight</th>
                    <td class="py-2 px-4 border border-gray-300">55kg</td>
                </tr>
            </table>
        </div>
    </div>
    <!-- ./description -->

    <!-- related product -->
    <div class="container pb-16">
        <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">Related products</h2>
        <div class="grid grid-cols-4 gap-6">
            @foreach(\App\Models\Product::where('id', '!=', $product->id)->inRandomOrder()->take(4)->get() as $relatedProduct)
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    @if($relatedProduct->image)
                        <img src="{{ asset('storage/' . $relatedProduct->image) }}" alt="product" class="w-full h-64 object-cover">
                    @else
                        <img src="{{ asset('assets/ecommerce/images/products/product1.jpg') }}" alt="product" class="w-full h-64 object-cover">
                    @endif
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                        justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="{{ route('products.show', $relatedProduct) }}" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition" title="view product">
                                <i class="fa-solid fa-magnifying-glass"></i>
                        </a>
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition" title="add to wishlist">
                                <i class="fa-solid fa-heart"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-4 pb-3 px-4">
                    <a href="{{ route('products.show', $relatedProduct) }}">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">{{ $relatedProduct->name }}</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-primary font-semibold">Rp {{ number_format($relatedProduct->price, 0, ',', '.') }}</p>
                    </div>
                    <div class="flex items-center">
                        <div class="flex gap-1 text-sm text-yellow-400">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3">(150)</div>
                    </div>
                </div>
                @auth
                    @if($relatedProduct->stock > 0)
                        <form action="{{ route('cart.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $relatedProduct->id }}">
                            <input type="hidden" name="quantity" value="1">
                            <button type="submit" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add to cart</button>
                        </form>
                    @else
                        <button disabled class="block w-full py-1 text-center text-white bg-gray-400 border border-gray-400 rounded-b cursor-not-allowed">Out of Stock</button>
                    @endif
                @else
                    <a href="{{ route('login') }}" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Login to Buy</a>
                @endauth
            </div>
            @endforeach
        </div>
    </div>
    <!-- ./related product -->

    <script>
        function increaseQuantity() {
            const quantityInput = document.getElementById('quantity');
            const currentValue = parseInt(quantityInput.value);
            const maxValue = parseInt(quantityInput.max);
            
            if (currentValue < maxValue) {
                quantityInput.value = currentValue + 1;
            }
        }

        function decreaseQuantity() {
            const quantityInput = document.getElementById('quantity');
            const currentValue = parseInt(quantityInput.value);
            const minValue = parseInt(quantityInput.min);
            
            if (currentValue > minValue) {
                quantityInput.value = currentValue - 1;
            }
        }
    </script>
</x-layouts.ecommerce>