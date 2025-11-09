<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4">
                        {{ __('Anda sudah masuk!') }}
                    </div>

                    @if (auth()->user()->role === 'admin')
                        <div class="mt-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Admin Panel</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                <a href="{{ route('admin.products.index') }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-6 rounded-lg text-center transition duration-200">
                                    <div class="text-xl mb-2">📦</div>
                                    <div>Manage Products</div>
                                    <div class="text-sm opacity-90">Add, edit, delete products</div>
                                </a>

                                <div class="bg-gray-300 text-gray-600 font-bold py-4 px-6 rounded-lg text-center">
                                    <div class="text-xl mb-2">📋</div>
                                    <div>Manage Orders</div>
                                    <div class="text-sm opacity-90">Coming in Sprint 3</div>
                                </div>

                                <div class="bg-gray-300 text-gray-600 font-bold py-4 px-6 rounded-lg text-center">
                                    <div class="text-xl mb-2">💬</div>
                                    <div>Contact Messages</div>
                                    <div class="text-sm opacity-90">Coming in Sprint 5</div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="mt-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Welcome, {{ auth()->user()->name }}!
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                <a href="{{ route('home') }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-6 rounded-lg text-center transition duration-200">
                                    <div class="text-xl mb-2">🛍️</div>
                                    <div>Browse Products</div>
                                    <div class="text-sm opacity-90">Shop our catalog</div>
                                </a>

                                <a href="{{ route('cart.index') }}"
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-4 px-6 rounded-lg text-center transition duration-200">
                                    <div class="text-xl mb-2">🛒</div>
                                    <div>My Cart</div>
                                    <div class="text-sm opacity-90">
                                        @if (auth()->user()->cartItems()->count() > 0)
                                            {{ auth()->user()->cartItems()->sum('quantity') }} items
                                        @else
                                            Empty cart
                                        @endif
                                    </div>
                                </a>

                                <div class="bg-gray-300 text-gray-600 font-bold py-4 px-6 rounded-lg text-center">
                                    <div class="text-xl mb-2">�</div>
                                    <div>My Orders</div>
                                    <div class="text-sm opacity-90">Coming in Sprint 3</div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
