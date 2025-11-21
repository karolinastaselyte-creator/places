<x-app-layout>
    <x-slot name="header">
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
                                {{ $place->name }}
                            </h1>
                            <div class="flex items-center text-yellow-400 font-semibold text-lg">
                                ⭐ {{ $place->rating }}
                            </div>
                        </div>

                        <div class="pt-6 border-t border-gray-700">
                            <p class="text-gray-400 mx-auto">
                                {{ $place->big_description }}
                            </p>
                        </div>

                        <div class="pt-6 border-t border-gray-700 grid grid-cols-1 sm:grid-cols-3 gap-4 text-lg text-gray-300">
                            <p><span class="font-semibold text-gray-200">Coordinates:</span> 
                                <a 
                                    href="https://www.google.com/maps?q={{ urlencode($place->corednets) }}" 
                                    target="_blank" 
                                    class="text-[#6D8172] hover:underline">
                                    {{ $place->corednets}}
                                </a>
                            </p>
                            <p><span class="font-semibold text-gray-200">Country:</span> {{ $place->country->name}}</p>
                            <p><span class="font-semibold text-gray-200">Category:</span> {{ $place->categories->name }}</p>
                        </div>

                        <form method="POST" action="/bookmark/{{ $place->id }}" class="sticky bottom-4 border-t-4 border-gray-700 border-double">
                            @csrf
                            @php
                                $isBookmarked = auth()->user()->place()->whereKey($place->id)->exists();
                            @endphp

                            <button 
                                type="submit"
                                class="flex items-center justify-center gap-2 
                                    {{ $isBookmarked 
                                            ? 'bg-[#2D5246] hover:bg-[#25453A] text-white' 
                                            : 'bg-[#6D8172] hover:bg-[#5B7264] text-white' }} 
                                    font-semibold py-3 px-6 rounded-b-lg shadow-lg w-full transition-colors h-[55px]">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" 
                                    class="h-6 w-6" 
                                    fill="{{ $isBookmarked ? 'currentColor' : 'none' }}" 
                                    viewBox="0 0 24 24" 
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                        d="M5 5v16l7-5 7 5V5a2 2 0 00-2-2H7a2 2 0 00-2 2z" />
                                </svg>

                                @if($isBookmarked)
                                    <span>Remove Bookmark</span>
                                @else
                                    <span>Bookmark</span>
                                @endif
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
