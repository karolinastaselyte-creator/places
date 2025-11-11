<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            Continent testing
        </h2>
    </x-slot>

    <div class="py-[40px]">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-12 text-gray-100">
                    <!-- Main Grid -->
                    <div class="flex gap-6 justify-center">
                        <!-- COLUMN -->
                        <div class="w-[85%] space-y-6">

                            @foreach($continents as $continent)
                            <div class="bg-gray-700 rounded-lg p-4 flex items-center justify-between shadow relative transition-transform duration-300 ease-in-out hover:scale-[1.03]">
                                <!-- Image -->
                                <img 
                                    src="{{ $continent->image }}" 
                                    alt="{{ $continent->name }}" 
                                    class="w-32 h-32 object-cover rounded-lg"
                                >

                                <!-- Continent name overlay -->
                                <a 
                                    href="/continent/{{ $continent->id }}"
                                    class="absolute inset-0 flex items-center justify-center text-2xl font-semibold text-gray-100">
                                    {{ $continent->name }}
                                </a>

                                <!-- Countries count -->
                                <div class="flex flex-col items-center ml-auto leading-none">
                                    <span class="text-[60px] font-bold text-gray-100">
                                        {{ $continent->countries()->count() }}
                                    </span>
                                    <span class="text-[20px] text-gray-400">
                                        Countries
                                    </span>
                                </div>
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