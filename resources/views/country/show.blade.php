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

                    <div class="flex flex-col lg:flex-row items-center border-b-4 border-white border-double pt-4">
                        <!-- Flag -->
                        <div>
                            <img 
                                src="{{ $country->image }}" 
                                alt="{{ $country->name }} Flag"
                                class="inline w-[300px] h-[282.91px] float-left p-5 m-8 border-2 border-white rounded-2xl"
                            >
                        </div>

                        <!-- Title & Description -->
                        <div class="flex flex-1 flex-col justify-center text-white">
                            <h1 class="text-6xl font-bold text-center lg:text-justify">
                                {{ $country->name }}
                            </h1>
                            <p class="ml-8 lg:ml-0 mr-8 mb-4 lg:mb-0 text-justify text-base leading-relaxed">
                                {{ $country->description }}
                            </p>
                        </div>
                    </div>

                    <div class="bg-gray-800/50">
                        <!--================ Urban Destinations ================-->
                        @foreach($country->places as $places)
                        <div class="text-white bg-gray-700 px-5 py-2 border-b border-white">
                            <h1 class="text-2xl font-semibold">
                                Urban Destinations
                            </h1>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 m-5">
                            <!-- PLaces -->
                            <div class="relative rounded overflow-hidden shadow-lg">
                                <div 
                                    class="absolute inset-0 bg-cover bg-center filter blur z-0" 
                                    style="background-image: url('{{ $places->image }}')">
                                </div>
                                <div class="absolute inset-0 bg-gray-900/70 z-0"></div>

                                <div class="relative p-5 z-10 text-white">
                                    <img 
                                        src="{{ $places->image }}" 
                                        alt="" 
                                        class="w-full h-52 object-cover mb-4 rounded"
                                    >
                                    <div class="flex justify-between items-center mb-2">
                                        <div>
                                            <h3 class="text-lg font-semibold">
                                                {{ $places->name }}
                                            </h3>
                                            <div class="text-sm">
                                                <a target="_blank" href="https://www.google.com/maps/place/Jinghong,+Xishuangbanna+Dai+Autonomous+Prefecture,+Yunnan,+China/@22.0218016,100.3129501,9z/data=!3m1!4b1!4m6!3m5!1s0x312ab50227b0d78d:0x41bceda458368c20!8m2!3d22.0000799!4d100.77163!16zL20vMDRtbXJ4?entry=ttu" class="hover:underline">
                                                    <!--22.0075° <span>N</span>, 100.7974° <span>E</span>-->
                                                    {{ $places->corednets }}
                                                </a>
                                            </div>
                                        </div>
                                        <span class="bg-white text-gray-800 font-bold rounded-full text-sm w-9 h-9 flex items-center justify-center">
                                            {{ $places->rating }}
                                        </span>
                                    </div>

                                    <p class="text-sm mb-2">
                                        {{ $places->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
