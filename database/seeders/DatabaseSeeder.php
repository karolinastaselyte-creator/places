<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Continent;
use App\Models\Categories;
use App\Models\Country;
use App\Models\Places;
use App\Models\Images;

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


        $urbanDest = Categories::create([
            'name' => 'Urban Destinations',
        ]);
        $historicalDest = Categories::create([
            'name' => 'Historical Sites',
        ]);
        $naturalDest = Categories::create([
            'name' => 'Natural Landmarks',
        ]);

        $places = [
            // 🌋 Natural Landmarks
            ['country' => 'Iceland', 'name' => 'Blue Lagoon', 'description' => 'A geothermal spa with milky blue waters surrounded by lava fields.', 'big_description' => 'The Blue Lagoon is one of Iceland’s most famous attractions. The naturally heated, mineral-rich waters are said to have healing properties, offering visitors a relaxing experience in a surreal volcanic landscape.', 'corednets' => '63.8804, -22.4495', 'rating' => 4.8, 'category_id' => $naturalDest->id],
            ['country' => 'United States', 'name' => 'Grand Canyon', 'description' => 'A vast canyon carved by the Colorado River in Arizona.', 'big_description' => 'The Grand Canyon is one of nature’s greatest spectacles, showcasing dramatic layered rock formations and offering hiking, rafting, and scenic viewpoints.', 'corednets' => '36.1069, -112.1129', 'rating' => 4.9, 'category_id' => $naturalDest->id],
            ['country' => 'Japan', 'name' => 'Mount Fuji', 'description' => 'Japan’s highest and most iconic mountain.', 'big_description' => 'Mount Fuji is a sacred volcano, beloved by artists and pilgrims alike. It offers beautiful hiking trails and stunning views.', 'corednets' => '35.3606, 138.7274', 'rating' => 4.9, 'category_id' => $naturalDest->id],
            ['country' => 'Canada', 'name' => 'Niagara Falls', 'description' => 'Massive waterfalls on the US–Canada border.', 'big_description' => 'A natural wonder of thundering cascades and misty rainbows, attracting millions annually.', 'corednets' => '43.0962, -79.0377', 'rating' => 4.8, 'category_id' => $naturalDest->id],
            ['country' => 'Greece', 'name' => 'Santorini', 'description' => 'Famous volcanic island with whitewashed buildings.', 'big_description' => 'Santorini is known for its cliffside villages, blue-domed churches, and breathtaking sunsets.', 'corednets' => '36.3932, 25.4615', 'rating' => 4.9, 'category_id' => $naturalDest->id],
            ['country' => 'Turkey', 'name' => 'Cappadocia', 'description' => 'Unique rock formations and hot air balloon rides.', 'big_description' => 'Cappadocia’s fairy chimneys and cave dwellings make it one of the most photogenic places on Earth.', 'corednets' => '38.6431, 34.8270', 'rating' => 4.8, 'category_id' => $naturalDest->id],

            // 🏛 Historical Sites
            ['country' => 'Italy', 'name' => 'Colosseum', 'description' => 'Ancient Roman amphitheatre and architectural wonder.', 'big_description' => 'Located in the heart of Rome, the Colosseum is a symbol of ancient Rome’s power and ingenuity, once hosting gladiatorial contests and public spectacles.', 'corednets' => '41.8902, 12.4922', 'rating' => 4.8, 'category_id' => $historicalDest->id],
            ['country' => 'Egypt', 'name' => 'Pyramids of Giza', 'description' => 'Ancient pyramids that define Egypt’s rich history.', 'big_description' => 'The Giza pyramid complex is one of the Seven Wonders of the Ancient World, attracting millions to marvel at its scale and mystery.', 'corednets' => '29.9792, 31.1342', 'rating' => 4.8, 'category_id' => $historicalDest->id],
            ['country' => 'India', 'name' => 'Taj Mahal', 'description' => 'Marble mausoleum symbolizing eternal love.', 'big_description' => 'Built by Emperor Shah Jahan in memory of his wife Mumtaz Mahal, the Taj Mahal is one of the world’s greatest architectural masterpieces.', 'corednets' => '27.1751, 78.0421', 'rating' => 4.9, 'category_id' => $historicalDest->id],
            ['country' => 'United Kingdom', 'name' => 'Stonehenge', 'description' => 'Prehistoric stone circle in Wiltshire.', 'big_description' => 'A mysterious circle of massive stones, thought to be an ancient astronomical monument.', 'corednets' => '51.1789, -1.8262', 'rating' => 4.7, 'category_id' => $historicalDest->id],
            ['country' => 'Peru', 'name' => 'Machu Picchu', 'description' => 'Incan citadel in the Andes.', 'big_description' => 'A UNESCO World Heritage Site, Machu Picchu is an ancient city built high in the Andes Mountains, accessible by scenic hikes.', 'corednets' => '-13.1631, -72.5450', 'rating' => 4.9, 'category_id' => $historicalDest->id],
            ['country' => 'Mexico', 'name' => 'Chichen Itza', 'description' => 'Ancient Mayan pyramid complex.', 'big_description' => 'One of the New Seven Wonders of the World, Chichen Itza showcases the grandeur of Mayan civilization.', 'corednets' => '20.6843, -88.5678', 'rating' => 4.8, 'category_id' => $historicalDest->id],
            ['country' => 'Jordan', 'name' => 'Petra', 'description' => 'Ancient city carved into rose-red cliffs.', 'big_description' => 'Petra, known as the “Rose City,” is one of the most impressive archaeological sites in the world.', 'corednets' => '30.3285, 35.4444', 'rating' => 4.9, 'category_id' => $historicalDest->id],

            // 🏙 Urban Destinations
            ['country' => 'France', 'name' => 'Eiffel Tower', 'description' => 'Iconic Parisian iron tower offering panoramic city views.', 'big_description' => 'The Eiffel Tower, built in 1889, stands as one of the world’s most recognizable landmarks. Visitors can ascend for breathtaking views of Paris and its romantic skyline.', 'corednets' => '48.8584, 2.2945', 'rating' => 4.9, 'category_id' => $urbanDest->id],
            ['country' => 'Brazil', 'name' => 'Christ the Redeemer', 'description' => 'Iconic statue overlooking Rio de Janeiro.', 'big_description' => 'Standing atop Mount Corcovado, Christ the Redeemer symbolizes peace and faith, offering breathtaking panoramic views of Rio.', 'corednets' => '-22.9519, -43.2105', 'rating' => 4.8, 'category_id' => $urbanDest->id],
            ['country' => 'USA', 'name' => 'Statue of Liberty', 'description' => 'Icon of freedom in New York Harbor.', 'big_description' => 'Gifted by France, the Statue of Liberty is a global symbol of democracy and hope.', 'corednets' => '40.6892, -74.0445', 'rating' => 4.8, 'category_id' => $urbanDest->id],
            ['country' => 'United Arab Emirates', 'name' => 'Burj Khalifa', 'description' => 'World’s tallest building in Dubai.', 'big_description' => 'Rising 828 meters, the Burj Khalifa defines Dubai’s skyline and offers an observation deck with sweeping views.', 'corednets' => '25.1972, 55.2744', 'rating' => 4.9, 'category_id' => $urbanDest->id],
            ['country' => 'Spain', 'name' => 'Sagrada Família', 'description' => 'Gaudí’s masterpiece in Barcelona.', 'big_description' => 'A basilica under construction for over a century, blending Gothic and Art Nouveau styles.', 'corednets' => '41.4036, 2.1744', 'rating' => 4.9, 'category_id' => $urbanDest->id],
            
            // =====================
            // 🇦🇺 AUSTRALIA
            // =====================

            // 🌆 Urban Destinations
            ['country' => 'Australia', 'name' => 'Sydney Opera House', 'description' => 'Famous performing arts venue and architectural masterpiece.', 'big_description' => 'The Sydney Opera House, a UNESCO World Heritage Site, combines modern architecture with cultural vibrancy, hosting thousands of performances yearly.', 'corednets' => '-33.8568, 151.2153', 'rating' => 4.9, 'images' => ['https://upload.wikimedia.org/wikipedia/commons/a/a0/Sydney_Australia._%2821339175489%29.jpg', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/13/93/a7/be/sydney-opera-house.jpg?w=900&h=500&s=1', 'https://ychef.files.bbci.co.uk/1280x720/p0gp95cq.jpg', 'https://i2.wp.com/dancemagazine.com.au/wp-content/uploads/2018/06/Sydney-Opera-House.jpg?fit=800%2C533&ssl=1', 'https://www.arup.com/globalassets/images/projects/s/sydney-opera-house-concert-hall-renewal/the-revamped-concert-hall-hero.jpg', 'https://media.timeout.com/images/106138226/750/422/image.jpg', 'https://cdn.britannica.com/85/95085-050-C749819D/Sydney-Opera-House-Bennelong-Point-Port-Jackson.jpg'], 'category_id' => $urbanDest->id],
            ['country' => 'Australia', 'name' => 'Melbourne Federation Square', 'description' => 'Cultural and architectural hub in Melbourne.', 'big_description' => 'Federation Square hosts galleries, restaurants, and events, showcasing Melbourne’s modern city life.', 'corednets' => '-37.8179, 144.9691', 'rating' => 4.7, 'images' => ['https://dynamic-media-cdn.tripadvisor.com/media/photo-o/16/75/b3/b3/glorious-fed-square.jpg?w=1200&h=-1&s=1'], 'category_id' => $urbanDest->id],
            ['country' => 'Australia', 'name' => 'Brisbane South Bank', 'description' => 'Vibrant riverside area with entertainment and art.', 'big_description' => 'South Bank features parklands, markets, museums, and riverside walks in the heart of Brisbane.', 'corednets' => '-27.4811, 153.0235', 'rating' => 4.7, 'images' => ['https://www.queensland.com/au/en/places-to-see/destinations/brisbane/south-bank.thumb.800.480.png'], 'category_id' => $urbanDest->id],
            ['country' => 'Australia', 'name' => 'Perth Elizabeth Quay', 'description' => 'Modern waterfront precinct.', 'big_description' => 'Elizabeth Quay offers restaurants, public art, and scenic views of Perth’s skyline.', 'corednets' => '-31.9593, 115.8605', 'rating' => 4.6, 'images' => ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQU_jY5hpvsd0jcGZcNVd6ds3FLek2zXMN8Q&s'], 'category_id' => $urbanDest->id],
            ['country' => 'Australia', 'name' => 'Darling Harbour', 'description' => 'Entertainment district in Sydney.', 'big_description' => 'Darling Harbour is home to the aquarium, museums, and vibrant nightlife.', 'corednets' => '-33.8711, 151.1986', 'rating' => 4.8, 'images' => ['https://www.sydney.com/sites/sydney/files/styles/open_graph/public/2025-07/183145%20-%20Vivid%20Sydney%20-%20Sofitel%20Sydney%20-%20Darling%20Harbour%20%20-%20DNSW_DT.jpg?itok=hiXiTN-F'], 'category_id' => $urbanDest->id],
            ['country' => 'Australia', 'name' => 'Adelaide Central Market', 'description' => 'Historic indoor food market.', 'big_description' => 'Adelaide Central Market offers local produce, gourmet food, and multicultural cuisine.', 'corednets' => '-34.9292, 138.5977', 'rating' => 4.8, 'images' => ['https://adelaidecentralmarket.com.au/site/wp-content/uploads/2024/09/H-Trumble_ACMarkets_001.jpg'], 'category_id' => $urbanDest->id],
            ['country' => 'Australia', 'name' => 'Canberra City Centre', 'description' => 'Modern urban hub and political capital.', 'big_description' => 'The City Centre offers museums, galleries, and modern urban design around Lake Burley Griffin.', 'corednets' => '-35.2810, 149.1287', 'rating' => 4.6, 'images' => ['https://wave.com.au/hubfs/Imported_Blog_Media/Untitled-design-6__FillWzEyMDAsNjc1XQ_png.webp'], 'category_id' => $urbanDest->id],
            ['country' => 'Australia', 'name' => 'Gold Coast Surfers Paradise', 'description' => 'Coastal urban district with skyscrapers and beaches.', 'big_description' => 'Surfers Paradise blends beach life with nightlife, restaurants, and entertainment.', 'corednets' => '-28.0027, 153.4290', 'rating' => 4.7, 'images' => ['https://www.agoda.com/wp-content/uploads/2020/08/Surfers-Paradise-things-to-do-in-Gold-Coast-Australia.jpg'], 'category_id' => $urbanDest->id],
            ['country' => 'Australia', 'name' => 'Hobart Waterfront', 'description' => 'Historic yet modern harbor area.', 'big_description' => 'Hobart’s Waterfront mixes historic architecture with trendy restaurants and galleries.', 'corednets' => '-42.8819, 147.3311', 'rating' => 4.7, 'images' => ['https://images.squarespace-cdn.com/content/v1/5a9f58c3cc8fed651cb77596/1628474303702-PV445W2ZI98BAYUZB2GD/Mures+Exterior+%282%29.jpg'], 'category_id' => $urbanDest->id],
            ['country' => 'Australia', 'name' => 'Newcastle Foreshore', 'description' => 'Coastal promenade with cafes and ocean views.', 'big_description' => 'The Foreshore offers modern public spaces overlooking Newcastle’s beaches and harbor.', 'corednets' => '-32.9267, 151.7817', 'rating' => 4.6, 'images' => ['https://movetonewcastle.com.au/getmedia/ca032c2c-7d67-4d84-a9b7-ec1df74cc582/Article_LIVE_aninclusiveplace.jpg'], 'category_id' => $urbanDest->id],

            // 🏛 Historical Sites
            ['country' => 'Australia', 'name' => 'Port Arthur Historic Site', 'description' => 'Former penal settlement and UNESCO site.', 'big_description' => 'Port Arthur offers insights into Australia’s convict history with preserved ruins and museums.', 'corednets' => '-43.1480, 147.8494', 'rating' => 4.8, 'category_id' => $historicalDest->id],
            ['country' => 'Australia', 'name' => 'Old Melbourne Gaol', 'description' => 'Historic 19th-century prison museum.', 'big_description' => 'Once housing infamous criminals, the Old Melbourne Gaol now serves as a fascinating heritage museum.', 'corednets' => '-37.8080, 144.9641', 'rating' => 4.7, 'category_id' => $historicalDest->id],
            ['country' => 'Australia', 'name' => 'Hyde Park Barracks', 'description' => 'Colonial-era convict site in Sydney.', 'big_description' => 'This UNESCO-listed site showcases early colonial life and the history of transported convicts.', 'corednets' => '-33.8696, 151.2112', 'rating' => 4.7, 'category_id' => $historicalDest->id],
            ['country' => 'Australia', 'name' => 'Fremantle Prison', 'description' => 'World Heritage convict site.', 'big_description' => 'Built by convicts in the 1850s, Fremantle Prison is one of Western Australia’s most visited historic attractions.', 'corednets' => '-32.0551, 115.7480', 'rating' => 4.8, 'category_id' => $historicalDest->id],
            ['country' => 'Australia', 'name' => 'Old Parliament House', 'description' => 'Museum of Australian Democracy.', 'big_description' => 'Former home of Australia’s Parliament, showcasing the evolution of democracy in the country.', 'corednets' => '-35.3075, 149.1289', 'rating' => 4.6, 'category_id' => $historicalDest->id],
            ['country' => 'Australia', 'name' => 'The Rocks', 'description' => 'Historic district in Sydney.', 'big_description' => 'Sydney’s oldest neighborhood with cobblestone streets, pubs, and colonial architecture.', 'corednets' => '-33.8599, 151.2092', 'rating' => 4.7, 'category_id' => $historicalDest->id],
            ['country' => 'Australia', 'name' => 'Battery Point', 'description' => 'Historic maritime suburb of Hobart.', 'big_description' => 'A charming area filled with colonial cottages and heritage-listed architecture.', 'corednets' => '-42.8918, 147.3303', 'rating' => 4.7, 'category_id' => $historicalDest->id],
            ['country' => 'Australia', 'name' => 'Eureka Stockade Memorial', 'description' => 'Site of the 1854 miners’ rebellion.', 'big_description' => 'Located in Ballarat, this site commemorates the Eureka Rebellion, a key event in Australia’s democratic history.', 'corednets' => '-37.5634, 143.8685', 'rating' => 4.6, 'category_id' => $historicalDest->id],
            ['country' => 'Australia', 'name' => 'Parramatta Old Government House', 'description' => 'Oldest surviving public building in Australia.', 'big_description' => 'Built in 1799, this Georgian mansion served as the residence of early colonial governors.', 'corednets' => '-33.8120, 151.0000', 'rating' => 4.7, 'category_id' => $historicalDest->id],
            ['country' => 'Australia', 'name' => 'Castlemaine Historic District', 'description' => 'Gold Rush heritage town.', 'big_description' => 'Castlemaine’s preserved 1850s architecture tells the story of Australia’s gold mining era.', 'corednets' => '-37.0678, 144.2161', 'rating' => 4.7, 'category_id' => $historicalDest->id],

            // 🌄 Natural Landmarks
            ['country' => 'Australia', 'name' => 'Great Barrier Reef', 'description' => 'World’s largest coral reef system.', 'big_description' => 'Stretching over 2,300 kilometers, the Great Barrier Reef is home to vibrant marine life and coral gardens.', 'corednets' => '-18.2871, 147.6992', 'rating' => 4.9, 'category_id' => $naturalDest->id],
            ['country' => 'Australia', 'name' => 'Uluru (Ayers Rock)', 'description' => 'Massive sandstone monolith.', 'big_description' => 'Uluru is sacred to Indigenous Australians and glows beautifully during sunrise and sunset.', 'corednets' => '-25.3444, 131.0369', 'rating' => 4.8, 'category_id' => $naturalDest->id],
            ['country' => 'Australia', 'name' => 'Daintree Rainforest', 'description' => 'Ancient tropical rainforest in Queensland.', 'big_description' => 'One of the oldest rainforests on Earth, teeming with unique flora and fauna.', 'corednets' => '-16.1717, 145.4185', 'rating' => 4.9, 'category_id' => $naturalDest->id],
            ['country' => 'Australia', 'name' => 'Twelve Apostles', 'description' => 'Limestone stacks along the Great Ocean Road.', 'big_description' => 'These dramatic cliffs and sea stacks are one of Australia’s most iconic coastal sights.', 'corednets' => '-38.6655, 143.1046', 'rating' => 4.8, 'category_id' => $naturalDest->id],
            ['country' => 'Australia', 'name' => 'Kakadu National Park', 'description' => 'Vast wilderness with Aboriginal rock art.', 'big_description' => 'Kakadu blends wetlands, cliffs, and cultural heritage, showcasing Australia’s natural diversity.', 'corednets' => '-12.7200, 132.5300', 'rating' => 4.9, 'category_id' => $naturalDest->id],                
            ['country' => 'Australia', 'name' => 'Cradle Mountain', 'description' => 'Iconic peak in Tasmania.', 'big_description' => 'A favorite hiking destination surrounded by glacial lakes and alpine scenery.', 'corednets' => '-41.6333, 145.9333', 'rating' => 4.8, 'category_id' => $naturalDest->id],
            ['country' => 'Australia', 'name' => 'Blue Mountains', 'description' => 'Scenic region west of Sydney.', 'big_description' => 'Known for the Three Sisters rock formation and eucalyptus forests, it’s a hiker’s paradise.', 'corednets' => '-33.7182, 150.3070', 'rating' => 4.8, 'category_id' => $naturalDest->id],
            ['country' => 'Australia', 'name' => 'Fraser Island', 'description' => 'World’s largest sand island.', 'big_description' => 'Fraser Island features rainforests, dunes, and freshwater lakes all set on sand.', 'corednets' => '-25.2167, 153.1333', 'rating' => 4.9, 'category_id' => $naturalDest->id],
            ['country' => 'Australia', 'name' => 'The Pinnacles Desert', 'description' => 'Limestone formations in Nambung National Park.', 'big_description' => 'The Pinnacles’ unique rock spires rise from yellow sands, creating a surreal landscape.', 'corednets' => '-30.6000, 115.1667', 'rating' => 4.7, 'category_id' => $naturalDest->id],
            ['country' => 'Australia', 'name' => 'Grampians National Park', 'description' => 'Mountain range in Victoria.', 'big_description' => 'Known for sandstone peaks, waterfalls, and Aboriginal rock art.', 'corednets' => '-37.1333, 142.5167', 'rating' => 4.8, 'category_id' => $naturalDest->id],
            

            // =====================
            // 🇨🇳 CHINA
            // =====================

            // 🌆 Urban Destinations
            ['country' => 'China', 'name' => 'Shanghai Skyline', 'description' => 'Modern skyscraper cluster on the Huangpu River.', 'big_description' => 'Shanghai’s futuristic skyline, featuring the Oriental Pearl and Shanghai Tower, defines China’s modernization.', 'corednets' => '31.2304, 121.4737', 'rating' => 4.8, 'category_id' => $urbanDest->id],
            ['country' => 'China', 'name' => 'Beijing Sanlitun', 'description' => 'Trendy nightlife and shopping district.', 'big_description' => 'Sanlitun offers high-end malls, bars, and international dining in the heart of Beijing.', 'corednets' => '39.9375, 116.4563', 'rating' => 4.6, 'category_id' => $urbanDest->id],
            ['country' => 'China', 'name' => 'Shenzhen Futian District', 'description' => 'Modern business and tech center.', 'big_description' => 'Futian represents China’s innovation hub with skyscrapers and technology centers.', 'corednets' => '22.5333, 114.0833', 'rating' => 4.7, 'category_id' => $urbanDest->id],
            ['country' => 'China', 'name' => 'Guangzhou Canton Tower', 'description' => 'Iconic observation tower.', 'big_description' => 'Canton Tower is one of the world’s tallest structures, offering panoramic views of Guangzhou.', 'corednets' => '23.1065, 113.3249', 'rating' => 4.8, 'category_id' => $urbanDest->id],
            ['country' => 'China', 'name' => 'Chongqing Hongya Cave', 'description' => 'Multi-level cliffside complex.', 'big_description' => 'Hongya Cave blends restaurants and shops within traditional architecture overlooking the river.', 'corednets' => '29.5620, 106.5739', 'rating' => 4.7, 'category_id' => $urbanDest->id],
            ['country' => 'China', 'name' => 'Hangzhou West Lake Cultural Plaza', 'description' => 'Modern shopping and art area.', 'big_description' => 'This urban area mixes museums, theaters, and modern city life near scenic West Lake.', 'corednets' => '30.2531, 120.1654', 'rating' => 4.6, 'category_id' => $urbanDest->id],
            ['country' => 'China', 'name' => 'Suzhou Industrial Park', 'description' => 'Modern urban district with canals and gardens.', 'big_description' => 'A model of modern Chinese development, balancing urban life with traditional water-town design.', 'corednets' => '31.3043, 120.6260', 'rating' => 4.6, 'category_id' => $urbanDest->id],
            ['country' => 'China', 'name' => 'Tianjin Binhai District', 'description' => 'Modern coastal urban zone.', 'big_description' => 'Binhai is a hub for futuristic architecture, including the Tianjin Eye and eco-cities.', 'corednets' => '39.1239, 117.1981', 'rating' => 4.6, 'category_id' => $urbanDest->id],
            ['country' => 'China', 'name' => 'Chengdu Taikoo Li', 'description' => 'Luxury open-air shopping district.', 'big_description' => 'Taikoo Li combines ancient temple architecture with modern boutiques in central Chengdu.', 'corednets' => '30.6581, 104.0800', 'rating' => 4.7, 'category_id' => $urbanDest->id],
            ['country' => 'China', 'name' => 'Nanjing Road, Shanghai', 'description' => 'Famous shopping street.', 'big_description' => 'One of the world’s busiest retail streets, blending classic architecture with modern shops.', 'corednets' => '31.2372, 121.4822', 'rating' => 4.8, 'category_id' => $urbanDest->id],

            // 🏛 Historical Sites
            ['country' => 'China', 'name' => 'Great Wall of China', 'description' => 'Historic fortification stretching across northern China.', 'big_description' => 'An ancient defense structure spanning thousands of kilometers, symbolizing Chinese resilience.', 'corednets' => '40.4319, 116.5704', 'rating' => 4.9, 'images' => ['https://upload.wikimedia.org/wikipedia/commons/2/23/The_Great_Wall_of_China_at_Jinshanling-edit.jpg', 'https://i.natgeofe.com/n/20e923d3-042c-4045-942a-52308add6a75/great-wall-unesco-china.jpg', 'https://www.tripsavvy.com/thmb/S6Daq_joeyN3xU0Bz3Qt7QGe0YM=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-654013042-28f42fc82c544a9fb0f74458b85de713.jpg', 'https://www.travelandleisure.com/thmb/b2-ee45Q1DEjuzOa51XLhJ7Rfmc=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/great-wall-china-tourists-GWOC0417-10bddbf0783644c386178f62117b2132.jpg', 'https://d3hne3c382ip58.cloudfront.net/files/uploads/bookmundi/resized/cmsfeatured/visiting-the-great-wall-of-china-featured-image-1560845062-785X440.jpg', 'https://historyforkids.org/wp-content/uploads/2020/11/great_wall_of_china_china_wall-1024x768.jpg', 'https://www.thoughtco.com/thmb/y2yphoYGkvjdV1JcVfGFJucHK1E=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/inigoarza-5c72cffe46e0fb0001b68224.jpg'], 'category_id' => $historicalDest->id],
            ['country' => 'China', 'name' => 'Forbidden City', 'description' => 'Imperial palace complex in Beijing.', 'big_description' => 'The Forbidden City housed emperors for centuries, showcasing traditional Chinese architecture.', 'corednets' => '39.9163, 116.3972', 'rating' => 4.9, 'images' => ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrAU3u03oQD0keAN-iq_JxEdjnA71ZFep5jg&s'], 'category_id' => $historicalDest->id],
            ['country' => 'China', 'name' => 'Temple of Heaven', 'description' => 'Ceremonial temple complex in Beijing.', 'big_description' => 'This UNESCO site was used by emperors for prayers to Heaven for good harvests.', 'corednets' => '39.8822, 116.4065', 'rating' => 4.8, 'images' => ['https://www.reviewofreligions.org/wp-content/uploads/2023/07/Temple-of-Heaven.jpg'], 'category_id' => $historicalDest->id],
            ['country' => 'China', 'name' => 'Terracotta Army', 'description' => 'Ancient clay army guarding Emperor Qin’s tomb.', 'big_description' => 'Thousands of life-sized soldiers and horses built to protect China’s first emperor.', 'corednets' => '34.3847, 109.2786', 'rating' => 4.8, 'images' => ['https://smarthistory.org/wp-content/uploads/2019/08/warriors.jpg'], 'category_id' => $historicalDest->id],
            ['country' => 'China', 'name' => 'Summer Palace', 'description' => 'Imperial garden retreat in Beijing.', 'big_description' => 'A masterpiece of Chinese landscape design with lakes, gardens, and palaces.', 'corednets' => '39.9996, 116.2755', 'rating' => 4.8, 'images' => ['https://cdn.britannica.com/58/252558-050-A8CA20B0/The-Summer-Palace-Beijing-China.jpg'], 'category_id' => $historicalDest->id],
            ['country' => 'China', 'name' => 'Pingyao Ancient City', 'description' => 'Well-preserved walled town.', 'big_description' => 'A UNESCO World Heritage site featuring Ming and Qing dynasty architecture.', 'corednets' => '37.2010, 112.1757', 'rating' => 4.7, 'images' => ['https://upload.wikimedia.org/wikipedia/commons/7/74/Pingyao-oldtown.jpg'], 'category_id' => $historicalDest->id],
            ['country' => 'China', 'name' => 'Mogao Caves', 'description' => 'Buddhist cave art site in Dunhuang.', 'big_description' => 'Contains thousands of ancient murals and sculptures dating back over 1,000 years.', 'corednets' => '40.0451, 94.8120', 'rating' => 4.9, 'images' => ['https://www.remotelands.com/travelogues/app/uploads/2020/01/shutterstock_189889142-1280x640.jpg'], 'category_id' => $historicalDest->id],
            ['country' => 'China', 'name' => 'Potala Palace', 'description' => 'Former residence of the Dalai Lama in Tibet.', 'big_description' => 'A stunning fortress-like palace blending religion, art, and history in Lhasa.', 'corednets' => '29.6578, 91.1169', 'rating' => 4.9, 'images' => ['https://whc.unesco.org/uploads/thumbs/site_0707_0001-1200-630-20110920202629.jpg'], 'category_id' => $historicalDest->id],
            ['country' => 'China', 'name' => 'Leshan Giant Buddha', 'description' => 'World’s largest stone Buddha statue.', 'big_description' => 'Carved out of a cliff, this 71-meter statue overlooks the confluence of three rivers.', 'corednets' => '29.5522, 103.7695', 'rating' => 4.8, 'images' => ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU52HIdfj8aXjqFhI4-dKNUwoyFaAaJxZEtw&s'], 'category_id' => $historicalDest->id],
            ['country' => 'China', 'name' => 'Xi’an City Wall', 'description' => 'Ancient fortification surrounding Xi’an.', 'big_description' => 'One of the oldest and best-preserved city walls in China.', 'corednets' => '34.2669, 108.9470', 'rating' => 4.7, 'images' => ['https://www.wendywutours.co.uk/resource/upload/794/banner-xian-walls.jpg.webp'], 'category_id' => $historicalDest->id],

            // 🌄 Natural Landmarks
            ['country' => 'China', 'name' => 'Zhangjiajie National Forest Park', 'description' => 'Famous for its towering sandstone pillars.', 'big_description' => 'These surreal landscapes inspired the floating mountains in the movie Avatar.', 'corednets' => '29.3344, 110.4790', 'rating' => 4.9, 'category_id' => $naturalDest->id],
            ['country' => 'China', 'name' => 'Jiuzhaigou Valley', 'description' => 'Colorful lakes and waterfalls in Sichuan.', 'big_description' => 'A UNESCO World Heritage site known for turquoise pools and snow-capped peaks.', 'corednets' => '33.2581, 103.9180', 'rating' => 4.9, 'category_id' => $naturalDest->id],
            ['country' => 'China', 'name' => 'Yellow Mountain (Huangshan)', 'description' => 'Granite peaks shrouded in mist.', 'big_description' => 'A national symbol of natural beauty, Huangshan is famed for its unique rock formations.', 'corednets' => '30.1328, 118.1668', 'rating' => 4.8, 'category_id' => $naturalDest->id],
            ['country' => 'China', 'name' => 'Guilin Karst Mountains', 'description' => 'Limestone peaks along the Li River.', 'big_description' => 'These stunning karst landscapes have inspired countless Chinese paintings.', 'corednets' => '25.2736, 110.2900', 'rating' => 4.9, 'category_id' => $naturalDest->id],
            ['country' => 'China', 'name' => 'Mount Everest (Tibet side)', 'description' => 'World’s highest peak.', 'big_description' => 'The Tibetan base camp offers views of Mount Everest from China’s side of the Himalayas.', 'corednets' => '28.0026, 86.8528', 'rating' => 5.0, 'category_id' => $naturalDest->id],
            ['country' => 'China', 'name' => 'Tiger Leaping Gorge', 'description' => 'Deep canyon on the Jinsha River.', 'big_description' => 'One of the deepest gorges in the world, offering breathtaking hiking trails.', 'corednets' => '27.1953, 100.0786', 'rating' => 4.8, 'category_id' => $naturalDest->id],
            ['country' => 'China', 'name' => 'Mount Emei', 'description' => 'Sacred Buddhist mountain.', 'big_description' => 'A UNESCO site known for temples, monkeys, and panoramic views above the clouds.', 'corednets' => '29.5233, 103.3325', 'rating' => 4.8, 'category_id' => $naturalDest->id],
            ['country' => 'China', 'name' => 'Qinghai Lake', 'description' => 'Largest saltwater lake in China.', 'big_description' => 'A serene natural attraction surrounded by grasslands and snow-capped mountains.', 'corednets' => '36.9920, 99.7167', 'rating' => 4.7, 'category_id' => $naturalDest->id],
            ['country' => 'China', 'name' => 'Rainbow Mountains (Zhangye Danxia)', 'description' => 'Colorful layered rock formations.', 'big_description' => 'A geological wonder featuring striped, rainbow-colored mountains.', 'corednets' => '38.9170, 100.1235', 'rating' => 4.9, 'category_id' => $naturalDest->id],
            ['country' => 'China', 'name' => 'Mount Tai', 'description' => 'One of China’s Five Great Mountains.', 'big_description' => 'A sacred site with ancient temples and stone carvings, offering sweeping views.', 'corednets' => '36.2574, 117.0992', 'rating' => 4.8, 'category_id' => $naturalDest->id],


            // =====================
            // 🇦🇹 AUSTRIA
            // =====================

            // 🌆 Urban Destinations
            ['country' => 'Austria', 'name' => 'Vienna State Opera', 'description' => 'Historic opera house and cultural landmark.', 'big_description' => 'One of the most prestigious opera houses in the world, hosting international performances.', 'corednets' => '48.2028, 16.3695', 'rating' => 4.8, 'category_id' => $urbanDest->id],
            ['country' => 'Austria', 'name' => 'Stephansplatz', 'description' => 'Vienna’s main city square.', 'big_description' => 'Home to St. Stephen’s Cathedral and vibrant city life at the heart of Vienna.', 'corednets' => '48.2082, 16.3738', 'rating' => 4.8, 'category_id' => $urbanDest->id],
            ['country' => 'Austria', 'name' => 'Salzburg Old Town', 'description' => 'Baroque urban center and birthplace of Mozart.', 'big_description' => 'A UNESCO site filled with music, architecture, and culture.', 'corednets' => '47.7982, 13.0465', 'rating' => 4.9, 'category_id' => $urbanDest->id],
            ['country' => 'Austria', 'name' => 'Graz Hauptplatz', 'description' => 'Central square with historic buildings.', 'big_description' => 'Graz’s main square surrounded by cafés, statues, and medieval architecture.', 'corednets' => '47.0707, 15.4395', 'rating' => 4.7, 'category_id' => $urbanDest->id],
            ['country' => 'Austria', 'name' => 'Linz Ars Electronica Center', 'description' => 'Museum of technology and art.', 'big_description' => 'This futuristic building showcases digital innovation and art exhibitions.', 'corednets' => '48.3096, 14.2858', 'rating' => 4.6, 'category_id' => $urbanDest->id],
            ['country' => 'Austria', 'name' => 'Vienna MuseumsQuartier', 'description' => 'Cultural complex in Vienna.', 'big_description' => 'Home to major museums, contemporary art, and urban culture.', 'corednets' => '48.2034, 16.3599', 'rating' => 4.8, 'category_id' => $urbanDest->id],
            ['country' => 'Austria', 'name' => 'Klagenfurt Old Town', 'description' => 'Historic city center with cafes.', 'big_description' => 'Features Renaissance buildings, cozy streets, and the Lindwurm fountain.', 'corednets' => '46.6230, 14.3070', 'rating' => 4.6, 'category_id' => $urbanDest->id],
            ['country' => 'Austria', 'name' => 'Innsbruck City Center', 'description' => 'Vibrant alpine city hub.', 'big_description' => 'Combines medieval charm with modern shopping streets and mountain views.', 'corednets' => '47.2692, 11.4041', 'rating' => 4.7, 'category_id' => $urbanDest->id],
            ['country' => 'Austria', 'name' => 'Bregenz Lakeside Promenade', 'description' => 'Cultural hub by Lake Constance.', 'big_description' => 'Hosts the annual Bregenz Festival and stunning lakefront architecture.', 'corednets' => '47.5031, 9.7471', 'rating' => 4.7, 'category_id' => $urbanDest->id],
            ['country' => 'Austria', 'name' => 'Vienna Ringstrasse', 'description' => 'Grand boulevard encircling the city center.', 'big_description' => 'Lined with palaces, museums, and the Austrian Parliament, symbolizing imperial grandeur.', 'corednets' => '48.2085, 16.3730', 'rating' => 4.9, 'category_id' => $urbanDest->id],

            // 🏛 Historical Sites
            ['country' => 'Austria', 'name' => 'Schönbrunn Palace', 'description' => 'Baroque palace and former imperial residence.', 'big_description' => 'A UNESCO World Heritage Site featuring lavish interiors and gardens.', 'corednets' => '48.1845, 16.3122', 'rating' => 4.9, 'images' => ['https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1c/2d/28/e4/wwwschoenbrunnat.jpg?w=900&h=500&s=1'], 'category_id' => $historicalDest->id],
            ['country' => 'Austria', 'name' => 'Hofburg Palace', 'description' => 'Imperial palace in central Vienna.', 'big_description' => 'Former seat of the Habsburg dynasty, now home to museums and the Austrian president.', 'corednets' => '48.2066, 16.3656', 'rating' => 4.9, 'images' => ['https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Wien_-_Neue_Hofburg.JPG/1200px-Wien_-_Neue_Hofburg.JPG'], 'category_id' => $historicalDest->id],
            ['country' => 'Austria', 'name' => 'Belvedere Palace', 'description' => 'Historic baroque palace complex.', 'big_description' => 'Houses Austrian art masterpieces including Klimt’s "The Kiss".', 'corednets' => '48.1910, 16.3800', 'rating' => 4.9, 'images' => ['https://secretvienna.org/wp-content/uploads/2022/07/1024px-Wien_-_Schloss_Belvedere_oberes_1.jpg'], 'category_id' => $historicalDest->id],
            ['country' => 'Austria', 'name' => 'Melk Abbey', 'description' => 'Benedictine monastery overlooking the Danube.', 'big_description' => 'A masterpiece of baroque architecture with stunning interiors.', 'corednets' => '48.2273, 15.3316', 'rating' => 4.8, 'images' => ['https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/0a/ac/46/4d.jpg'], 'category_id' => $historicalDest->id],
            ['country' => 'Austria', 'name' => 'Hohenwerfen Castle', 'description' => 'Medieval fortress in the Alps.', 'big_description' => 'A dramatic castle used as a defensive fortress since the 11th century.', 'corednets' => '47.4826, 13.1870', 'rating' => 4.7, 'images' => ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO4D5A2H_ioKT9B2aJg5P9qi7o0vig7xyd_w&s'], 'category_id' => $historicalDest->id],
            ['country' => 'Austria', 'name' => 'St. Stephen’s Cathedral', 'description' => 'Gothic cathedral in Vienna.', 'big_description' => 'One of Europe’s most important cathedrals, symbolizing Austrian heritage.', 'corednets' => '48.2086, 16.3730', 'rating' => 4.9, 'images' => ['https://blogofsunshine.com/wp-content/uploads/2025/06/st-stephens-cathedral-vienna-exterior.png'], 'category_id' => $historicalDest->id],
            ['country' => 'Austria', 'name' => 'Kreuzenstein Castle', 'description' => 'Restored medieval castle near Vienna.', 'big_description' => 'Combines original medieval materials with neo-Gothic architecture.', 'corednets' => '48.3775, 16.3262', 'rating' => 4.6, 'images' => ['https://365austria.com/wp-content/uploads/2024/09/IMG_1215-Burg-Kreuzenstein365-Austria-by-Paul-Weindl.jpg'], 'category_id' => $historicalDest->id],
            ['country' => 'Austria', 'name' => 'Hallstatt Village', 'description' => 'Ancient lakeside village.', 'big_description' => 'One of the oldest settlements in Europe, rich in salt-mining history.', 'corednets' => '47.5613, 13.6480', 'rating' => 4.9, 'images' => ['https://ychef.files.bbci.co.uk/1280x720/p08fq4z7.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLaMeMrtzss7tfu_1fN33UOOJpYaGRb2ATkA&s', 'https://www.travelyesplease.com/wp-content/uploads/2014/03/IMG_9276-Edit-2.jpg', 'https://www.travelyesplease.com/wp-content/uploads/2014/03/IMG_9285-Edit.jpg', 'https://imageio.forbes.com/specials-images/imageserve/6553162485eb96bca9e43975/0x0.jpg?format=jpg&height=600&width=1200&fit=bounds', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpTIei5RnuDAa3WMgSUOdrLWcMZulfVqMCAw&s', 'https://www.hallstatt.net/assets/Hallstatt/Artikel/ueber-hallstatt/6-goisern-classic/hallstatt-diverse-holder-einstieg/_resampled/CroppedFocusedImageWzgwMCw0NTAsInkiLDQyXQ/hallstatt-muellerstiege-01.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjVUFeVU0IIjnnpPZYAtYeUO1vZiZhsyorPQ&s', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/1_hallstatt_austria.jpg/250px-1_hallstatt_austria.jpg'], 'category_id' => $historicalDest->id],
            ['country' => 'Austria', 'name' => 'Eisriesenwelt Ice Cave', 'description' => 'World’s largest ice cave.', 'big_description' => 'Discovered in 1879, this natural wonder blends geology and myth.', 'corednets' => '47.5015, 13.1911', 'rating' => 4.8, 'images' => ['https://www.eisriesenwelt.at/fileadmin/_processed_/4/2/csm_01_Kombiticket_6a7374cf97.jpg'], 'category_id' => $historicalDest->id],
            ['country' => 'Austria', 'name' => 'Wachau Valley', 'description' => 'Historic valley along the Danube.', 'big_description' => 'Filled with castles, monasteries, and vineyards, it’s a cultural and historical gem.', 'corednets' => '48.3650, 15.4199', 'rating' => 4.8, 'images' => ['https://fuutazbsb.filerobot.com/Freigegeben/Weinberge-in-der-Wachau_OeWM-Oesterreich-Wein-Marketing-GmbH_WSNA.jpeg'], 'category_id' => $historicalDest->id],

            // 🌄 Natural Landmarks
            ['country' => 'Austria', 'name' => 'Grossglockner', 'description' => 'Austria’s highest mountain.', 'big_description' => 'An alpine paradise popular for hiking and scenic drives.', 'corednets' => '47.0745, 12.6934', 'rating' => 4.9, 'category_id' => $naturalDest->id],
            ['country' => 'Austria', 'name' => 'Krimml Waterfalls', 'description' => 'One of Europe’s tallest waterfalls.', 'big_description' => 'A breathtaking three-tier cascade located in the Hohe Tauern National Park.', 'corednets' => '47.2030, 12.1803', 'rating' => 4.9, 'category_id' => $naturalDest->id],
            ['country' => 'Austria', 'name' => 'Lake Wolfgang', 'description' => 'Crystal-clear alpine lake.', 'big_description' => 'A serene destination surrounded by mountains and charming lakeside towns.', 'corednets' => '47.7388, 13.4469', 'rating' => 4.8, 'category_id' => $naturalDest->id],
            ['country' => 'Austria', 'name' => 'Dachstein Glacier', 'description' => 'Massive glacier with ice caves.', 'big_description' => 'Offers panoramic views from suspension bridges and ice palace tours.', 'corednets' => '47.4750, 13.6197', 'rating' => 4.8, 'category_id' => $naturalDest->id],
            ['country' => 'Austria', 'name' => 'Zell am See', 'description' => 'Mountain town beside a lake.', 'big_description' => 'Famous for skiing, hiking, and its picture-perfect alpine scenery.', 'corednets' => '47.3254, 12.7989', 'rating' => 4.9, 'category_id' => $naturalDest->id],
            ['country' => 'Austria', 'name' => 'Alpbach Valley', 'description' => 'Idyllic mountain village.', 'big_description' => 'Voted one of Austria’s most beautiful villages, surrounded by alpine meadows.', 'corednets' => '47.3988, 11.9449', 'rating' => 4.7, 'category_id' => $naturalDest->id],
            ['country' => 'Austria', 'name' => 'Seefeld Plateau', 'description' => 'Popular for skiing and cross-country trails.', 'big_description' => 'An alpine plateau combining natural beauty with world-class winter sports.', 'corednets' => '47.3303, 11.1876', 'rating' => 4.8, 'category_id' => $naturalDest->id],
            ['country' => 'Austria', 'name' => 'Hohe Tauern National Park', 'description' => 'Austria’s largest national park.', 'big_description' => 'Home to glaciers, peaks, and diverse wildlife across multiple alpine regions.', 'corednets' => '47.1167, 12.7000', 'rating' => 4.9, 'category_id' => $naturalDest->id],
            ['country' => 'Austria', 'name' => 'Schafberg Mountain', 'description' => 'Scenic mountain with cog railway.', 'big_description' => 'Offers panoramic views of lakes and alpine peaks.', 'corednets' => '47.7764, 13.4423', 'rating' => 4.8, 'category_id' => $naturalDest->id],
            ['country' => 'Austria', 'name' => 'Lake Neusiedl', 'description' => 'Shallow steppe lake on the Hungarian border.', 'big_description' => 'A UNESCO biosphere reserve known for birdwatching and sailing.', 'corednets' => '47.8333, 16.7667', 'rating' => 4.7, 'category_id' => $naturalDest->id],
        ];

        foreach ($places as $data) {
            $country = Country::where('name', $data['country'])->first();

            if ($country) {
                $place = Places::create([
                    'country_id' => $country->id,
                    'categories_id' => $data['category_id'],
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'big_description' => $data['big_description'],
                    'corednets' => $data['corednets'],
                    'rating' => $data['rating'],
                ]);

                if (array_key_exists('images', $data)) {
                    foreach($data['images'] as $image) {
                        images::create([
                            'link' => $image,
                            'places_id' => $place->id,
                        ]);
                    }
                }

            }
        }


        //Man-Made Attractions?
    }
}
