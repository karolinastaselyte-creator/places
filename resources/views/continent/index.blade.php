<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Continent testing
        </h2>
    </x-slot>

    <div class="py-[40px]">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-12 text-gray-900 dark:text-gray-100">
                    <!-- Main Grid -->
                    <div class="flex gap-6 justify-center">
                        <!-- COLUMN -->
                        <div class="w-[85%] space-y-6">

                            @foreach($continents as $continent)
                            <div class="bg-gray-300 dark:bg-gray-700 rounded-lg p-4 flex items-center shadow relative">
                                <img 
                                    src="{{ $continent->image }}" 
                                    alt="{{ $continent->name }}" 
                                    class="w-32 h-32 object-cover rounded-lg"
                                >
                                <a 
                                    href=""
                                    class="absolute inset-0 flex items-center justify-center text-2xl font-semibold text-gray-900 dark:text-gray-100">
                                    {{ $continent->name }}
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