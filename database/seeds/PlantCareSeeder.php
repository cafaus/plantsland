<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PlantCareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plant_cares')->insert([
            [
                'plant_id' => 1,
                'care_title' => 'location',
                'description' => 'Cacti love a sunny spot, When too much shade the plants get a gray color and filleting them. Provide a well-permeable soil that has a neutral to slightly acidic pH (between 6 and 7). The cactus soil that is commercially available meets the requirements. The repotting of cacti should only take place if the cactus has become too large in relation to the pot. This must be done depending on every 3 to 5 years. The best time to repot is spring. It is best to pour potted plants only after 10 to 14 days because damaged roots have to be repaired.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 1,
                'care_title' => 'Temperature',
                'description' => 'The most optimal temperature is around 25 ° C during the summer. In really sunny days, this temperature may reach up to 35 ° C without causing problems, provided the cactus has enough moisture available. During the winter, the plants are at rest and the temperature can drop to 10 ° C. The condition is that the plants must be dry.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 1,
                'care_title' => 'Water and fertilization',
                'description' => 'Casting is a more difficult matter. A general rule is that the cactus should only be poured when the pot-ball is completely dry (also below). In winter (October-March) one can not pour because the plants know their rest period. The fertilising is done with a commercially available cactus fertilizer which has a low nitrogen content. During the summer it is advisable to fertilize once a month.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 1,
                'care_title' => 'Colors and shapes',
                'description' => 'No plant as decorative and surreal as cactus. From a gray-green base can grow a bright pink bulb and beautiful flowers appear between the spines. Mammillaria are flowering cacti, Echino is spherical with beautiful uniform ridges. Gymnocalycium appears to be made up of green bullets and has a funnel flower, Opuntia grows in flat discs. And Cereus grows like a pillar that can grow to ten meters in the wild.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
