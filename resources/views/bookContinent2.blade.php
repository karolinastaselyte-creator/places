<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            Bookmark2 testing
        </h2>
    </x-slot>

    <div class="py-[40px]">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-100">

                    <!-- Main Grid -->
                    <div class="grid text-gray-900">
                        <!-- Continent Name -->
                        <div class="text-center">
                            <h1 class="text-6xl text-white mb-6">Asia</h1>
                            <hr class="border-gray-400 mb-4">
                        </div>

                        <!-- Country Names -->
                        <div class="text-center text-white space-y-4">
                            <div class="flex flex-wrap justify-center gap-8 text-lg">
                                <span>China </span><span>India </span><span>Japan </span>
                                <span>South Korea </span><span>Indonesia </span><span>Vietnam </span>
                                <span>Thailand </span><span>Malaysia</span>
                            </div>
                            <div class="flex flex-wrap justify-center gap-8 text-lg">
                                <span>Philippines</span><span>Singapore</span><span>Myanmar</span>
                                <span>Bangladesh</span><span>Pakistan</span><span>Nepal</span>
                                <span>Sri Lanka</span><span>Bhutan</span>
                            </div>
                            <div class="flex flex-wrap justify-center gap-8 text-lg">
                                <span>Cambodia</span><span>Laos</span><span>Mongolia</span>
                                <span>North Korea</span><span>Afghanistan</span><span>Uzbekistan</span>
                                <span>Kazakhstan</span><span>Turkmenistan</span>
                            </div>
                            <hr class="border-b border-white border-double ">
                        </div>

                        <div class="bg-gray-800/50">
                            <!--================ Urban Destinations ================-->
                            <div class="text-white bg-gray-700 px-5 py-2 border-b border-white">
                                <h1 class="text-2xl font-semibold">
                                    Urban
                                </h1>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 m-5">
                                <!-- PLaces -->
                                <div class="relative rounded overflow-hidden shadow-lg transition-transform duration-300 ease-in-out hover:scale-[1.03]">
                                    <a href="">
                                        <div class="relative p-5 z-10 text-white">
                                            <img 
                                                src="" 
                                                alt="" 
                                                class="w-full h-52 object-cover mb-4 rounded"
                                            >
                                            <div class="flex justify-between items-center mb-2">
                                                <div>
                                                    <h3 class="text-lg font-semibold">
                                                        idk
                                                    </h3>
                                                    <div class="text-sm">
                                                        <h1>
                                                            <!--22.0075° <span>N</span>, 100.7974° <span>E</span>-->
                                                            34435453.43334
                                                        </h1>
                                                    </div>
                                                </div>
                                                <span class="bg-white text-gray-800 font-bold rounded-full text-sm w-9 h-9 flex items-center justify-center">
                                                    6.6
                                                </span>
                                            </div>

                                            <p class="text-sm mb-2">
                                                bdbdfbd s sg sfsggg 
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    <!-- END MAIN GRID -->

                </div>
            </div>
        </div>
    </div>
</x-app-layout>