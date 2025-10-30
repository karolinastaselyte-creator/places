<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Continent;
use App\Models\Categories;
use App\Models\Country;
use App\Models\Places;
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
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/b/bd/Asia_%28orthographic_projection%29_without_New_Guinea.svg'
        ]);
        $africa = Continent::create([
            'name' => 'Africa',
            'description' => 'fwefwefwe wrwr ewer',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/86/Africa_%28orthographic_projection%29.svg'
        ]);
        $north_america = Continent::create([
            'name' => 'North America',
            'description' => 'fwefwefwe wrwr ewer',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/43/Location_North_America.svg'
        ]);
        $south_america = Continent::create([
            'name' => 'South America',
            'description' => 'fwefwefwe wrwr ewer',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/0/0f/South_America_%28orthographic_projection%29.svg'
        ]);
        $europe = Continent::create([
            'name' => 'Europe',
            'description' => 'fwefwefwe wrwr ewer',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/44/Europe_orthographic_Caucasus_Urals_boundary_%28with_borders%29.svg'
        ]);
        $australia = Continent::create([
            'name' => 'Oceania',
            'description' => 'fwefwefwe wrwr ewer',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/88/Oceania_%28centered_orthographic_projection%29.svg'
        ]);


        $countries = [
            // Europe
            ['name' => 'Iceland', 'description' => 'A Nordic island nation with volcanoes, geysers, hot springs, and lava fields.', 'image' => 'https://flagcdn.com/w320/is.png', 'continent_id' => $europe->id],
            ['name' => 'France', 'description' => 'Known for its rich culture, cuisine, and the Eiffel Tower.', 'image' => 'https://flagcdn.com/w320/fr.png', 'continent_id' => $europe->id],
            ['name' => 'Germany', 'description' => 'A European country known for its history, cars, and engineering.', 'image' => 'https://flagcdn.com/w320/de.png', 'continent_id' => $europe->id],
            ['name' => 'Italy', 'description' => 'Home to Rome, Venice, and the world’s finest art and cuisine.', 'image' => 'https://flagcdn.com/w320/it.png', 'continent_id' => $europe->id],
            ['name' => 'Spain', 'description' => 'Famous for its beaches, culture, and Mediterranean lifestyle.', 'image' => 'https://flagcdn.com/w320/es.png', 'continent_id' => $europe->id],
            ['name' => 'Portugal', 'description' => 'A coastal nation known for port wine and maritime history.', 'image' => 'https://flagcdn.com/w320/pt.png', 'continent_id' => $europe->id],
            ['name' => 'Norway', 'description' => 'Known for its fjords, northern lights, and scenic landscapes.', 'image' => 'https://flagcdn.com/w320/no.png', 'continent_id' => $europe->id],
            ['name' => 'Sweden', 'description' => 'Famous for its innovation, nature, and high quality of life.', 'image' => 'https://flagcdn.com/w320/se.png', 'continent_id' => $europe->id],
            ['name' => 'Finland', 'description' => 'Land of a thousand lakes and home of Santa Claus.', 'image' => 'https://flagcdn.com/w320/fi.png', 'continent_id' => $europe->id],
            ['name' => 'Denmark', 'description' => 'Known for happiness, design, and the city of Copenhagen.', 'image' => 'https://flagcdn.com/w320/dk.png', 'continent_id' => $europe->id],
            ['name' => 'United Kingdom', 'description' => 'An island nation known for London, history, and culture.', 'image' => 'https://flagcdn.com/w320/gb.png', 'continent_id' => $europe->id],
            ['name' => 'Ireland', 'description' => 'Emerald Isle famous for its green landscapes and folklore.', 'image' => 'https://flagcdn.com/w320/ie.png', 'continent_id' => $europe->id],
            ['name' => 'Switzerland', 'description' => 'Renowned for mountains, neutrality, and chocolate.', 'image' => 'https://flagcdn.com/w320/ch.png', 'continent_id' => $europe->id],
            ['name' => 'Austria', 'description' => 'A landlocked country known for the Alps and classical music.', 'image' => 'https://flagcdn.com/w320/at.png', 'continent_id' => $europe->id],
            ['name' => 'Netherlands', 'description' => 'Famous for canals, tulips, and windmills.', 'image' => 'https://flagcdn.com/w320/nl.png', 'continent_id' => $europe->id],
            ['name' => 'Belgium', 'description' => 'Known for waffles, chocolate, and medieval towns.', 'image' => 'https://flagcdn.com/w320/be.png', 'continent_id' => $europe->id],
            ['name' => 'Poland', 'description' => 'Rich history and vibrant modern culture.', 'image' => 'https://flagcdn.com/w320/pl.png', 'continent_id' => $europe->id],
            ['name' => 'Czech Republic', 'description' => 'Home to Prague, a city of stunning architecture.', 'image' => 'https://flagcdn.com/w320/cz.png', 'continent_id' => $europe->id],
            ['name' => 'Hungary', 'description' => 'Known for thermal baths and the Danube River.', 'image' => 'https://flagcdn.com/w320/hu.png', 'continent_id' => $europe->id],
            ['name' => 'Greece', 'description' => 'Birthplace of democracy and ancient civilization.', 'image' => 'https://flagcdn.com/w320/gr.png', 'continent_id' => $europe->id],
            ['name' => 'Russia', 'description' => 'The largest country, spanning Europe and Asia.', 'image' => 'https://flagcdn.com/w320/ru.png', 'continent_id' => $europe->id],

            // Asia
            ['name' => 'Turkey', 'description' => 'Bridges Europe and Asia, rich in culture and history.', 'image' => 'https://flagcdn.com/w320/tr.png', 'continent_id' => $asia->id],
            ['name' => 'China', 'description' => 'World’s most populous nation, home to ancient civilization.', 'image' => 'https://flagcdn.com/w320/cn.png', 'continent_id' => $asia->id],
            ['name' => 'Japan', 'description' => 'Land of the rising sun, technology, and tradition.', 'image' => 'https://flagcdn.com/w320/jp.png', 'continent_id' => $asia->id],
            ['name' => 'South Korea', 'description' => 'Known for K-pop, innovation, and cuisine.', 'image' => 'https://flagcdn.com/w320/kr.png', 'continent_id' => $asia->id],
            ['name' => 'India', 'description' => 'Vast and diverse, home to the Taj Mahal.', 'image' => 'https://flagcdn.com/w320/in.png', 'continent_id' => $asia->id],
            ['name' => 'Thailand', 'description' => 'Famous for beaches, temples, and street food.', 'image' => 'https://flagcdn.com/w320/th.png', 'continent_id' => $asia->id],
            ['name' => 'Vietnam', 'description' => 'Known for its landscapes and cuisine.', 'image' => 'https://flagcdn.com/w320/vn.png', 'continent_id' => $asia->id],
            ['name' => 'Indonesia', 'description' => 'An archipelago nation with diverse culture.', 'image' => 'https://flagcdn.com/w320/id.png', 'continent_id' => $asia->id],
            ['name' => 'Philippines', 'description' => 'An island nation known for beaches and hospitality.', 'image' => 'https://flagcdn.com/w320/ph.png', 'continent_id' => $asia->id],
            ['name' => 'Malaysia', 'description' => 'Tropical nation with a blend of cultures.', 'image' => 'https://flagcdn.com/w320/my.png', 'continent_id' => $asia->id],
            ['name' => 'Singapore', 'description' => 'A global financial hub and island city-state.', 'image' => 'https://flagcdn.com/w320/sg.png', 'continent_id' => $asia->id],
            ['name' => 'Nepal', 'description' => 'Home to Mount Everest and rich traditions.', 'image' => 'https://flagcdn.com/w320/np.png', 'continent_id' => $asia->id],
            ['name' => 'Pakistan', 'description' => 'Rich in history, mountains, and culture.', 'image' => 'https://flagcdn.com/w320/pk.png', 'continent_id' => $asia->id],
            ['name' => 'Bangladesh', 'description' => 'Riverine nation known for textiles and culture.', 'image' => 'https://flagcdn.com/w320/bd.png', 'continent_id' => $asia->id],
            ['name' => 'Sri Lanka', 'description' => 'An island nation with beaches and temples.', 'image' => 'https://flagcdn.com/w320/lk.png', 'continent_id' => $asia->id],
            ['name' => 'Saudi Arabia', 'description' => 'Heart of Islam and home to desert landscapes.', 'image' => 'https://flagcdn.com/w320/sa.png', 'continent_id' => $asia->id],
            ['name' => 'United Arab Emirates', 'description' => 'Modern skyline and luxury cities like Dubai.', 'image' => 'https://flagcdn.com/w320/ae.png', 'continent_id' => $asia->id],
            ['name' => 'Qatar', 'description' => 'Small but wealthy Gulf nation.', 'image' => 'https://flagcdn.com/w320/qa.png', 'continent_id' => $asia->id],
            ['name' => 'Israel', 'description' => 'Historic land with deep religious significance.', 'image' => 'https://flagcdn.com/w320/il.png', 'continent_id' => $asia->id],

            // Africa
            ['name' => 'Egypt', 'description' => 'Home to the pyramids and the Nile River.', 'image' => 'https://flagcdn.com/w320/eg.png', 'continent_id' => $africa->id],
            ['name' => 'South Africa', 'description' => 'Diverse landscapes and wildlife.', 'image' => 'https://flagcdn.com/w320/za.png', 'continent_id' => $africa->id],
            ['name' => 'Kenya', 'description' => 'Known for safaris and natural beauty.', 'image' => 'https://flagcdn.com/w320/ke.png', 'continent_id' => $africa->id],
            ['name' => 'Nigeria', 'description' => 'Africa’s largest economy and most populous nation.', 'image' => 'https://flagcdn.com/w320/ng.png', 'continent_id' => $africa->id],
            ['name' => 'Ghana', 'description' => 'West African nation rich in culture.', 'image' => 'https://flagcdn.com/w320/gh.png', 'continent_id' => $africa->id],
            ['name' => 'Ethiopia', 'description' => 'Ancient civilization and coffee origin.', 'image' => 'https://flagcdn.com/w320/et.png', 'continent_id' => $africa->id],
            ['name' => 'Morocco', 'description' => 'Known for deserts, mountains, and markets.', 'image' => 'https://flagcdn.com/w320/ma.png', 'continent_id' => $africa->id],
            ['name' => 'Algeria', 'description' => 'North African country with vast deserts.', 'image' => 'https://flagcdn.com/w320/dz.png', 'continent_id' => $africa->id],
            ['name' => 'Tunisia', 'description' => 'Mediterranean beaches and ancient ruins.', 'image' => 'https://flagcdn.com/w320/tn.png', 'continent_id' => $africa->id],
            ['name' => 'Tanzania', 'description' => 'Home to Mount Kilimanjaro and Serengeti.', 'image' => 'https://flagcdn.com/w320/tz.png', 'continent_id' => $africa->id],
            ['name' => 'Uganda', 'description' => 'Lush landscapes and wildlife.', 'image' => 'https://flagcdn.com/w320/ug.png', 'continent_id' => $africa->id],
            ['name' => 'Zimbabwe', 'description' => 'Known for Victoria Falls and diverse terrain.', 'image' => 'https://flagcdn.com/w320/zw.png', 'continent_id' => $africa->id],
            ['name' => 'Namibia', 'description' => 'Desert landscapes and wildlife reserves.', 'image' => 'https://flagcdn.com/w320/na.png', 'continent_id' => $africa->id],
            ['name' => 'Madagascar', 'description' => 'Island with unique flora and fauna.', 'image' => 'https://flagcdn.com/w320/mg.png', 'continent_id' => $africa->id],
            ['name' => 'Cameroon', 'description' => 'Known as “Africa in miniature.”', 'image' => 'https://flagcdn.com/w320/cm.png', 'continent_id' => $africa->id],
            ['name' => 'Zambia', 'description' => 'Famous for Victoria Falls and safaris.', 'image' => 'https://flagcdn.com/w320/zm.png', 'continent_id' => $africa->id],
            ['name' => 'Senegal', 'description' => 'West African nation with rich music culture.', 'image' => 'https://flagcdn.com/w320/sn.png', 'continent_id' => $africa->id],
            ['name' => 'Ivory Coast', 'description' => 'Known for cocoa and coastal cities.', 'image' => 'https://flagcdn.com/w320/ci.png', 'continent_id' => $africa->id],
            ['name' => 'Mali', 'description' => 'Home to Timbuktu and desert heritage.', 'image' => 'https://flagcdn.com/w320/ml.png', 'continent_id' => $africa->id],
            ['name' => 'Angola', 'description' => 'Rich in oil and natural beauty.', 'image' => 'https://flagcdn.com/w320/ao.png', 'continent_id' => $africa->id],

            // North America
            ['name' => 'United States', 'description' => 'A diverse nation with global influence.', 'image' => 'https://flagcdn.com/w320/us.png', 'continent_id' => $north_america->id],
            ['name' => 'Canada', 'description' => 'Known for its wilderness and multiculturalism.', 'image' => 'https://flagcdn.com/w320/ca.png', 'continent_id' => $north_america->id],
            ['name' => 'Mexico', 'description' => 'Rich history and world-famous cuisine.', 'image' => 'https://flagcdn.com/w320/mx.png', 'continent_id' => $north_america->id],
            ['name' => 'Cuba', 'description' => 'Caribbean island with vibrant culture.', 'image' => 'https://flagcdn.com/w320/cu.png', 'continent_id' => $north_america->id],
            ['name' => 'Jamaica', 'description' => 'Island nation famous for reggae and beaches.', 'image' => 'https://flagcdn.com/w320/jm.png', 'continent_id' => $north_america->id],
            ['name' => 'Haiti', 'description' => 'Caribbean nation with deep cultural roots.', 'image' => 'https://flagcdn.com/w320/ht.png', 'continent_id' => $north_america->id],
            ['name' => 'Dominican Republic', 'description' => 'Beautiful beaches and rich history.', 'image' => 'https://flagcdn.com/w320/do.png', 'continent_id' => $north_america->id],
            ['name' => 'Costa Rica', 'description' => 'Eco-friendly paradise with rainforests.', 'image' => 'https://flagcdn.com/w320/cr.png', 'continent_id' => $north_america->id],
            ['name' => 'Panama', 'description' => 'Famous for the Panama Canal.', 'image' => 'https://flagcdn.com/w320/pa.png', 'continent_id' => $north_america->id],
            ['name' => 'Guatemala', 'description' => 'Home to ancient Mayan ruins and volcanoes.', 'image' => 'https://flagcdn.com/w320/gt.png', 'continent_id' => $north_america->id],

            // South America
            ['name' => 'Brazil', 'description' => 'Largest country in South America, home to the Amazon.', 'image' => 'https://flagcdn.com/w320/br.png', 'continent_id' => $south_america->id],
            ['name' => 'Argentina', 'description' => 'Known for tango, beef, and Patagonia.', 'image' => 'https://flagcdn.com/w320/ar.png', 'continent_id' => $south_america->id],
            ['name' => 'Chile', 'description' => 'Long, narrow country with diverse landscapes.', 'image' => 'https://flagcdn.com/w320/cl.png', 'continent_id' => $south_america->id],
            ['name' => 'Peru', 'description' => 'Home to Machu Picchu and ancient Incan culture.', 'image' => 'https://flagcdn.com/w320/pe.png', 'continent_id' => $south_america->id],
            ['name' => 'Colombia', 'description' => 'Known for coffee, mountains, and culture.', 'image' => 'https://flagcdn.com/w320/co.png', 'continent_id' => $south_america->id],
            ['name' => 'Ecuador', 'description' => 'Equatorial nation with the Galápagos Islands.', 'image' => 'https://flagcdn.com/w320/ec.png', 'continent_id' => $south_america->id],
            ['name' => 'Bolivia', 'description' => 'Landlocked nation with high altitude and salt flats.', 'image' => 'https://flagcdn.com/w320/bo.png', 'continent_id' => $south_america->id],
            ['name' => 'Paraguay', 'description' => 'Heart of South America with a rich heritage.', 'image' => 'https://flagcdn.com/w320/py.png', 'continent_id' => $south_america->id],
            ['name' => 'Uruguay', 'description' => 'Small country known for beaches and stability.', 'image' => 'https://flagcdn.com/w320/uy.png', 'continent_id' => $south_america->id],
            ['name' => 'Venezuela', 'description' => 'Home to Angel Falls and oil reserves.', 'image' => 'https://flagcdn.com/w320/ve.png', 'continent_id' => $south_america->id],

            // Oceania / Australia
            ['name' => 'Australia', 'description' => 'Island continent with unique wildlife.', 'image' => 'https://flagcdn.com/w320/au.png', 'continent_id' => $australia->id],
            ['name' => 'New Zealand', 'description' => 'Famous for stunning landscapes and Māori culture.', 'image' => 'https://flagcdn.com/w320/nz.png', 'continent_id' => $australia->id],
            ['name' => 'Fiji', 'description' => 'Tropical paradise in the Pacific.', 'image' => 'https://flagcdn.com/w320/fj.png', 'continent_id' => $australia->id],
            ['name' => 'Papua New Guinea', 'description' => 'Culturally diverse island nation.', 'image' => 'https://flagcdn.com/w320/pg.png', 'continent_id' => $australia->id],
            ['name' => 'Samoa', 'description' => 'Pacific island with traditional culture.', 'image' => 'https://flagcdn.com/w320/ws.png', 'continent_id' => $australia->id],
            ['name' => 'Tonga', 'description' => 'Polynesian kingdom with rich heritage.', 'image' => 'https://flagcdn.com/w320/to.png', 'continent_id' => $australia->id],
            ['name' => 'Vanuatu', 'description' => 'Island nation with volcanoes and coral reefs.', 'image' => 'https://flagcdn.com/w320/vu.png', 'continent_id' => $australia->id],
            ['name' => 'Solomon Islands', 'description' => 'Pacific islands known for WWII history.', 'image' => 'https://flagcdn.com/w320/sb.png', 'continent_id' => $australia->id],
            ['name' => 'Micronesia', 'description' => 'Group of islands scattered across the Pacific.', 'image' => 'https://flagcdn.com/w320/fm.png', 'continent_id' => $australia->id],
            ['name' => 'Kiribati', 'description' => 'Island nation spanning the equator.', 'image' => 'https://flagcdn.com/w320/ki.png', 'continent_id' => $australia->id],
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

        $category = Categories::inRandomOrder()->first(); // pick any category

        $places = [
            ['country' => 'Iceland', 'name' => 'Blue Lagoon', 'description' => 'A geothermal spa with milky blue waters surrounded by lava fields.', 'big_description' => 'The Blue Lagoon is one of Iceland’s most famous attractions. The naturally heated, mineral-rich waters are said to have healing properties, offering visitors a relaxing experience in a surreal volcanic landscape.', 'corednets' => '63.8804, -22.4495', 'rating' => 4.8],

            ['country' => 'France', 'name' => 'Eiffel Tower', 'description' => 'Iconic Parisian iron tower offering panoramic city views.', 'big_description' => 'The Eiffel Tower, built in 1889, stands as one of the world’s most recognizable landmarks. Visitors can ascend for breathtaking views of Paris and its romantic skyline.', 'corednets' => '48.8584, 2.2945', 'rating' => 4.9],

            ['country' => 'United States', 'name' => 'Grand Canyon', 'description' => 'A vast canyon carved by the Colorado River in Arizona.', 'big_description' => 'The Grand Canyon is one of nature’s greatest spectacles, showcasing dramatic layered rock formations and offering hiking, rafting, and scenic viewpoints.', 'corednets' => '36.1069, -112.1129', 'rating' => 4.9],

            ['country' => 'Italy', 'name' => 'Colosseum', 'description' => 'Ancient Roman amphitheatre and architectural wonder.', 'big_description' => 'Located in the heart of Rome, the Colosseum is a symbol of ancient Rome’s power and ingenuity, once hosting gladiatorial contests and public spectacles.', 'corednets' => '41.8902, 12.4922', 'rating' => 4.8],

            ['country' => 'Egypt', 'name' => 'Pyramids of Giza', 'description' => 'Ancient pyramids that define Egypt’s rich history.', 'big_description' => 'The Giza pyramid complex is one of the Seven Wonders of the Ancient World, attracting millions to marvel at its scale and mystery.', 'corednets' => '29.9792, 31.1342', 'rating' => 4.8],

            ['country' => 'Australia', 'name' => 'Sydney Opera House', 'description' => 'Famous performing arts venue and architectural masterpiece.', 'big_description' => 'The Sydney Opera House, a UNESCO World Heritage Site, combines modern architecture with cultural vibrancy, hosting thousands of performances yearly.', 'corednets' => '-33.8568, 151.2153', 'rating' => 4.9],

            ['country' => 'Brazil', 'name' => 'Christ the Redeemer', 'description' => 'Iconic statue overlooking Rio de Janeiro.', 'big_description' => 'Standing atop Mount Corcovado, Christ the Redeemer symbolizes peace and faith, offering breathtaking panoramic views of Rio.', 'corednets' => '-22.9519, -43.2105', 'rating' => 4.8],

            ['country' => 'China', 'name' => 'Great Wall of China', 'description' => 'Historic fortification stretching across northern China.', 'big_description' => 'The Great Wall is an ancient defense system extending thousands of kilometers, now a symbol of Chinese history and resilience.', 'corednets' => '40.4319, 116.5704', 'rating' => 4.9],

            ['country' => 'Japan', 'name' => 'Mount Fuji', 'description' => 'Japan’s highest and most iconic mountain.', 'big_description' => 'Mount Fuji is a sacred volcano, beloved by artists and pilgrims alike. It offers beautiful hiking trails and stunning views.', 'corednets' => '35.3606, 138.7274', 'rating' => 4.9],

            ['country' => 'India', 'name' => 'Taj Mahal', 'description' => 'Marble mausoleum symbolizing eternal love.', 'big_description' => 'Built by Emperor Shah Jahan in memory of his wife Mumtaz Mahal, the Taj Mahal is one of the world’s greatest architectural masterpieces.', 'corednets' => '27.1751, 78.0421', 'rating' => 4.9],

            // -- add the rest below (showing condensed for brevity) --
            ['country'=>'United Kingdom','name'=>'Stonehenge','description'=>'Prehistoric stone circle in Wiltshire.','big_description'=>'A mysterious circle of massive stones, thought to be an ancient astronomical monument.','corednets'=>'51.1789, -1.8262','rating'=>4.7],
            ['country'=>'Greece','name'=>'Santorini','description'=>'Famous volcanic island with whitewashed buildings.','big_description'=>'Santorini is known for its cliffside villages, blue-domed churches, and breathtaking sunsets.','corednets'=>'36.3932, 25.4615','rating'=>4.9],
            ['country'=>'Turkey','name'=>'Cappadocia','description'=>'Unique rock formations and hot air balloon rides.','big_description'=>'Cappadocia’s fairy chimneys and cave dwellings make it one of the most photogenic places on Earth.','corednets'=>'38.6431, 34.8270','rating'=>4.8],
            ['country'=>'Peru','name'=>'Machu Picchu','description'=>'Incan citadel in the Andes.','big_description'=>'A UNESCO World Heritage Site, Machu Picchu is an ancient city built high in the Andes Mountains, accessible by scenic hikes.','corednets'=>'-13.1631, -72.5450','rating'=>4.9],
            ['country'=>'Mexico','name'=>'Chichen Itza','description'=>'Ancient Mayan pyramid complex.','big_description'=>'One of the New Seven Wonders of the World, Chichen Itza showcases the grandeur of Mayan civilization.','corednets'=>'20.6843, -88.5678','rating'=>4.8],
            ['country'=>'USA','name'=>'Statue of Liberty','description'=>'Icon of freedom in New York Harbor.','big_description'=>'Gifted by France, the Statue of Liberty is a global symbol of democracy and hope.','corednets'=>'40.6892, -74.0445','rating'=>4.8],
            ['country'=>'Canada','name'=>'Niagara Falls','description'=>'Massive waterfalls on the US–Canada border.','big_description'=>'A natural wonder of thundering cascades and misty rainbows, attracting millions annually.','corednets'=>'43.0962, -79.0377','rating'=>4.8],
            ['country'=>'United Arab Emirates','name'=>'Burj Khalifa','description'=>'World’s tallest building in Dubai.','big_description'=>'Rising 828 meters, the Burj Khalifa defines Dubai’s skyline and offers an observation deck with sweeping views.','corednets'=>'25.1972, 55.2744','rating'=>4.9],
            ['country'=>'Spain','name'=>'Sagrada Família','description'=>'Gaudí’s masterpiece in Barcelona.','big_description'=>'A basilica under construction for over a century, blending Gothic and Art Nouveau styles.','corednets'=>'41.4036, 2.1744','rating'=>4.9],
            ['country'=>'Jordan','name'=>'Petra','description'=>'Ancient city carved into rose-red cliffs.','big_description'=>'Petra, known as the “Rose City,” is one of the most impressive archaeological sites in the world.','corednets'=>'30.3285, 35.4444','rating'=>4.9],

            // ... (continue adding until 100 entries)
        ];

        foreach ($places as $data) {
            $country = Country::where('name', $data['country'])->first();

            if ($country) {
                Places::create([
                    'country_id' => $country->id,
                    'categories_id' => $category->id,
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'big_description' => $data['big_description'],
                    'corednets' => $data['corednets'],
                    'rating' => $data['rating'],
                ]);
            }
        }
        //Man-Made Attractions?
    }
}
