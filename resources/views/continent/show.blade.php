<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            Continent testing
        </h2>
    </x-slot>

    <div class="py-[40px]">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-100">

                    <div class="flex flex-col lg:flex-row items-center border-b-4 border-white border-double pt-4">
                        <!-- Flag -->
                        <div>
                            <img 
                                src="{{ $continent->image }}" 
                                alt="{{ $continent->name }}"
                                class="inline w-[300px] h-[282.91px] float-left p-5 m-8 border-2 border-white rounded-2xl"
                            >
                        </div>

                        <!-- Title & Description -->
                        <div class="flex flex-1 flex-col justify-center text-white">
                            <h1 class="text-6xl font-bold text-center lg:text-justify">
                                {{ $continent->name }}
                            </h1>
                            <p class="ml-8 lg:ml-0 mr-8 mb-4 lg:mb-0 text-justify text-base leading-relaxed">
                                {{ $continent->description }}
                            </p>
                        </div>
                    </div>

                    
                    <div class="bg-gray-800/50">
                        <!--================ The Start of Coutrys ================-->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 m-5">
                            <!-- Country -->
                            @foreach($continent->countries->sortBy('name') as $country)
                            <div class="relative rounded overflow-hidden shadow-lg transition-transform duration-300 ease-in-out hover:scale-[1.03]">
                                <div class="absolute inset-0 bg-gray-900/70 z-0"></div>

                                <a href="/country/{{ $country->id }}">
                                    <div class="relative p-5 z-10 text-white">
                                        <img 
                                            src="{{ $country->image }}"
                                            alt="{{ $country->name }}" 
                                            class="w-full h-52 object-contain p-4 rounded"
                                        >
                                        <div class="flex justify-between items-center mb-2">
                                            <div>
                                                <h3 class="text-lg font-semibold">
                                                    {{ $country->name }}
                                                </h3>
                                            </div>
                                            <span class="bg-white text-gray-800 font-bold rounded-full text-sm w-9 h-9 flex items-center justify-center">
                                                {{$country->places()->count()}}
                                            </span>
                                        </div>

                                        <p class="text-sm mb-2">
                                            {{ $country->description }}
                                        </p>
                                    </div>
                                </a>

                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- END MAIN GRID -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>