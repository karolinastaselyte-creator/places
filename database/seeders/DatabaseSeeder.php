<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Continent;
use App\Models\Categories;
use App\Models\Country;
// use Illumina
// te\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Karolina',
            'email' => 'karolinastaselyte@gmail.com',
        ]);

        $asia = Continent::create([
            'name' => 'Asia',
            'description' => 'fwefwefwe wrwr ewer',
            'image' => 'https://en.wikipedia.org/wiki/File:Asia_(orthographic_projection)_without_New_Guinea.svg'
        ]);
        $africa = Continent::create([
            'name' => 'Africa',
            'description' => 'fwefwefwe wrwr ewer',
            'image' => 'https://en.wikipedia.org/wiki/File:Africa_(orthographic_projection).svg'
        ]);
        $north_america = Continent::create([
            'name' => 'North America',
            'description' => 'fwefwefwe wrwr ewer',
            'image' => 'https://en.wikipedia.org/wiki/File:Location_North_America.svg'
        ]);
        $south_america = Continent::create([
            'name' => 'South America',
            'description' => 'fwefwefwe wrwr ewer',
            'image' => 'https://en.wikipedia.org/wiki/File:South_America_(orthographic_projection).svg'
        ]);
        $europe = Continent::create([
            'name' => 'Europe',
            'description' => 'fwefwefwe wrwr ewer',
            'image' => 'https://en.wikipedia.org/wiki/File:Europe_orthographic_Caucasus_Urals_boundary_(with_borders).svg'
        ]);
        $australia = Continent::create([
            'name' => 'Oceania',
            'description' => 'fwefwefwe wrwr ewer',
            'image' => 'hhttps://en.wikipedia.org/wiki/File:Oceania_(centered_orthographic_projection).svg'
        ]);


        $countries = [
            ['name' => 'Iceland', 'description' => 'A Nordic island nation with volcanoes, geysers, hot springs, and lava fields.', 'image' => 'link', 'continent_id' => $europe->id],
            ['name' => 'France', 'description' => 'Known for its rich culture, cuisine, and the Eiffel Tower.', 'image' => 'link', 'continent_id' => $europe->id],
            ['name' => 'Germany', 'description' => 'A European country known for its history, cars, and engineering.', 'image' => 'link', 'continent_id' => $europe->id],
            ['name' => 'Italy', 'description' => 'Home to Rome, Venice, and the world’s finest art and cuisine.', 'image' => 'link', 'continent_id' => $europe->id],
            ['name' => 'Spain', 'description' => 'Famous for its beaches, culture, and Mediterranean lifestyle.', 'image' => 'link', 'continent_id' => $europe->id],
            ['name' => 'Portugal', 'description' => 'A coastal nation known for port wine and maritime history.', 'image' => 'link', 'continent_id' => $europe->id],
            ['name' => 'Norway', 'description' => 'Known for its fjords, northern lights, and scenic landscapes.', 'image' => 'link', 'continent_id' => $europe->id],
            ['name' => 'Sweden', 'description' => 'Famous for its innovation, nature, and high quality of life.', 'image' => 'link', 'continent_id' => $europe->id],
            ['name' => 'Finland', 'description' => 'Land of a thousand lakes and home of Santa Claus.', 'image' => 'link', 'continent_id' => $europe->id],
            ['name' => 'Denmark', 'description' => 'Known for happiness, design, and the city of Copenhagen.', 'image' => 'link', 'continent_id' => $europe->id],

            ['name' => 'United Kingdom', 'description' => 'An island nation known for London, history, and culture.', 'image' => 'link', 'continent_id' => $europe->id],
            ['name' => 'Ireland', 'description' => 'Emerald Isle famous for its green landscapes and folklore.', 'image' => 'link', 'continent_id' => $europe->id],
            ['name' => 'Switzerland', 'description' => 'Renowned for mountains, neutrality, and chocolate.', 'image' => 'link', 'continent_id' => $europe->id],
            ['name' => 'Austria', 'description' => 'A landlocked country known for the Alps and classical music.', 'image' => 'link', 'continent_id' => $europe->id],
            ['name' => 'Netherlands', 'description' => 'Famous for canals, tulips, and windmills.', 'image' => 'link', 'continent_id' => $europe->id],
            ['name' => 'Belgium', 'description' => 'Known for waffles, chocolate, and medieval towns.', 'image' => 'link', 'continent_id' => $europe->id],
            ['name' => 'Poland', 'description' => 'Rich history and vibrant modern culture.', 'image' => 'link', 'continent_id' => $europe->id],
            ['name' => 'Czech Republic', 'description' => 'Home to Prague, a city of stunning architecture.', 'image' => 'link', 'continent_id' => $europe->id],
            ['name' => 'Hungary', 'description' => 'Known for thermal baths and the Danube River.', 'image' => 'link', 'continent_id' => $europe->id],
            ['name' => 'Greece', 'description' => 'Birthplace of democracy and ancient civilization.', 'image' => 'link', 'continent_id' => $europe->id],

            ['name' => 'Russia', 'description' => 'The largest country, spanning Europe and Asia.', 'image' => 'link', 'continent_id' => $europe->id],
            ['name' => 'Turkey', 'description' => 'Bridges Europe and Asia, rich in culture and history.', 'image' => 'link', 'continent_id' => $asia->id],
            ['name' => 'China', 'description' => 'World’s most populous nation, home to ancient civilization.', 'image' => 'link', 'continent_id' => $asia->id],
            ['name' => 'Japan', 'description' => 'Land of the rising sun, technology, and tradition.', 'image' => 'link', 'continent_id' => $asia->id],
            ['name' => 'South Korea', 'description' => 'Known for K-pop, innovation, and cuisine.', 'image' => 'link', 'continent_id' => $asia->id],
            ['name' => 'India', 'description' => 'Vast and diverse, home to the Taj Mahal.', 'image' => 'link', 'continent_id' => $asia->id],
            ['name' => 'Thailand', 'description' => 'Famous for beaches, temples, and street food.', 'image' => 'link', 'continent_id' => $asia->id],
            ['name' => 'Vietnam', 'description' => 'Known for its landscapes and cuisine.', 'image' => 'link', 'continent_id' => $asia->id],
            ['name' => 'Indonesia', 'description' => 'An archipelago nation with diverse culture.', 'image' => 'link', 'continent_id' => $asia->id],
            ['name' => 'Philippines', 'description' => 'An island nation known for beaches and hospitality.', 'image' => 'link', 'continent_id' => $asia->id],

            ['name' => 'Malaysia', 'description' => 'Tropical nation with a blend of cultures.', 'image' => 'link', 'continent_id' => $asia->id],
            ['name' => 'Singapore', 'description' => 'A global financial hub and island city-state.', 'image' => 'link', 'continent_id' => $asia->id],
            ['name' => 'Nepal', 'description' => 'Home to Mount Everest and rich traditions.', 'image' => 'link', 'continent_id' => $asia->id],
            ['name' => 'Pakistan', 'description' => 'Rich in history, mountains, and culture.', 'image' => 'link', 'continent_id' => $asia->id],
            ['name' => 'Bangladesh', 'description' => 'Riverine nation known for textiles and culture.', 'image' => 'link', 'continent_id' => $asia->id],
            ['name' => 'Sri Lanka', 'description' => 'An island nation with beaches and temples.', 'image' => 'link', 'continent_id' => $asia->id],
            ['name' => 'Saudi Arabia', 'description' => 'Heart of Islam and home to desert landscapes.', 'image' => 'link', 'continent_id' => $asia->id],
            ['name' => 'United Arab Emirates', 'description' => 'Modern skyline and luxury cities like Dubai.', 'image' => 'link', 'continent_id' => $asia->id],
            ['name' => 'Qatar', 'description' => 'Small but wealthy Gulf nation.', 'image' => 'link', 'continent_id' => $asia->id],
            ['name' => 'Israel', 'description' => 'Historic land with deep religious significance.', 'image' => 'link', 'continent_id' => $asia->id],

            ['name' => 'Egypt', 'description' => 'Home to the pyramids and the Nile River.', 'image' => 'link', 'continent_id' => $africa->id],
            ['name' => 'South Africa', 'description' => 'Diverse landscapes and wildlife.', 'image' => 'link', 'continent_id' => $africa->id],
            ['name' => 'Kenya', 'description' => 'Known for safaris and natural beauty.', 'image' => 'link', 'continent_id' => $africa->id],
            ['name' => 'Nigeria', 'description' => 'Africa’s largest economy and most populous nation.', 'image' => 'link', 'continent_id' => $africa->id],
            ['name' => 'Ghana', 'description' => 'West African nation rich in culture.', 'image' => 'link', 'continent_id' => $africa->id],
            ['name' => 'Ethiopia', 'description' => 'Ancient civilization and coffee origin.', 'image' => 'link', 'continent_id' => $africa->id],
            ['name' => 'Morocco', 'description' => 'Known for deserts, mountains, and markets.', 'image' => 'link', 'continent_id' => $africa->id],
            ['name' => 'Algeria', 'description' => 'North African country with vast deserts.', 'image' => 'link', 'continent_id' => $africa->id],
            ['name' => 'Tunisia', 'description' => 'Mediterranean beaches and ancient ruins.', 'image' => 'link', 'continent_id' => $africa->id],
            ['name' => 'Tanzania', 'description' => 'Home to Mount Kilimanjaro and Serengeti.', 'image' => 'link', 'continent_id' => $africa->id],

            ['name' => 'Uganda', 'description' => 'Lush landscapes and wildlife.', 'image' => 'link', 'continent_id' => $africa->id],
            ['name' => 'Zimbabwe', 'description' => 'Known for Victoria Falls and diverse terrain.', 'image' => 'link', 'continent_id' => $africa->id],
            ['name' => 'Namibia', 'description' => 'Desert landscapes and wildlife reserves.', 'image' => 'link', 'continent_id' => $africa->id],
            ['name' => 'Madagascar', 'description' => 'Island with unique flora and fauna.', 'image' => 'link', 'continent_id' => $africa->id],
            ['name' => 'Cameroon', 'description' => 'Known as “Africa in miniature.”', 'image' => 'link', 'continent_id' => $africa->id],
            ['name' => 'Zambia', 'description' => 'Famous for Victoria Falls and safaris.', 'image' => 'link', 'continent_id' => $africa->id],
            ['name' => 'Senegal', 'description' => 'West African nation with rich music culture.', 'image' => 'link', 'continent_id' => $africa->id],
            ['name' => 'Ivory Coast', 'description' => 'Known for cocoa and coastal cities.', 'image' => 'link', 'continent_id' => $africa->id],
            ['name' => 'Mali', 'description' => 'Home to Timbuktu and desert heritage.', 'image' => 'link', 'continent_id' => $africa->id],
            ['name' => 'Angola', 'description' => 'Rich in oil and natural beauty.', 'image' => 'link', 'continent_id' => $africa->id],

            ['name' => 'United States', 'description' => 'A diverse nation with global influence.', 'image' => 'link', 'continent_id' => $north_america->id],
            ['name' => 'Canada', 'description' => 'Known for its wilderness and multiculturalism.', 'image' => 'link', 'continent_id' => $north_america->id],
            ['name' => 'Mexico', 'description' => 'Rich history and world-famous cuisine.', 'image' => 'link', 'continent_id' => $north_america->id],
            ['name' => 'Cuba', 'description' => 'Caribbean island with vibrant culture.', 'image' => 'link', 'continent_id' => $north_america->id],
            ['name' => 'Jamaica', 'description' => 'Island nation famous for reggae and beaches.', 'image' => 'link', 'continent_id' => $north_america->id],
            ['name' => 'Haiti', 'description' => 'Caribbean nation with deep cultural roots.', 'image' => 'link', 'continent_id' => $north_america->id],
            ['name' => 'Dominican Republic', 'description' => 'Beautiful beaches and rich history.', 'image' => 'link', 'continent_id' => $north_america->id],
            ['name' => 'Costa Rica', 'description' => 'Eco-friendly paradise with rainforests.', 'image' => 'link', 'continent_id' => $north_america->id],
            ['name' => 'Panama', 'description' => 'Famous for the Panama Canal.', 'image' => 'link', 'continent_id' => $north_america->id],
            ['name' => 'Guatemala', 'description' => 'Home to ancient Mayan ruins and volcanoes.', 'image' => 'link', 'continent_id' => $north_america->id],

            ['name' => 'Brazil', 'description' => 'Largest country in South America, home to the Amazon.', 'image' => 'link', 'continent_id' => $south_america->id],
            ['name' => 'Argentina', 'description' => 'Known for tango, beef, and Patagonia.', 'image' => 'link', 'continent_id' => $south_america->id],
            ['name' => 'Chile', 'description' => 'Long, narrow country with diverse landscapes.', 'image' => 'link', 'continent_id' => $south_america->id],
            ['name' => 'Peru', 'description' => 'Home to Machu Picchu and ancient Incan culture.', 'image' => 'link', 'continent_id' => $south_america->id],
            ['name' => 'Colombia', 'description' => 'Known for coffee, mountains, and culture.', 'image' => 'link', 'continent_id' => $south_america->id],
            ['name' => 'Ecuador', 'description' => 'Equatorial nation with the Galápagos Islands.', 'image' => 'link', 'continent_id' => $south_america->id],
            ['name' => 'Bolivia', 'description' => 'Landlocked nation with high altitude and salt flats.', 'image' => 'link', 'continent_id' => $south_america->id],
            ['name' => 'Paraguay', 'description' => 'Heart of South America with a rich heritage.', 'image' => 'link', 'continent_id' => $south_america->id],
            ['name' => 'Uruguay', 'description' => 'Small country known for beaches and stability.', 'image' => 'link', 'continent_id' => $south_america->id],
            ['name' => 'Venezuela', 'description' => 'Home to Angel Falls and oil reserves.', 'image' => 'link', 'continent_id' => $south_america->id],

            ['name' => 'Australia', 'description' => 'Island continent with unique wildlife.', 'image' => 'link', 'continent_id' => $australia->id],
            ['name' => 'New Zealand', 'description' => 'Famous for stunning landscapes and Māori culture.', 'image' => 'link', 'continent_id' => $australia->id],
            ['name' => 'Fiji', 'description' => 'Tropical paradise in the Pacific.', 'image' => 'link', 'continent_id' => $australia->id],
            ['name' => 'Papua New Guinea', 'description' => 'Culturally diverse island nation.', 'image' => 'link', 'continent_id' => $australia->id],
            ['name' => 'Samoa', 'description' => 'Pacific island with traditional culture.', 'image' => 'link', 'continent_id' => $australia->id],
            ['name' => 'Tonga', 'description' => 'Polynesian kingdom with rich heritage.', 'image' => 'link', 'continent_id' => $australia->id],
            ['name' => 'Vanuatu', 'description' => 'Island nation with volcanoes and coral reefs.', 'image' => 'link', 'continent_id' => $australia->id],
            ['name' => 'Solomon Islands', 'description' => 'Pacific islands known for WWII history.', 'image' => 'link', 'continent_id' => $australia->id],
            ['name' => 'Micronesia', 'description' => 'Group of islands scattered across the Pacific.', 'image' => 'link', 'continent_id' => $australia->id],
            ['name' => 'Kiribati', 'description' => 'Island nation spanning the equator.', 'image' => 'link', 'continent_id' => $australia->id],
        ];

        foreach($countries as $country)
        {
            Country::create($country);
        }


        Categories::create([
            'name' => 'Urban Destinations',
        ]);
        Categories::create([
            'name' => 'Historical Sites',
        ]);
        Categories::create([
            'name' => 'Natural Landmarks',
        ]);
        //Man-Made Attractions?
    }
}
