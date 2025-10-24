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
                            <img src="images/China Flag.png" alt="Flag/Map of China"
                                class="inline w-[300px] h-[282.91px] float-left p-5 m-8 border-2 border-white rounded-2xl">
                        </div>

                        <!-- Title & Description -->
                        <div class="flex flex-1 flex-col justify-center text-white">
                            <h1 class="text-6xl font-bold text-center lg:text-justify">China</h1>
                            <p class="ml-8 lg:ml-0 mr-8 mb-4 lg:mb-0 text-justify text-base leading-relaxed">
                                People's Republic of China or commonly known as just China is a country in East Asia. 
                                China has a land aria of 9.597 million km², which makes it the third-largest country by land aria, 
                                fitting for its other title of being the second-most populous country in the world, with a population exceeding 1.4 billion. 
                                China contains a diverse amount of habitats, raging from numerous types of forests tundra, rainforest, 
                                and tropical forests to grasslands, deserts, polar desert, mountains, wetlands and so much more. 
                                Although most of Chanas land aria is grasslands making up of 40% of its total land aria. 
                                China has a long history, with more than four thousand years of recorded history, making China the world's oldest continuous civilization. 
                                Because of Chinas long history it has many preserved and still standing ancient buildings, 
                                and with the wide range of biomes, ecosystems and habitats, it makes for an awesome please to visit and explore.
                            </p>
                        </div>
                    </div>

                    <div class="bg-gray-800/50">
                        <!--================ Urban Destinations ================-->
                        <div class="text-white bg-gray-700 px-5 py-2 border-b border-white">
                            <h1 class="text-2xl font-semibold">Urban Destinations</h1>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 m-5">
                            <!-- Jinghong -->
                            <div class="relative rounded overflow-hidden shadow-lg">
                                <div class="absolute inset-0 bg-cover bg-center filter blur z-0" 
                                    style="background-image: url('images/places/china/Xishuangbanna.jpg')"></div>
                                <div class="absolute inset-0 bg-gray-900/70 z-0"></div>

                                <div class="relative p-5 z-10 text-white">
                                    <img src="images/places/china/Xishuangbanna.jpg" alt="" class="w-full h-52 object-cover mb-4 rounded">
                                    <div class="flex justify-between items-center mb-2">
                                        <div>
                                            <h3 class="text-lg font-semibold">Jinghong</h3>
                                            <div class="text-sm">
                                                <a target="_blank" href="https://www.google.com/maps/place/Jinghong,+Xishuangbanna+Dai+Autonomous+Prefecture,+Yunnan,+China/@22.0218016,100.3129501,9z/data=!3m1!4b1!4m6!3m5!1s0x312ab50227b0d78d:0x41bceda458368c20!8m2!3d22.0000799!4d100.77163!16zL20vMDRtbXJ4?entry=ttu" class="hover:underline">
                                                    22.0075° <span>N</span>, 100.7974° <span>E</span>
                                                </a>
                                            </div>
                                        </div>
                                        <span class="bg-white text-gray-800 font-bold rounded-full text-sm w-9 h-9 flex items-center justify-center">4.0</span>
                                    </div>

                                    <p class="text-sm mb-2">
                                        Jinghong, located in Xishuangbanna Dai Autonomous Prefecture in Yunnan Province, China, is a vibrant city known for its lush tropical scenery, ethnic diversity, and rich cultural heritage.
                                    </p>
                                </div>
                            </div>

                            <!-- Shang Xia Jiu Bu Xing Jie -->
                            <div class="relative rounded overflow-hidden shadow-lg">
                                <div class="absolute inset-0 bg-cover bg-center filter blur z-0" style="background-image: url('images/places/china/Shangxiajiu Pedestrian Street.webp')"></div>
                                <div class="absolute inset-0 bg-gray-900/70 z-0"></div>

                                <div class="relative p-5 z-10 text-white">
                                    <img src="images/places/china/Shangxiajiu Pedestrian Street.webp" alt="" class="w-full h-52 object-cover mb-4 rounded">
                                    <div class="flex justify-between items-center mb-2">
                                        <div>
                                            <h3 class="text-lg font-semibold">Shang Xia Jiu Bu Xing Jie</h3>
                                            <div class="text-sm">
                                                <a target="_blank" href="https://www.google.com/maps/place/Shang+Xia+Jiu+Bu+Xing+Jie,+Li+Wan+Qu,+Guangzhou,+China/@23.11395,113.24668,17z" class="hover:underline">
                                                    23.1140° <span>N</span>, 113.2467° <span>E</span>
                                                </a>
                                            </div>
                                        </div>
                                        <span class="bg-white text-gray-800 font-bold rounded-full text-sm w-9 h-9 flex items-center justify-center">4.3</span>
                                    </div>

                                    <p class="text-sm mb-2">
                                        Shangxiajiu Pedestrian Street is a bustling commercial thoroughfare in Guangzhou, China.
                                    </p>
                                </div>
                            </div>

                            <!-- Nan Jing Lu Bu Xing Jie -->
                            <div class="relative rounded overflow-hidden shadow-lg">
                                <div class="absolute inset-0 bg-cover bg-center filter blur z-0" style="background-image: url('images/places/china/Nanjing Road.jpg')"></div>
                                <div class="absolute inset-0 bg-gray-900/70 z-0"></div>

                                <div class="relative p-5 z-10 text-white">
                                    <img src="images/places/china/Nanjing Road.jpg" alt="" class="w-full h-52 object-cover mb-4 rounded">
                                    <div class="flex justify-between items-center mb-2">
                                        <div>
                                            <h3 class="text-lg font-semibold">Nan Jing Lu Bu Xing Jie</h3>
                                            <div class="text-sm">
                                                <a target="_blank" href="https://www.google.com/maps/place/People's+Square,+Nanjing+East+Road+Residential+District,+Shanghai,+China" class="hover:underline">
                                                    31.1417° <span>N</span>, 121.2905° <span>E</span>
                                                </a>
                                            </div>
                                        </div>
                                        <span class="bg-white text-gray-800 font-bold rounded-full text-sm w-9 h-9 flex items-center justify-center">4.0</span>
                                    </div>

                                    <p class="text-sm mb-2">
                                        Nanjing Road Pedestrian Street is one of the busiest shopping streets in Shanghai, China.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!--================ Historical Sites ================-->
                        <div class="text-white bg-gray-700 px-5 py-2 border-t border-white mt-6">
                            <h1 class="text-2xl font-semibold">Historical Sites</h1>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 m-5">
                            <!-- Lijiang -->
                            <div class="relative rounded overflow-hidden shadow-lg">
                                <div class="absolute inset-0 bg-cover bg-center filter blur z-0" style="background-image: url('images/places/china/Lijiang.jpg')"></div>
                                <div class="absolute inset-0 bg-gray-900/70 z-0"></div>

                                <div class="relative p-5 z-10 text-white">
                                    <img src="images/places/china/Lijiang.jpg" alt="Lijiang Old Town" class="w-full h-52 object-cover mb-4 rounded">
                                    <div class="flex justify-between items-center mb-2">
                                        <div>
                                            <h3 class="text-lg font-semibold">Lijiang Old Town</h3>
                                            <div class="text-sm">
                                                <a target="_blank" href="https://www.google.com/maps/place/Lijiang,+Yunnan,+China" class="hover:underline">
                                                    26.8719° <span>N</span>, 100.2315° <span>E</span>
                                                </a>
                                            </div>
                                        </div>
                                        <span class="bg-white text-gray-800 font-bold rounded-full text-sm w-9 h-9 flex items-center justify-center">4.6</span>
                                    </div>

                                    <p class="text-sm mb-2">
                                        Lijiang Old Town is a UNESCO World Heritage Site known for its ancient architecture and canals.
                                    </p>
                                </div>
                            </div>

                            <!-- Leshan Giant Buddha -->
                            <div class="relative rounded overflow-hidden shadow-lg">
                                <div class="absolute inset-0 bg-cover bg-center filter blur z-0" style="background-image: url('images/places/china/leshan giant buddha.jpg')"></div>
                                <div class="absolute inset-0 bg-gray-900/70 z-0"></div>

                                <div class="relative p-5 z-10 text-white">
                                    <img src="images/places/china/leshan giant buddha.jpg" alt="Leshan Giant Buddha" class="w-full h-52 object-cover mb-4 rounded">
                                    <div class="flex justify-between items-center mb-2">
                                        <div>
                                            <h3 class="text-lg font-semibold">Leshan Giant Buddha</h3>
                                            <div class="text-sm">
                                                <a target="_blank" href="https://www.google.com/maps/place/Leshan,+Sichuan,+China" class="hover:underline">
                                                    29.5522° <span>N</span>, 103.7694° <span>E</span>
                                                </a>
                                            </div>
                                        </div>
                                        <span class="bg-white text-gray-800 font-bold rounded-full text-sm w-9 h-9 flex items-center justify-center">4.7</span>
                                    </div>

                                    <p class="text-sm mb-2">
                                        The Leshan Giant Buddha is the largest stone Buddha statue in the world, carved into a cliff face.
                                    </p>
                                </div>
                            </div>

                            <!-- Great Wall -->
                            <div class="relative rounded overflow-hidden shadow-lg">
                                <div class="absolute inset-0 bg-cover bg-center filter blur z-0" style="background-image: url('images/places/china/The Great Wall Of China.jpg')"></div>
                                <div class="absolute inset-0 bg-gray-900/70 z-0"></div>

                                <div class="relative p-5 z-10 text-white">
                                    <img src="images/places/china/The Great Wall Of China.jpg" alt="Great Wall of China" class="w-full h-52 object-cover mb-4 rounded">
                                    <div class="flex justify-between items-center mb-2">
                                        <div>
                                            <h3 class="text-lg font-semibold">Great Wall of China</h3>
                                            <div class="text-sm">
                                                <a target="_blank" href="https://www.google.com/maps/place/Great+Wall+of+China" class="hover:underline">
                                                    40.4319° <span>N</span>, 116.5704° <span>E</span>
                                                </a>
                                            </div>
                                        </div>
                                        <span class="bg-white text-gray-800 font-bold rounded-full text-sm w-9 h-9 flex items-center justify-center">4.8</span>
                                    </div>

                                    <p class="text-sm mb-2">
                                        The Great Wall of China is a series of fortifications built across centuries to protect Chinese states.
                                    </p>
                                </div>
                            </div>
                            <!-- Yu Garden -->
                            <div class="relative rounded overflow-hidden shadow-lg">
                                <div class="absolute inset-0 bg-cover bg-center filter blur z-0" style="background-image: url('images/places/china/Yu Garden.jpg')"></div>
                                <div class="absolute inset-0 bg-gray-900/70 z-0"></div>

                                <div class="relative p-5 z-10 text-white">
                                    <img src="images/places/china/Yu Garden.jpg" alt="Yu Garden" class="w-full h-52 object-cover mb-4 rounded">
                                    <div class="flex justify-between items-center mb-2">
                                        <div>
                                            <h3 class="text-lg font-semibold">Yu Garden</h3>
                                            <div class="text-sm">
                                                <a target="_blank" href="https://www.google.com/maps/place/Yu+Garden" class="hover:underline">
                                                    31.2274° <span>N</span>, 121.4929° <span>E</span>
                                                </a>
                                            </div>
                                        </div>
                                        <span class="bg-white text-gray-800 font-bold rounded-full text-sm w-9 h-9 flex items-center justify-center">4.5</span>
                                    </div>

                                    <p class="text-sm mb-2">
                                        Yu Garden in Shanghai is a classical Chinese garden from the Ming dynasty.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!--================ Natural Landmarks ================-->
                        <div class="text-white bg-gray-700 px-5 py-2 border-t border-white mt-6">
                            <h1 class="text-2xl font-semibold">Natural Landmarks</h1>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 m-5">
                            <!-- Yangtze River -->
                            <div class="relative rounded overflow-hidden shadow-lg">
                                <div class="absolute inset-0 bg-cover bg-center filter blur z-0" style="background-image: url('images/places/china/yangtze river and the three gorges.jpg')"></div>
                                <div class="absolute inset-0 bg-gray-900/70 z-0"></div>

                                <div class="relative p-5 z-10 text-white">
                                    <img src="images/places/china/yangtze river and the three gorges.jpg" alt="Yangtze River" class="w-full h-52 object-cover mb-4 rounded">
                                    <div class="flex justify-between items-center mb-2">
                                        <div>
                                            <h3 class="text-lg font-semibold">Yangtze River</h3>
                                            <div class="text-sm">
                                                <a target="_blank" href="https://www.google.com/maps/place/Yangtze+River" class="hover:underline">
                                                    29.5630° <span>N</span>, 106.5516° <span>E</span>
                                                </a>
                                            </div>
                                        </div>
                                        <span class="bg-white text-gray-800 font-bold rounded-full text-sm w-9 h-9 flex items-center justify-center">4.4</span>
                                    </div>

                                    <p class="text-sm mb-2">
                                        The Yangtze is Asia’s longest river, flowing through diverse landscapes and historic cities.
                                    </p>
                                </div>
                            </div>

                            <!-- Zhangjiajie -->
                            <div class="relative rounded overflow-hidden shadow-lg">
                                <div class="absolute inset-0 bg-cover bg-center filter blur z-0" style="background-image: url('images/places/china/Zhangjiajie.jpg')"></div>
                                <div class="absolute inset-0 bg-gray-900/70 z-0"></div>

                                <div class="relative p-5 z-10 text-white">
                                    <img src="images/places/china/Zhangjiajie.jpg" alt="Zhangjiajie National Forest Park" class="w-full h-52 object-cover mb-4 rounded">
                                    <div class="flex justify-between items-center mb-2">
                                        <div>
                                            <h3 class="text-lg font-semibold">Zhangjiajie National Forest Park</h3>
                                            <div class="text-sm">
                                                <a target="_blank" href="https://www.google.com/maps/place/Zhangjiajie" class="hover:underline">
                                                    29.3340° <span>N</span>, 110.4792° <span>E</span>
                                                </a>
                                            </div>
                                        </div>
                                        <span class="bg-white text-gray-800 font-bold rounded-full text-sm w-9 h-9 flex items-center justify-center">4.9</span>
                                    </div>

                                    <p class="text-sm mb-2">
                                        Zhangjiajie’s quartz-sandstone pillars inspired the floating mountains in the movie Avatar.
                                    </p>
                                </div>
                            </div>

                            <!-- Yuanyang -->
                            <div class="relative rounded overflow-hidden shadow-lg">
                                <div class="absolute inset-0 bg-cover bg-center filter blur z-0" style="background-image: url('images/places/china/Yuanyang Rice Terraced.jpg')"></div>
                                <div class="absolute inset-0 bg-gray-900/70 z-0"></div>

                                <div class="relative p-5 z-10 text-white">
                                    <img src="images/places/china/Yuanyang Rice Terraced.jpg" alt="Yuanyang Rice Terraces" class="w-full h-52 object-cover mb-4 rounded">
                                    <div class="flex justify-between items-center mb-2">
                                        <div>
                                            <h3 class="text-lg font-semibold">Yuanyang Rice Terraces</h3>
                                            <div class="text-sm">
                                                <a target="_blank" href="https://www.google.com/maps/place/Yuanyang,+Yunnan,+China" class="hover:underline">
                                                    23.1040° <span>N</span>, 102.7512° <span>E</span>
                                                </a>
                                            </div>
                                        </div>
                                        <span class="bg-white text-gray-800 font-bold rounded-full text-sm w-9 h-9 flex items-center justify-center">4.7</span>
                                    </div>

                                    <p class="text-sm mb-2">
                                        The Yuanyang Rice Terraces in Yunnan are a masterpiece of agricultural engineering.
                                    </p>
                                </div>
                            </div>

                            <!-- Yangshuo -->
                            <div class="relative rounded overflow-hidden shadow-lg">
                                <div class="absolute inset-0 bg-cover bg-center filter blur z-0" style="background-image: url('images/places/china/Yangshuo.jpg')"></div>
                                <div class="absolute inset-0 bg-gray-900/70 z-0"></div>

                                <div class="relative p-5 z-10 text-white">
                                    <img src="images/places/china/Yangshuo.jpg" alt="Yangshuo" class="w-full h-52 object-cover mb-4 rounded">
                                    <div class="flex justify-between items-center mb-2">
                                        <div>
                                            <h3 class="text-lg font-semibold">Yangshuo</h3>
                                            <div class="text-sm">
                                                <a target="_blank" href="https://www.google.com/maps/place/Yangshuo,+China" class="hover:underline">
                                                    24.7800° <span>N</span>, 110.4970° <span>E</span>
                                                </a>
                                            </div>
                                        </div>
                                        <span class="bg-white text-gray-800 font-bold rounded-full text-sm w-9 h-9 flex items-center justify-center">4.6</span>
                                    </div>

                                    <p class="text-sm mb-2">
                                        Yangshuo is famed for its karst mountain landscapes and river scenery.
                                    </p>
                                </div>
                            </div>

                            <!-- Huangguoshu Waterfall -->
                            <div class="relative rounded overflow-hidden shadow-lg">
                                <div class="absolute inset-0 bg-cover bg-center filter blur z-0" style="background-image: url('images/places/china/Huangguoshu Waterfall.jpg')"></div>
                                <div class="absolute inset-0 bg-gray-900/70 z-0"></div>

                                <div class="relative p-5 z-10 text-white">
                                    <img src="images/places/china/Huangguoshu Waterfall.jpg" alt="Huangguoshu Waterfall" class="w-full h-52 object-cover mb-4 rounded">
                                    <div class="flex justify-between items-center mb-2">
                                        <div>
                                            <h3 class="text-lg font-semibold">Huangguoshu Waterfall</h3>
                                            <div class="text-sm">
                                                <a target="_blank" href="https://www.google.com/maps/place/Huangguoshu+Waterfall" class="hover:underline">
                                                    25.9894° <span>N</span>, 105.6555° <span>E</span>
                                                </a>
                                            </div>
                                        </div>
                                        <span class="bg-white text-gray-800 font-bold rounded-full text-sm w-9 h-9 flex items-center justify-center">4.6</span>
                                    </div>

                                    <p class="text-sm mb-2">
                                        Huangguoshu is the largest waterfall in China, located in Guizhou Province.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
