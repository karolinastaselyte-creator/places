<x-app-layout>
    <div class=" text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <div class="relative m-[100px]">
            <div class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[100] flex flex-col items-center">
                <!-- Text box -->
                <div class="p-8 bg-black/50 border border-white rounded text-white text-center">
                    <div class="wel">
                        <h3>Welcome to the Official Wonders of the World website</h3>
                        <p>Our mission is to interduce upcoming travelers to new and amazing places from all around the world.</p>
                    </div>
                </div>

                <!-- Buttons (outside the square) -->
                <div class="mt-4 w-[650px] h-[40px] flex gap-4">
                    <a href="{{ route('register') }}" class="flex-1 px-6 py-2 bg-[#6D8172] hover:bg-[#525F55] text-white rounded-lg shadow-md text-center transition">
                        Sign Up
                    </a>
                    <a href="{{ route('login') }}" class="flex-1 px-6 py-2 bg-[#6D8172] hover:bg-[#525F55] text-white rounded-lg shadow-md text-center transition">
                        Log In
                    </a>
                </div>
            </div>

            <video 
                autoplay 
                muted 
                loop 
                id="background-video"
                class="fixed top-0 left-0 w-screen h-screen object-cover -z-10 pointer-events-none">
                <source src="{{ asset('images/Rotating Earth Animation.mp4') }}" type="video/mp4">
            </video>
        </div> 
    </div>    
</x-app-layout>
