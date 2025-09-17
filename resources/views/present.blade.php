<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Present testing
        </h2>
    </x-slot>

    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                Welcome to Present

                <div class="flex gap-14 justify-center items-center">
                    <!-- Card 1 -->
                    <div class="relative w-40 h-40 md:w-80 md:h-60 xl:w-[60rem] xl:h-[40rem] rounded-lg shadow-lg overflow-hidden transform transition-transform hover:scale-105">
                        <img src="{{ asset('images/places/china/Yangshuo.jpg') }}" alt="Yangshuo"
                            class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                            <span class="text-white font-semibold text-lg">Yangshuo</span>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="relative w-40 h-40 md:w-80 md:h-60 xl:w-[60rem] xl:h-[40rem] rounded-lg shadow-lg overflow-hidden transform transition-transform hover:scale-105">
                        <img src="{{ asset('images/places/china/another.jpg') }}" alt="Another place"
                            class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                            <span class="text-white font-semibold text-lg">Place 2</span>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="relative w-40 h-40 md:w-80 md:h-60 xl:w-[60rem] xl:h-[40rem] rounded-lg shadow-lg overflow-hidden transform transition-transform hover:scale-105">
                        <img src="{{ asset('images/places/china/third.jpg') }}" alt="Third place"
                            class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                            <span class="text-white font-semibold text-lg">Place 3</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
