<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Places testing
        </h2>
    </x-slot>

    <div class="py-[40px]">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">




                    <!-- Image Slider -->
                    <div class="relative mb-8">
                        <div class="swiper mySwiper rounded-xl overflow-hidden">
                            <div class="swiper-wrapper">
                                @foreach($place->images as $image)
                                    <div class="swiper-slide">
                                        <img src="{{ $image->link }}">
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <!-- Place Info -->
                    <div class="text-center space-y-6">
                        <div>
                            <h1 class="text-4xl font-extrabold mb-2">{{ $place->name ?? 'Great Wall of China' }}</h1>
                            <p class="text-yellow-400 font-semibold text-lg">⭐ {{ $place->rating ?? '3.3' }}</p>
                        </div>

                        <div class="pt-6 border-t border-gray-300 dark:border-gray-700">
                            <h3 class="text-2xl font-semibold mb-3">Details</h3>
                            <p class="text-gray-400 max-w-2xl mx-auto">
                                {{ $place->details ?? 'An ancient wonder of architectural endurance, traversing landscapes and history alike.' }}
                            </p>
                        </div>

                        <div class="pt-6 border-t border-gray-300 dark:border-gray-700 grid grid-cols-1 sm:grid-cols-3 gap-4 text-sm text-gray-300">
                            <p><span class="font-semibold text-gray-200">Coordinates:</span> {{ $place->coordinates ?? '234332.243242' }}</p>
                            <p><span class="font-semibold text-gray-200">Country:</span> {{ $place->country ?? 'China' }}</p>
                            <p><span class="font-semibold text-gray-200">Category:</span> {{ $place->category ?? 'Landmark' }}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
