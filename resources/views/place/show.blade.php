<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            Places testing
        </h2>
    </x-slot>

    <div class="py-[40px]">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-100">

                    <!-- Image Slider -->
                    <div class="relative mb-8">
                        <div class="swiper mySwiper rounded-xl overflow-hidden">
                            <div class="swiper-wrapper">
                                @foreach($place->images as $image)
                                    <div class="swiper-slide bg-gray-700">
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
                        <div class="flex flex-col sm:flex-row justify-center items-center gap-3">
                            <h1 class="text-4xl font-extrabold text-gray-100">
                                {{ $place->name ?? 'Great Wall of China' }}
                            </h1>
                            <div class="flex items-center text-yellow-400 font-semibold text-lg">
                                ⭐ {{ $place->rating ?? '3.3' }}
                            </div>
                        </div>

                        <div class="pt-6 border-t border-gray-700">
                            <p class="text-gray-400 mx-auto">
                                <!--{{ $place->big_description ?? ''}}-->
                                The Great Wall of China is one of the most extraordinary feats of human engineering and endurance, stretching across the rugged landscapes of northern China for more than 21,000 kilometers. Originally built over several dynasties to protect ancient Chinese states from invasions, the wall weaves through deserts, mountains, and grasslands, showcasing centuries of craftsmanship, determination, and cultural pride. Its countless watchtowers, fortresses, and winding stone paths stand as silent witnesses to the nation’s long and complex history. Beyond its military purpose, the Great Wall has come to symbolize the strength, unity, and perseverance of the Chinese people. Today, it is a UNESCO World Heritage Site and one of the most visited landmarks in the world, attracting millions of travelers who come to walk its ancient steps, admire its breathtaking views, and experience a timeless connection to one of civilization’s greatest achievements.
                            </p>
                        </div>

                        <div class="pt-6 border-t border-gray-700 grid grid-cols-1 sm:grid-cols-3 gap-4 text-lg text-gray-300">
                            <p><span class="font-semibold text-gray-200">Coordinates:</span> 
                                    <a 
                                        href="" 
                                        target="_blank" 
                                        class="text-[#6D8172] hover:underline">
                                        {{ $place->corednets ?? '234332.243242' }}
                                    </a>
                            </p>
                            <p><span class="font-semibold text-gray-200">Country:</span> {{ $place->country ?? 'China' }}</p>
                            <p><span class="font-semibold text-gray-200">Category:</span> {{ $place->category ?? 'Landmark' }}</p>
                        </div>

                        <!-- Sticky Button -->
                        <div class="sticky bottom-4 border-t-4 border-gray-700 border-double">
                            <button 
                                type="button"
                                class="flex items-center justify-center gap-2 bg-[#6D8172] hover:bg-[#2D5246] text-white font-semibold py-3 px-6 rounded-b-lg shadow-lg w-full transition-colors h-[55px]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5v16l7-5 7 5V5a2 2 0 00-2-2H7a2 2 0 00-2 2z" />
                                </svg>
                                <span>Bookmark</span>
                            </button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Fixed Bottom Button -->
    <!--<div class="fixed bottom-1 left-1/2 transform -translate-x-1/2 z-50">
        <button 
            type="button"
            class="flex items-center gap-2 bg-[#6D8172] hover:bg-blue-700 text-white font-semibold py-3 px-20 sm:rounded-lg shadow-lg transition-colors h-[35px]">

            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5v16l7-5 7 5V5a2 2 0 00-2-2H7a2 2 0 00-2 2z" />
            </svg>

            <span>Bookmark</span>
        </button>
    </div>-->
    
</x-app-layout>
