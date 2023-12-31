<x-app-layout>
    <x-slot name="header">
        <ul class="flex">
            <li class="mr-5" style="margin-right: 5%">
                <a class="inline-block border border-gray-800 rounded py-2 px-4 bg-gray-950 hover:bg-gray-500 text-white"
                    href="{{ route('dashboard') }}">Store</a>
            </li>
            <li class="mr-5">
                <a class="inline-block border border-white rounded hover:border-gray-200 text-grey-950 hover:bg-gray-200 py-2 px-4"
                    href="{{ route('library') }}">Library</a>
            </li>
            <li class="ml-auto" style="margin-left: auto">
            <a href="{{ route('shopping.cart') }}" class="inline-flex items-center ml-auto px-3 py-2 border border-gray-800 rounded bg-white text-gray-800 hover:bg-gray-500 hover:text-white">
                <i class="fas fa-cart-shopping"></i>
                <span class="ml-1">Cart</span>
                <span class="badge text-red-500 bg-red-100 px-2 py-1 rounded-full">{{ count((array) session('cart')) }}</span>
            </a>
            </li>
        </ul>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white">
                    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-6 lg:max-w-7xl lg:px-8">
                        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2>

                        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-1 lg:grid-cols-4 xl:gap-x-8">
                            <!-- More products... -->
                            @php $total = 0 @endphp
                            <div class="group relative">
                                <div
                                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                        alt="Front of men&#039;s Basic Tee in black."
                                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                </div>
                                <div class="mt-4 flex justify-between">
                                    <div>
                                        <h3 class="text-sm text-gray-700">
                                            <a href="#">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                Basic Tee
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">Black</p>
                                    </div>
                                    <p class="text-sm font-medium text-gray-900"><span>$</span>35</p>
                                </div>
                            </div>
                            <div class="group relative">
                                <div
                                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                        alt="Front of men&#039;s Basic Tee in black."
                                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                </div>
                                <div class="mt-4 flex justify-between">
                                    <div>
                                        <h3 class="text-sm text-gray-700">
                                            <a href="#">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                Basic Tee
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">Black</p>
                                    </div>
                                    <p class="text-sm font-medium text-gray-900">$35</p>
                                </div>
                            </div>
                            <div class="group relative">
                                <div
                                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                        alt="Front of men&#039;s Basic Tee in black."
                                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                </div>
                                <div class="mt-4 flex justify-between">
                                    <div>
                                        <h3 class="text-sm text-gray-700">
                                            <a href="#">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                Basic Tee
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">Black</p>
                                    </div>
                                    <p class="text-sm font-medium text-gray-900">$35</p>
                                </div>
                            </div>
                            <div class="group relative">
                                <div
                                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                        alt="Front of men&#039;s Basic Tee in black."
                                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                </div>
                                <div class="mt-4 flex justify-between">
                                    <div>
                                        <h3 class="text-sm text-gray-700">
                                            <a href="#">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                Basic Tee
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">Black</p>
                                    </div>
                                    <p class="text-sm font-medium text-gray-900">$35</p>
                                </div>
                            </div>
                            <div class="group relative">
                                <div
                                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                        alt="Front of men&#039;s Basic Tee in black."
                                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                </div>
                                <div class="mt-4 flex justify-between">
                                    <div>
                                        <h3 class="text-sm text-gray-700">
                                            <a href="#">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                Basic Tee
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">Black</p>
                                    </div>
                                    <p class="text-sm font-medium text-gray-900">$35</p>
                                </div>
                            </div>
                            <div class="group relative">
                                <div
                                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                        alt="Front of men&#039;s Basic Tee in black."
                                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                </div>
                                <div class="mt-4 flex justify-between">
                                    <div>
                                        <h3 class="text-sm text-gray-700">
                                            <a href="#">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                Basic Tee
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">Black</p>
                                    </div>
                                    <p class="text-sm font-medium text-gray-900">$35</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
