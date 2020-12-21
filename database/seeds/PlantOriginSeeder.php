<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PlantOriginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plant_origins')->insert([
            [
                'description' => "Cactus Echinocactus grusoni, popularly known as the golden barrel cactus, golden ball or mother-in-law's cushion, is a well known species of cactus, and is endemic to east-central Mexico.
                It is rare and endangered in the wild, where it is found near Mesa de León in the state of Querétaro, and in the state of Hidalgo. The population was critically reduced in the 1990s, by the 
                creation of the Zimapán Dam and reservoir in Hidalgo. The cactus grows in volcanic rock on slopes, at altitudes around 1,400 metres (4,600 ft)",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'description' => "Stenocactus multicostatus more often known as Cactus Echinofossulocactus multicostatus is a low-growing cactus with a lot of narrow, very acute and straight or wavy ribs, 
                densely pleated together giving a wrinkled look to its near globular shape, with short 6 to 18 soft flattened brownish spines, arranged crosswise, but there is a great variation among plants of different origin both in spination, body shape and number of ribs. 
                Since the various forms are connected by intermediates it is extremely difficult to recognize infraspecific taxa.
                Habit: It is simple, but sometimes forms two or more stems.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'description' => "Jasminum elongatum is a shrub with slender stems up to 2 meters long and 4cm in diameter. The stems can be erect or can climb into the surrounding vegetation.
                The plant is harvested from the wild for local use as a medicine. This species has potential in horticulture because of its somewhat shrubby habit, gray-green foliage and large white perfumed flowers",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'description' => "White jasmine or Jasminum sambac is a jasmine species native to South Asia (in India, Myanmar and Sri Lanka. It spreads from Hindustan to Indochina, then the Malay Archipelago. 
                This flower has become one of the three national flowers of Indonesia. This flower is also the national flower of the Philippines.
                White jasmine grows in yards and can be used as a hedge plant. The height can reach 2 meters.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'description' => "Plumeria obtusa is a small tree, growing 3.0–4.6 m (10–15 ft) tall. Infrequently, individuals can grow to be 7.6 m (25 ft). 
                Its flowers are white with yellow throats and each has five petals. The fragrant flowers bloom in clusters. Leaves are dark green, glossy, and up to 20 cm (8 in) long. They are obovate, or teardrop-shaped.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'description' => "Plumeria alba is a species of the genus Plumeria ( Apocynaceae ). This 2-8m deciduous shrub has narrow elongated leaves, large and strongly perfumed white flowers with a yellow center. 
                Native to Central America and the Caribbean , it is now common and naturalized in southern and southeastern Asia . It is the national flower of Laos , known as Dok Champa and the symbol of luck.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'description' => "The Sansevieria is originally from western Africa, from Nigeria to the Congo, and belongs to the Succulent family. Nowadays the Sansevieria is mainly imported from Costa Rica, Guatemala, Thailand and China.
                Sanseveria comes in many shapes and sizes and has developed a completely unique style because of its modern shapes.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'description' => "The Sansevieria originates from western Africa, from Nigeria to Congo, and belongs to the Succulent family. Today, the Sansevieria is mainly imported from Costa Rica, Guatemala, Thailand and China.

                Sanseveria comes in many shapes and sizes and has developed a completely individual style through its modern forms.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'description' => "Lavandula stoechas is a species of flowering plant in the family Lamiaceae, occurring natively in several Mediterranean countries, including France, Spain, Portugal, Italy and Greece. It is an evergreen shrub that usually grows to between 30 and 100 cm tall and occasionally up to 2 m (6.5ft) tall in the subspecies L. 
                stoechas subsp. luisieri . Its leaves are 1–4 cm long, greyish and tomentose . The inflorescence is crowned by a mass of purple elongated ovoid bracts about 5 cm long. Lower flowers form a tight rectangular in cross-section. The upper of the five teeth has a wrong-heart-shaped appendage. The crown is blackish-violet, up to 8 mm long and indistinct two-lipped.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'description' => "Schlumbergera truncata is a species of plant in the family Cactaceae. It is endemic to a small area of ​​the coastal mountains of south-eastern Brazil where its natural habitats are subtropical or tropical moist forests . 
                It is the parent or one of the parents of the houseplants called Christmas cactus or Thanksgiving cactus , among other names.Schlumbergera truncata resembles other species of the genus Schlumbergera in that it has leafless green stems which act as photosynthetic organs. 
                The stems ( cladodes ) are composed of strongly flattened segments, which have two or three of varying shapes along their edges and at the ends. 
                The ends of the stems are (truncated) rather than pointed. Individual segments are about 4–6 cm (1.6–2.4 in) long by 1.5–3.5 cm (0.6–1.4 in) wide.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
