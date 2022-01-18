<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sites')->insert([
            ['name_site' => 'Kribi Beach', 'category' => 'Beach', 'type' => 'White sand', 'region' => 'South', 'city' => 'Kribi', 'image' => 'intelligentImage\beach\Bk3.PNG', 
            'google_map' => 'https://www.google.fr/maps/search/Kribi+Beach/@2.93179,9.896364,14z/data=!3m1!4b1', 'region_id' => 17,
            'description' => 'Located on the south coast of Cameroon, Kribi beach is an ideal place to discover the local culture very focused on fishing. Many canoes are placed on
            the sand while waiting for the fishermen to use them to bring fish back to the village. It is a very wild beach with many palm trees and colas or kolas, trees
            typical of Cameroon and Africa in general. You will therefore easily find a place in the shade to rest after your walk to discover the kilometers of white sand of this sumptuous Cameroonian beach.',],
            ['name_site' => 'Grand Batanga Beach', 'category' => 'Beach', 'type' => 'Grey sand', 'region' => 'South', 'city' => 'Batanga', 'image' => 'intelligentImage\beach\Bb2.PNG', 
            'google_map' => 'https://www.google.fr/maps/search/Grand+Batanga+Beach/@2.9069937,9.8277112,12z/data=!3m1!4b1', 'region_id' => 18,
            'description' => 'Grand Batanga beach is located a few kilometers from Kribi beach. It is absolutely heavenly with its many palm trees. Stretching over several
            kilometers, Grand Batanga therefore offers many quiet corners to rest and swim. You will thus have the impression of being alone in the world,
            surrounded by wild nature and an often rough sea, but which presents no danger. A few taverns are set up on the beach for you to discover the local cuisine based on fresh fish.',],
            ['name_site' => 'Limbe Beach', 'category' => 'Beach', 'type' => 'Black sang', 'region' => 'South-West', 'city' => 'Limde', 'image' => 'intelligentImage\beach\Bl4.PNG', 
            'google_map' => 'https://www.google.fr/maps/search/Limbe+Beach/@4.024332,9.0705066,12z/data=!3m1!4b1', 'region_id' => 21,
            'description' => 'Limbe is a large beach located in the town of Limbe. It is famous for the black volcanic sand, a large number of palm trees and shrubs. There are also
            gazebos for picnics, toilets, changing rooms and garbage cans. Part of the shore is covered with rocks, but the ocean floor is still soft.',],
            ['name_site' => 'Bamoun Kingdom', 'category' => 'Chiefdom', 'type' => 'First-degree', 'region' => 'West', 'city' => 'Foumban', 'image' => 'intelligentImage\chiefdom\Cb1.PNG', 
            'google_map' => 'https://www.google.fr/maps/place/Palais+des+sultans+Bamouns/@5.7330473,10.8989712,17z/data=!3m1!4b1!4m5!3m4!1s0x10f59967d160880d:0x4eb57d33ea0f21be!8m2!3d5.7330473!4d10.9011599', 'region_id' => 26,
            'description' => 'The Bamoun kingdom, located in the mountains of western Cameroon, has forged its unity over the kingdom\'s seven centuries of existence since the end of 
            the 14th century. The king of the Bamouns is from the Nchare Yen dynasty, who came from Rifum (Mbankim). Religious beliefs in this region today are Islam from the north and Christianity from the south.',],
            ['name_site' => 'Bamendjou chiefdom', 'category' => 'Chiefdom', 'type' => 'Second degree', 'region' => 'West', 'city' => 'Bamendjou', 'image' => 'intelligentImage\chiefdom\Cb2.PNG', 
            'google_map' => 'https://www.google.fr/maps/place/Bamendjou/@5.4012464,10.2848767,13z/data=!4m5!3m4!1s0x105f96909346dc4b:0x6de761fe57873c99!8m2!3d5.4051422!4d10.3217245', 'region_id' => 27,
            'description' => 'South-west of Bafoussam in the Hauts-Plateaux department is the Bamendjou  chiefdom created in the 17th century by Fo’o Nleuc Mbah. The latter, originally from Bansoa, whose political regime he criticizes, leaves the 
            village and settles in Kouockeuh, one of the districts of Bamendjou. His majesty Rameau Jean-Philippe Tchendjou II Sokoudjou has been on the throne of Bamendjou since February 6, 1953. He succeeds Nleuc Mbah, Tselà, Mba\'a Koum, Takaà, Ta \'tedeu, Djon\' veu, Nédoum, Fgoum, Nzogatcha , Takemtè, 
            Fotsing, Takem, Tchendjou, and Tchideu. The chiefdom also has an interesting museum inaugurated in April 2009. A first part traces the history of the chiefdom, a second highlights the artistic and creative richness of the Bamendjou people. The king himself is a wood and bronze sculptor.',],
            ['name_site' => 'Bandjoun chiefdom', 'category' => 'Chiefdom', 'type' => 'First-degree', 'region' => 'West', 'city' => 'Bandjoun', 'image' => 'intelligentImage\chiefdom\Cb3.PNG', 
            'google_map' => 'https://www.google.fr/maps/search/chefferie+Bandjoun/@5.3764185,10.3922932,13z/data=!3m1!4b1', 'region_id' => 26,
            'description' => 'One of the most beautiful chiefdoms in the Bamiléké country is located in Bandjoun, about ten kilometers from Bafoussam. Bandjoun comes from the expression pe jo which means freed people. Founded in the second half of 
            the 17th century, the palace housing this chiefdom was badly damaged by a fire in 2005 The chiefdom also houses a very interesting museum made up of religion, etc. In December takes place the biggest Bandjoun festival, a 
            great moment of traditions and family reunions which return to the village for this occasion. How to get there: From Bafoussam, take the N4 towards meters after the slip road for Douala, turn right. Reproductions of traditional huts and a sign indicate the direction to take for 2 kilometers 
            to access the central alley and the main entrance.',],
            ['name_site' => 'chiefdom of Bafut', 'category' => 'Chiefdom', 'type' => 'First-degree', 'region' => 'North-West', 'city' => 'Bamenda', 'image' => 'intelligentImage\chiefdom\Cb4.PNG', 
            'google_map' => 'https://www.google.fr/maps/place/Bafut/@6.0923482,10.0373833,13z/data=!4m5!3m4!1s0x105f24d1ab1ff19f:0x52ce3ebee20bb3b6!8m2!3d6.0895579!4d10.0919243', 'region_id' => 15,
            'description' => 'The chiefdom of Bafut is one of the traditional chiefdoms in Cameroon located in the North-West region. The architectural ensemble is composed of a palace, a sacred forest adjoining the residence of the superior chief, a guest residence, places of worship, women\'s quarters and lodges of secret societies 
            located in Bamenda in the South-West region of Cameroon. It is home to the Fon family, the traditional regional authority. This Cameroonian site is inscribed on the indicative list of UNESCO World Heritage since April 18, 2006',],
            ['name_site' => 'Cameroon\'s equatorial forest', 'category' => 'Forest', 'type' => 'Equatorial', 'region' => 'South', 'city' => 'Ebolowa', 'image' => 'intelligentImage\forest\Fe1.PNG', 
            'google_map' => 'https://www.google.fr/maps/search/a+for%C3%AAt+%C3%A9quatoriale+du+sud+cameroun/@2.9239796,10.6297664,8z/data=!3m1!4b1', 'region_id' => 19,
            'description' => 'Cameroon\'s forest is the second most important forest in Africa after that of the Democratic Republic of Congo (DRC). That is to say about 22.5 million hectares. It ranks fifth in Africa in terms of biological diversity.',],
            ['name_site' => 'Hilton Yaounde hotel', 'category' => 'Hotel', 'type' => '*****', 'region' => 'Center', 'city' => 'Yaounde', 'image' => 'intelligentImage\hotel\Hy1.PNG', 
            'google_map' => 'https://www.google.fr/maps/search/hotel+hilton/@3.8564398,11.4970558,15z/data=!3m1!4b1', 'region_id' => 2,
            'description' => 'Located in the heart of downtown Yaoundé\'s business district, the Hilton Yaounde hotel is just 500 meters from the National Crafts Market.',],
            ['name_site' => 'Star Land Hotel', 'category' => 'Hotel', 'type' => '****', 'region' => 'Littoral', 'city' => 'Douala', 'image' => 'intelligentImage\hotel\Hd1.PNG', 
            'google_map' => 'https://www.google.fr/maps/place/Akwa+Palace+Douala/@4.0503156,9.693325,17z/data=!3m1!4b1!4m8!3m7!1s0x1061125e56140419:0x15b5957ad34d8474!5m2!4m1!1i2!8m2!3d4.0503156!4d9.6955137', 'region_id' => 10,
            'description' => 'Featuring free WiFi and a year-round outdoor swimming pool, Star Land Hotel offers accommodation in Douala.',],
            ['name_site' => 'Fini Hotel Bobende', 'category' => 'Hotel', 'type' => '***', 'region' => 'South-West', 'city' => 'Limbe', 'image' => 'intelligentImage\hotel\Hl1.PNG', 
            'google_map' => 'https://www.google.fr/maps/search/Fini+Hotel+Bobende/@4.0188729,9.1534343,14z/data=!3m1!4b1', 'region_id' => 22,
            'description' => 'Offering an outdoor swimming pool and a restaurant, Fini Hotel Bobende is located in Limbé. It offers free Wi-Fi.',],
            ['name_site' => 'AKWA PALACE Douala', 'category' => 'Hotel', 'type' => '****', 'region' => 'Littoral', 'city' => 'Douala', 'image' => 'intelligentImage\hotel\Hd3.PNG', 
            'google_map' => 'https://www.google.fr/maps/place/Akwa+Palace+Douala/@4.0503156,9.693325,17z/data=!3m1!4b1!4m8!3m7!1s0x1061125e56140419:0x15b5957ad34d8474!5m2!4m1!1i2!8m2!3d4.0503156!4d9.6955137', 'region_id' => 10,
            'description' => 'Offering an outdoor swimming pool, AKWA PALACE Douala is located in Douala. It offers a fitness center and a terrace. Free Wi-Fi is available.',],
            ['name_site' => 'La Vallée de Bana', 'category' => 'Hotel', 'type' => '****', 'region' => 'West', 'city' => 'Bana', 'image' => 'intelligentImage\hotel\Hb1.PNG', 
            'google_map' => 'https://www.google.fr/maps/place/La+Vall%C3%A9e+De+Bana+H%C3%B4tel/@5.1454676,10.2748267,17z/data=!3m1!4b1!4m5!3m4!1s0x105fe80a2cbd886d:0xd5627dc3eba8e8e5!8m2!3d5.1454676!4d10.2770154', 'region_id' => 28,
            'description' => 'Offering an outdoor swimming pool, spa and wellness center, La Vallée de Bana is located in Bana. Free Wi-Fi is available.',],
            ['name_site' => 'Tyson lake', 'category' => 'Lake', 'type' => 'Volcanic', 'region' => 'Adamaoua', 'city' => 'Ngaoundere', 'image' => 'intelligentImage\lake\Lty.PNG', 
            'google_map' => 'https://www.google.fr/maps/place/Lac+Tison/@7.2499998,13.5745785,15z/data=!3m1!4b1!4m5!3m4!1s0x10efe066c53d5faf:0x4e2608a03ac140b4!8m2!3d7.25!4d13.5833333', 'region_id' => 1,
            'description' => 'Located in the Adamawa region precisely in the vineyard department of Ngaoundéré, Tyson lake is a very impressive tourist site. It is then necessary to travel about 15 km from the city center of Ngaoundéré, going towards Meiganga,
            to finally arrive and contemplate this beautiful nature. This lake was born long ago following a phenomenon of volcanism which occurred in this locality. Over the years, flora and fauna have found refuge there and made this place that you touch the reality of these unforgettable moments.',],
            ['name_site' => 'Baleng lake', 'category' => 'Lake', 'type' => 'Volcanic', 'region' => 'West', 'city' => 'Baleng', 'image' => 'intelligentImage\lake\Lba.PNG', 
            'google_map' => 'https://www.google.fr/maps/place/Lac+Baleng/@5.550466,10.4201031,18z/data=!3m1!4b1!4m5!3m4!1s0x105f9b5ee10b552f:0xb6389837017c6018!8m2!3d5.5503456!4d10.4210435', 'region_id' => 29,
            'description' => 'Balent Lake is a crater lake located in the high mountainous region of western Cameroon in the Baleng chiefdom. it is located about 6 kilometers from the city center of Bafoussam. Lake Baleng is a natural heritage that attracts many
            national and foreign tourists on a daily basis. Access is via long steps, which you will have to descend to the point of arriving directly at the edge of the shore.',],
            ['name_site' => 'Nyos lake', 'category' => 'Lake', 'type' => 'Volcanic', 'region' => 'North-West', 'city' => 'Bamenda', 'image' => 'intelligentImage\lake\Lny.PNG', 
            'google_map' => 'https://www.google.fr/maps/place/Lac+Nyos/@6.4379326,10.2893922,15z/data=!3m1!4b1!4m5!3m4!1s0x1058b7aebf5345cd:0xc59059ea4a545ebd!8m2!3d6.43782!4d10.2978762', 'region_id' => 16,
            'description' => 'Lake Nyos (actually Lake Lwi, which became popular as Lake Nyos, Nyos being the name of the village next to the lake) is a volcanic crater lake located in the North West Province of Cameroon. It is located at an altitude of 1,091 
            meters on the side of an inactive volcano near Mount Oku, along a 1,400 kilometer long volcanic belt',],
            ['name_site' => 'New Freedom Monument', 'category' => 'Monument', 'type' => 'Benchmark', 'region' => 'Littoral', 'city' => 'Douala', 'image' => 'intelligentImage\monument\Md1.PNG', 
            'google_map' => 'https://www.google.fr/maps/place/Monument+de+la+Libert%C3%A9/@56.9514905,24.1111156,17z/data=!3m1!4b1!4m5!3m4!1s0x46eecfd1742cc3a1:0x25408000f2434681!8m2!3d56.9514905!4d24.1133043', 'region_id' => 11,
            'description' => 'La Nouvelle Liberté is the most famous and emblematic work of Douala. This monumental sculpture has today become the symbol of the city. Produced by Joseph-Francis Sumégné in 1996, the Nouvelle Liberté is a majestic 12-meter 
            sculpture made of salvaged iron, erected in the middle of the Rond-Point Deido, the busiest in Douala. Its wingspan is 5 meters and its total mass is 8 tons. This work pays homage to a contemporary practice of the city: the culture of 
            recycling, disassembling and reassembling objects, the ability of citizens to get by in many complex situations. Although today La Nouvelle Liberté has become an icon of the city, this sculpture has been dubbed the Njo Njo de Deido (which means evil, the monster of Deido).',],
            ['name_site' => 'Reunification monument', 'category' => 'Monument', 'type' => 'Triumphal arch', 'region' => 'Center', 'city' => 'Yaounde', 'image' => 'intelligentImage\monument\My1.PNG', 
            'google_map' => 'https://www.google.fr/maps/place/Monument+der+Wiedervereinigung/@3.8525198,11.511228,17z/data=!3m1!4b1!4m5!3m4!1s0x108bcf8df8108c0d:0xa3482f8c52affb6d!8m2!3d3.8525504!4d11.5134164', 'region_id' => 3,
            'description' => 'The Reunification monument is the work of French Salomon, Cameroonian sculptor Gédéon Mpando and Jesuit Father Engelbert Mveng. This work represents fifty-three tons of concrete and is about seven meters high. 
            Around the monument and the statue is a green space formed by lawns and flowering plants. The whole cut by ramps and access stairs coming from the outside. The monument represents two snakes whose heads merge, symbol of 
            the reunification of French Cameroon and British Cameroon on October 1, 1961. Then the unification of the federated republics of Cameroon into the united republic of Cameroon in 1972.',],
            ['name_site' => 'Yaoundé Independence Square', 'category' => 'Monument', 'type' => 'Mound', 'region' => 'Center', 'city' => 'Yaounde', 'image' => 'intelligentImage\monument\My3.PNG', 
            'google_map' => 'https://www.google.fr/maps/search/Yaound%C3%A9+Independence+Square/@3.8687869,11.5171846,17z/data=!3m1!4b1', 'region_id' => 4,
            'description' => 'This monument is one of the most symbolic of the city of Yaoundé because it is supposed to represent our independence, but the reality of our daily lives makes us wonder if we really are. In any case, I choose to believe that this place in 
            all its splendor carries the hope of a free country, united despite its differences and its immense diversity and led by a responsible elite concerned with the well-being of all.',],
            ['name_site' => 'Mount Cameroon', 'category' => 'Mountain', 'type' => 'Hawaiian', 'region' => 'South-West', 'city' => 'Buea', 'image' => 'intelligentImage\mountain\Mc1.PNG', 
            'google_map' => 'https://www.google.fr/maps/place/Mont+Cameroun/@4.2173992,9.1639929,15z/data=!3m1!4b1!4m5!3m4!1s0x1066d2df4a1ac511:0xf7adba5e72d155a7!8m2!3d4.2173993!4d9.1727477', 'region_id' => 23,
            'description' => 'Mount Cameroon is located on the coast of Cameroon, about twenty kilometers from the coast of the Gulf of Guinea. It was born from an intra-plate volcanism (shield volcano); its eruptive dynamism is of the Hawaiian type 
            (effusive with lava fountains) and the products emitted are rather tholeiitic basalts. Mount Cameroon rises to 4,070 meters (Mount Fako). Its historical activity is certain from the seventeenth century; the eruption of 1909 is present.',],
            ['name_site' => 'The Mandara Mountains', 'category' => 'Mountain', 'type' => 'Pelean', 'region' => 'Far-North', 'city' => 'Maroua', 'image' => 'intelligentImage\mountain\Mm1.PNG', 
            'google_map' => 'https://www.google.fr/maps/place/Monts+Mandara/@10.4666667,13.5824905,14z/data=!4m5!3m4!1s0x10fd48b0c56866cf:0xf590ebeac99453b8!8m2!3d10.466667!4d13.6', 'region_id' => 8,
            'description' => 'To the north, the Mandara Mountains region is absolutely unmissable. You will discover a rather confusing landscape of lunar peaks, perched at an altitude of more than 1,500 m. Departing from Mokolo and Maroua, agencies organize hikes of several days. 
            Not far away, the village of Maba offers an impressive view of the plains of  neighboring Nigeria. The Kapsiki and Rumsiki hills region features terraced crops on the mountainside. It is also a very good base for exploring the surroundings.',],
            ['name_site' => 'Douala Maritime Museum', 'category' => 'Museum', 'type' => 'Maritime', 'region' => 'Littoral', 'city' => 'Douala', 'image' => 'intelligentImage\museum\Mdo.PNG', 
            'google_map' => 'https://www.google.fr/maps/place/Mus%C3%A9e+Maritime+Museum+Douala/@4.038618,9.682267,17z/data=!3m1!4b1!4m5!3m4!1s0x106112de3d8ea983:0x656ae019d924b275!8m2!3d4.0386589!4d9.684405', 'region_id' => 12,
            'description' => 'The Douala Maritime Museum exhibits photos, sculptures, maps, paintings, videos, documents, archives and multimedia animations. Exhibits from the port
            cities of Limbe, Douala and Kribi in Cameroon help visitors understand how the country was shaped by shipping. The museum has a navigation simulator which will  fascinating for students and marine professionals.',],
            ['name_site' => 'The national museum of Yaoundé', 'category' => 'Museum', 'type' => 'Art', 'region' => 'Center', 'city' => 'Yaounde', 'image' => 'intelligentImage\museum\Mya.PNG', 
            'google_map' => 'https://www.google.fr/maps/place/Mus%C3%A9e+national/@3.8606222,11.5137434,17z/data=!3m1!4b1!4m5!3m4!1s0x108bcf84f791d633:0x56164fae3b22eac4!8m2!3d3.8606222!4d11.5159321', 'region_id' => 5,
            'description' => 'This beautiful villa with a sumptuous courtyard is the former presidential palace of Cameroon. It is located in the center of the capital and is easily accessible from most parts of the city. The collection of art, handcrafted 
            tools, masks, props, tribal artifacts, instruments and paintings comes from all over the country and features some of the best bronze and wood statues in Cameroon.',],
            ['name_site' => 'Waza National Park', 'category' => 'Park', 'type' => 'National park', 'region' => 'Far-North', 'city' => 'Along the Logone and Chari', 'image' => 'intelligentImage\park\Pw1.PNG', 
            'google_map' => 'https://www.google.fr/maps/place/Parc+National+de+Waza/@11.3333333,14.664478,17z/data=!4m5!3m4!1s0x111c69db190ebd83:0xb7d9a73f49d6fd1d!8m2!3d11.3333333!4d14.6666667', 'region_id' => 9,
            'description' => 'Waza National Park is one of the national parks of Cameroon. Located in the  far north of the country, not far from Lake Chad, it covers an area of 1,700 km2. It is a biosphere reserve recognized by Unesco since 1979. Rich in 
            exceptional natural fauna, it is one of Cameroon\'s tourist assets. First a hunting reserve created in 1934 under the name of Zina-Waza, the park received national park status in 1968. In terms of wildlife, there are 379 species of birds including the ostrich and 30 species of mammals including giraffe, 
            hyena, cobs, elephant, lion, etc. PNW receives more than 20,000 waterbirds each year.',],
            ['name_site' => 'Korup National Park', 'category' => 'Park', 'type' => 'National Park', 'region' => 'South-West', 'city' => 'Mundemba', 'image' => 'intelligentImage\park\Pk1.PNG', 
            'google_map' => 'https://www.google.fr/maps/place/Parc+National+de+Korup/@5.1747899,8.851561,11z/data=!4m5!3m4!1s0x105def916dca742f:0xfbc9f38b75844358!8m2!3d5.2857377!4d9.0571089', 'region_id' => 24,
            'description' => 'Korup National Park (PNK) is one of Cameroon\'s national parks. It is located in the South West region of the country and shares a common border with the Cross River National Park in Nigeria. The park can be accessed by road or by 
            boat. By road, visitors from Douala first cross Kumba, the river port of Ekondo-Titi and Ekondo Nane, over a distance of 250 km, before arriving at Mundemba where the entrance to the park is located. They can also get there by boat, departing from Limbé, crossing the Rio del Rey estuary to reach the Ndian River.',],
            ['name_site' => 'Sanaga river', 'category' => 'River', 'type' => 'Equatorial climate', 'region' => 'Center', 'city' => 'Ebebda, Edea', 'image' => 'intelligentImage\river\RR1.PNG', 
            'google_map' => 'https://www.google.fr/maps/place/Sanaga/@4.9315872,10.375806,8z/data=!3m1!4b1!4m5!3m4!1s0x10618068bd06cdcb:0xf684589cf371cda!8m2!3d4.5062042!4d11.4320088', 'region_id' => 6,
            'description' => 'The Sanaga River (formerly German: Zannaga) is a river of East Region, Centre Region and Littoral Region of Cameroon. Its length is about 600 kilometres (370 mi). The Sanaga River has its Source at the Adamawa 
            Plateau. It is formed by the confluence of the Djérem River and Lom River in the north of the East Region. Apart from those originating rivers, its main tributary is the Mbam River.',],
            ['name_site' => 'Omnisports stadium', 'category' => 'Stadium', 'type' => 'Football', 'region' => 'Center', 'city' => 'Yaounde', 'image' => 'intelligentImage\stadium\Sy1.PNG', 
            'google_map' => 'https://www.google.com/maps/place/Stade+Ahmadou+Ahidjo/@3.8852873,11.5407908,15z/data=!4m5!3m4!1s0x0:0x4979996dee3eb8d0!8m2!3d3.8852873!4d11.5407908', 'region_id' => 7,
            'description' => 'The Ahmadou Ahidjo stadium is a multi-sports stadium located in Yaoundé, Cameroon. It was built in 1972, located in the district of Mfandena, district municipality of Yaoundé V. With a capacity of 40,122 seats after its 
            renovation in November 2016, it hosts the matches of the Cameroon football team, as well as the matches of the big club of the capital, the Canon Yaoundé.',],
            ['name_site' => 'Japoma multisport complex', 'category' => 'Stadium', 'type' => 'Football', 'region' => 'Littoral', 'city' => 'Douala', 'image' => 'intelligentImage\stadium\Sd1.PNG', 
            'google_map' => 'https://www.google.com/maps/place/complexe+sportif+de+Japoma/@4.0065545,9.8242096,15z/data=!4m5!3m4!1s0x0:0x3762e3fa403333ea!8m2!3d4.0065545!4d9.8242096', 'region_id' => 13,
            'description' => 'Japoma multisport complex The Japoma Multisports Complex is a sports complex with a football stadium located in the town of Japoma near Douala, about 20 kilometers from the urban center. The Japoma multisports complex, in the suburbs of Douala, is built by the Turkish group 
            Yenigûn Construction industry, with a capacity of 50,000 seats.The building is built so that spectators do not have unplanned contact with athletes. Each group can act in its area without interfering with the other\'s activity. Natural grass lawn, Athletics track, Car parks, Two additional covered training 
            stadiums with 2,000 seats, Olympic swimming pool with 8 lanes and a capacity of 1,000 seats',],
            ['name_site' => 'Limbe stadium', 'category' => 'Stadium', 'type' => 'Football', 'region' => 'South-West', 'city' => 'Limbe', 'image' => 'intelligentImage\stadium\Sl1.PNG', 
            'google_map' => 'https://www.google.com/maps/place/Limbe+Omnisport+Stadium/@4.0264815,9.1605552,15z/data=!4m5!3m4!1s0x0:0x46cbd932bea1a85f!8m2!3d4.0264815!4d9.1605552', 'region_id' => 25,
            'description' => 'The Stade de Limbé is a football stadium located in Limbé, Cameroon. Built in 2012, in the Ngueme district on the SONARA road, about eight kilometers from the urban center, it has a capacity of 20,000 seats.',],
            ['name_site' => 'Kouekong Bafoussam stadium', 'category' => 'Stadium', 'type' => 'Football', 'region' => 'West', 'city' => 'Bafoussam', 'image' => 'intelligentImage\stadium\Sb1.PNG', 
            'google_map' => 'https://www.google.fr/maps/search/stade+de+kouekong+bafoussam/@5.478984,10.5454116,17z/data=!3m1!4b1', 'region_id' => 30,
            'description' => 'The Bafoussam Stadium is an omnisport stadium located in Bafoussam in Cameroon.  in 2015, in the Kouékong district, about eight kilometers from the urban center, it has a capacity of 20,000 seats',],
            ['name_site' => 'Ekom Falls', 'category' => 'Waterfall', 'type' => 'waterfalls', 'region' => 'Littoral', 'city' => 'Along Mungo', 'image' => 'intelligentImage\waterfall\Wm1.PNG', 
            'google_map' => 'https://www.google.fr/maps/place/Chutes+dEkom/@5.0619617,10.0274706,17z/data=!3m1!4b1!4m5!3m4!1s0x105fd6d39ad5b20d:0xcf39cb9747d67207!8m2!3d5.0619617!4d10.0296593', 'region_id' => 14,
            'description' => 'Located 42 km from Yaoundé, the Nachtigal Falls sparkle in the heart of the Sanaga River. Attention is drawn to the Nachtigal Falls. A subject of admiration, they attract tourists. 1km from the banks, the Nachtigal falls make the beauty of the Sanaga river. To 
             better appreciate them, you have to take a paddle canoe. An orange vest is mandatory before boarding. Sitting at the end of the boat, paddle in hand, Alim, a boatman, plays the tour guide. The journey to discover the falls can begin.',],
            ['name_site' => 'Lobé Falls', 'category' => 'Waterfall', 'type' => 'waterfalls', 'region' => 'South', 'city' => 'Kribi', 'image' => 'intelligentImage\waterfall\Wk1.PNG', 
            'google_map' => 'https://www.google.fr/maps/search/Chute+de+la+Lobe/@2.6920106,9.8008135,10z/data=!3m1!4b1', 'region_id' => 20,
            'description' => 'The Lobé Falls are located in southern Cameroon. Located seven kilometers south of Kribi, they have the rare peculiarity in the world of the fact that the Lobe River flows directly into the Atlantic Ocean. They are the main attraction of Kribi.',],
       ]);
    }
}
