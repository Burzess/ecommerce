<x-layouts.ecommerce title="Shopping Cart">
    <!-- breadcrumb -->
    <div class="container py-4 flex items-center gap-3">
        <a href="{{ route('home') }}" class="text-primary text-base">
            <i class="fa-solid fa-house"></i>
        </a>
        <span class="text-sm text-gray-400">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
        <p class="text-gray-600 font-medium">Cart</p>
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

    @if($cartItems->count() > 0)
        <!-- shopping cart -->
        <div class="container grid grid-cols-12 items-start pb-16 pt-4 gap-6">
            <div class="col-span-8">
                <div class="space-y-4">
                    @foreach($cartItems as $item)
                    <div class="flex items-center justify-between border gap-6 p-4 border-gray-200 rounded">
                        <div class="w-28">
                            @if($item->product->image)
                                <img src="{{ asset('storage/' . $item->product->image) }}" alt="product" class="w-full">
                            @else
                                <img src="{{ asset('assets/ecommerce/images/products/product6.jpg') }}" alt="product" class="w-full">
                            @endif
                        </div>
                        <div class="w-1/3">
                            <h2 class="text-gray-800 text-xl font-medium uppercase">{{ $item->product->name }}</h2>
                            <p class="text-gray-500 text-sm">Availability: 
                                @if($item->product->stock > 0)
                                    <span class="text-green-600">In Stock ({{ $item->product->stock }})</span>
                                @else
                                    <span class="text-red-600">Out of Stock</span>
                                @endif
                            </p>
                        </div>
                        <div class="text-primary text-lg font-semibold">Rp {{ number_format($item->product->price, 0, ',', '.') }}</div>
                        <form action="{{ route('cart.update', $item) }}" method="POST" class="flex border border-gray-300 text-gray-600 divide-x divide-gray-300 w-max">
                            @csrf
                            @method('PUT')
                            <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none" onclick="decreaseQuantity({{ $loop->index }})">-</div>
                            <input type="number" name="quantity" id="quantity{{ $loop->index }}" value="{{ $item->quantity }}" min="1" max="{{ min(10, $item->product->stock) }}" class="w-10 h-8 text-base flex items-center justify-center border-0 text-center" onchange="this.form.submit()">
                            <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none" onclick="increaseQuantity({{ $loop->index }})">+</div>
                        </form>
                        <div class="text-primary text-lg font-semibold">Rp {{ number_format($item->total_price, 0, ',', '.') }}</div>
                        <form action="{{ route('cart.destroy', $item) }}" method="POST" onsubmit="return confirm('Remove this item from cart?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-gray-600 cursor-pointer hover:text-primary">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-span-4 border border-gray-200 p-4 rounded">
                <h4 class="text-gray-800 text-lg mb-4 font-medium uppercase">order summary</h4>
                <div class="space-y-2">
                    <div class="flex justify-between">
                        <div>Subtotal</div>
                        <div class="text-gray-600">Rp {{ number_format($total, 0, ',', '.') }}</div>
                    </div>
                    <div class="flex justify-between">
                        <div>Delivery</div>
                        <div class="text-gray-600">Free</div>
                    </div>
                    <div class="flex justify-between">
                        <div>Tax</div>
                        <div class="text-gray-600">Free</div>
                    </div>
                    <div class="flex justify-between text-gray-800 font-medium py-3 uppercase">
                        <div>Total</div>
                        <div>Rp {{ number_format($total, 0, ',', '.') }}</div>
                    </div>

                    <div class="flex items-center mb-4 mt-2">
                        <input type="checkbox" name="agreement" id="agreement" class="text-primary focus:ring-0 rounded-sm cursor-pointer w-3 h-3">
                        <label for="agreement" class="text-gray-600 ml-3 cursor-pointer text-sm">
                            I agree to the <a href="#" class="text-primary">terms & conditions</a>
                        </label>
                    </div>
                    
                    <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-2 rounded text-sm mb-4">
                        Checkout feature will be available in Sprint 3!
                    </div>

                    <a href="#" class="w-full block text-center bg-primary border border-primary text-white px-4 py-3 font-medium rounded-md uppercase hover:bg-transparent hover:text-primary transition">
                        Place order
                    </a>
                </div>
            </div>
        </div>
        <!-- ./shopping cart -->
    @else
        <!-- empty cart -->
        <div class="container pb-16 pt-4">
            <div class="bg-white shadow rounded overflow-hidden">
                <div class="px-6 py-16 text-center">
                    <div class="text-6xl mb-4 text-gray-300">
                        <i class="fa-solid fa-shopping-cart"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Your cart is empty</h3>
                    <p class="text-gray-600 mb-6">Add some products to get started!</p>
                    <a href="{{ route('home') }}" 
                       class="bg-primary border border-primary text-white px-8 py-3 font-medium rounded-md hover:bg-transparent hover:text-primary transition">
                        Continue Shopping
                    </a>
                </div>
            </div>
        </div>
        <!-- ./empty cart -->
    @endif

    <script>
        function increaseQuantity(index) {
            const quantityInput = document.getElementById('quantity' + index);
            const currentValue = parseInt(quantityInput.value);
            const maxValue = parseInt(quantityInput.max);
            
            if (currentValue < maxValue) {
                quantityInput.value = currentValue + 1;
                quantityInput.form.submit();
            }
        }

        function decreaseQuantity(index) {
            const quantityInput = document.getElementById('quantity' + index);
            const currentValue = parseInt(quantityInput.value);
            const minValue = parseInt(quantityInput.min);
            
            if (currentValue > minValue) {
                quantityInput.value = currentValue - 1;
                quantityInput.form.submit();
            }
        }
    </script>
</x-layouts.ecommerce>