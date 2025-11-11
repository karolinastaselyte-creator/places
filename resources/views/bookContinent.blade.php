<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            Bookmark testing
        </h2>
    </x-slot>

    <div class="py-[40px]">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-100">

                    <!-- Main Grid -->
                    <div class="flex gap-6">

                        <!-- LEFT COLUMN – CATEGORIES -->
                        <div class="w-[80%] space-y-6">
                            <!-- Asia -->
                            <div class="bg-gray-700 rounded-lg p-4 flex items-center justify-between shadow transition-transform duration-300 ease-in-out hover:scale-[1.03]">
                                <!-- Image -->
                                <div class="w-32 h-20 bg-gray-500 rounded-lg"></div>

                                <!-- Continent name (next to the box) -->
                                <a 
                                    href=""
                                    class="text-2xl font-semibold text-gray-100 ml-6">
                                    Asia
                                </a>

                                <!-- Countries count -->
                                <div class="flex flex-col items-center ml-auto leading-none">
                                    <span class="text-[40px] font-bold text-gray-100">
                                        34
                                    </span>
                                    <span class="text-[15px] text-gray-400">
                                        Places
                                    </span>
                                </div>
                            </div>

                            <!-- Africa -->
                            <div class="bg-gray-700 rounded-lg p-4 flex items-center space-x-4 shadow">
                                <div class="w-32 h-20 bg-gray-500 rounded-lg"></div>
                                <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">Africa</p>
                            </div>

                            <!-- North America -->
                            <div class="bg-gray-700 rounded-lg p-4 flex items-center space-x-4 shadow">
                                <div class="w-32 h-20 bg-gray-500 rounded-lg"></div>
                                <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">North America</p>
                            </div>

                            <!-- South America -->
                            <div class="bg-gray-700 rounded-lg p-4 flex items-center space-x-4 shadow">
                                <div class="w-32 h-20 bg-gray-500 rounded-lg"></div>
                                <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">South America</p>
                            </div>

                            <!-- Europe -->
                            <div class="bg-gray-700 rounded-lg p-4 flex items-center space-x-4 shadow">
                                <div class="w-32 h-20 bg-gray-500 rounded-lg"></div>
                                <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">Europe</p>
                            </div>

                            <!-- Oceania -->
                            <div class="bg-gray-700 rounded-lg p-4 flex items-center space-x-4 shadow">
                                <div class="w-32 h-20 bg-gray-500 rounded-lg"></div>
                                <p class="text-2xl font-semibold text-gray-900 dark:text-gray-100">Oceania</p>
                            </div>
                        </div>

                        <!-- RIGHT COLUMN – AGRA CARD -->
                        <div class="w-2/3 flex justify-end">
                            <div class="bg-gray-200 dark:bg-gray-700 rounded-lg shadow-md p-6 relative w-full max-w-md">
                                <img src="images/places/china/Zhangjiajie.jpg" alt="Agra" 
                                    class="rounded-md shadow-md mb-3 w-full h-48 md:h-64 lg:h-[280px] object-cover">

                                <div class="flex justify-between items-center">
                                    <h3 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">Agra</h3>
                                    <div class="bg-white text-gray-900 font-semibold rounded-full w-8 h-8 flex items-center justify-center shadow">
                                        10
                                    </div>
                                </div>

                                <p class="text-gray-700 dark:text-gray-300 mt-2 text-sm leading-relaxed">
                                    Planning to explore the Taj Mahal and nearby cultural sites. 
                                    Still finalizing travel partners and schedule.
                                </p>
                            </div>
                        </div>

                    </div>
                    <!-- END MAIN GRID -->

                </div>
            </div>
        </div>
    </div>
</x-app-layout>