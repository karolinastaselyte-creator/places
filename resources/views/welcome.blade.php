<x-app-layout>
    <div class=" text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <nav>
            <a href="/places">Places to Visit</a>
            <a href="/present">My Visits</a>
        </nav>
        <div class="relative m-[100px]">
            <div class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[100] p-8 bg-black/50 border border-white rounded text-white text-center">
                <div class="wel">
                    <h3>Welcome to the Official Wonders of the World website</h3>
                    <p>Our mission is to interduce upcoming travelers to new and amazing places from all around the world.</p>
                    <p>As of now we only have Australia and China, but our small team is working hard to publish new areas, so look forward to it.</p>
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
