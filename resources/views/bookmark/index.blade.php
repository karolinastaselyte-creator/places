<x-app-layout>
    <x-slot name="header">
        <style>
            html {
                scroll-behavior: smooth;
            }
            
        </style>
    </x-slot>

    <div class="py-[40px]">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-100">

                <!-- Main Grid -->
                    <div class="grid text-gray-900">
                        <!-- Continent Name -->
                        <div class="text-center">
                            <h1 class="text-6xl text-white mb-6">
                                User Bookmarks
                            </h1>
                            <hr class="border-gray-400 mb-4">
                        </div>

                        <!-- Country Names -->
                        <div class="flex flex-wrap justify-center text-base text-white w-full">
                            @foreach($places_byContinent->sortKeys() as $continent => $countries)
                                {{-- Continent name --}}
                                @php
                                    // Map continents to colors
                                    $continentColors = [
                                        'Asia' => 'text-[#B3B5A2]',
                                        'Africa' => 'text-[#A5AB98]',
                                        'North America' => 'text-[#97A08E]',
                                        'South America' => 'text-[#899585]',
                                        'Europe' => 'text-[#7B8B7B]',
                                        'Oceania' => 'text-[#6D8172]',
                                    ];

                                    // Sort the country names alphabetically for this continent
                                    $countries = collect($countries)->sort()->values();
                                @endphp
                                <div class="w-full text-center">
                                    <h2 class="text-xl font-semibold uppercase tracking-wide {{ $continentColors[$continent] ?? 'text-white' }}">
                                        {{ $continent }}
                                    </h2>
                                </div>

                                {{-- Countries container --}}
                                <div class="relative flex flex-wrap justify-center {{ $loop->last ? 'pb-0 mb-0' : 'pb-1 mb-2' }}"> 
                                    @foreach ($countries as $country)
                                        <div class="px-3 mb-2"> <!-- Horizontal & vertical spacing -->
                                            <a href="#country-{{ Str::slug($country) }}" class="hover:text-[#6D8172] transition-colors">
                                                {{ $country }}
                                            </a>
                                        </div>
                                    @endforeach

                                    {{-- Border slightly longer than countries, skip on last continent --}}
                                    @unless($loop->last)
                                        <div class="absolute bottom-0 left-1/2 border-b border-gray-700"
                                            style="width: calc(95% + 60px); transform: translateX(-50%);">
                                        </div>
                                    @endunless
                                </div>
                            @endforeach
                        </div>


                        <div class="bg-gray-800/50">
                            <!--================ Organizer ================-->
                            @forelse($places_byCountry->sortKeys() as $country => $place)
                            <hr class="border-b border-white border-double mt-4">
                            <div id="country-{{ Str::slug($country) }}" class="text-white bg-gray-700 px-5 py-2 border-b border-white">
                                <h1 class="text-2xl font-semibold">
                                    {{ $country }}
                                </h1>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 m-5">
                                <!-- PLaces -->
                                @foreach($place->sortByDesc('rating') as $place)
                                <div class="relative rounded overflow-hidden shadow-lg transition-transform duration-300 ease-in-out hover:scale-[1.03]">
                                    <div 
                                        class="absolute inset-0 bg-cover bg-center filter blur z-0" 
                                        style="background-image: url('{{ $place->firstImages() }}')">
                                    </div>
                                    <div class="absolute inset-0 bg-gray-900/70 z-0"></div>

                                    <a href="/place/{{ $place->id }}">
                                        <div class="relative p-5 z-10 text-white">
                                            <img 
                                                src="{{ $place->firstImages() }}" 
                                                alt="" 
                                                class="w-full h-52 object-cover mb-4 rounded"
                                            >
                                            <div class="flex justify-between items-center mb-2">
                                                <div>
                                                    <h3 class="text-lg font-semibold">
                                                        {{ $place->name }}
                                                    </h3>
                                                    <div class="text-sm">
                                                        <h1>
                                                            {{ $place->corednets }}
                                                        </h1>
                                                    </div>
                                                </div>
                                                <span class="bg-white text-gray-800 font-bold rounded-full text-sm w-9 h-9 flex items-center justify-center">
                                                    {{ $place->rating }}
                                                </span>
                                            </div>

                                            <p class="text-sm mb-2 text-justify">
                                                {{ $place->description }}
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            @empty
                                <p class="text-white text-center text-[20px]">No places bookmarked yet</p>
                            @endforelse
                        </div>
                    <!-- END MAIN GRID -->

                </div>
            </div>
        </div>
    </div>
</x-app-layout>