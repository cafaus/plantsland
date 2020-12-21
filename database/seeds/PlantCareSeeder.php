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
                'description' => 'Cactus love a sunny spot, When too much shade the plants get a gray color and filleting them. Provide a well-permeable soil that has a neutral to slightly acidic pH (between 6 and 7). The cactus soil that is commercially available meets the requirements. The repotting of cacti should only take place if the cactus has become too large in relation to the pot. This must be done depending on every 3 to 5 years. The best time to repot is spring. It is best to pour potted plants only after 10 to 14 days because damaged roots have to be repaired.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 1,
                'care_title' => 'Temperature',
                'description' => 'The most optimal temperature is around 25° C during the summer. In really sunny days, this temperature may reach up to 35 ° C without causing problems, provided the cactus has enough moisture available. During the winter, the plants are at rest and the temperature can drop to 10 ° C. The condition is that the plants must be dry.',
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
            [
                'plant_id' => 2,
                'care_title' => 'location',
                'description' => 'flower plants can be stored outside or inside the house',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 2,
                'care_title' => 'Temperature',
                'description' => 'The most optimal temperature is around 30° C during the summer in really sunny days.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 2,
                'care_title' => 'Water and fertilization',
                'description' => 'flower plants watered 2 times in 1 day, namely in the morning and evening and the fertilizer can be replaced for 1 or 2 weeks',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 2,
                'care_title' => 'Colors and shapes',
                'description' => 'for flower plants, care for color and shape is very easy, it just needs to be removed from withered flowers',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 3,
                'care_title' => 'location',
                'description' => 'for ornamental root plants he can be placed inside or outside the house and can also be on the edge of the pool',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 3,
                'care_title' => 'Temperature',
                'description' => 'The most optimal temperature is around 28° C.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 3,
                'care_title' => 'Water and fertilization',
                'description' => 'for ornamental root water and plant fertilization of decorative leave only needs to be watered 2 times 1 day',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 3,
                'care_title' => 'Colors and shapes',
                'description' => 'for ornamental root plants, color and shape care is not complicated',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 4,
                'care_title' => 'location',
                'description' => 'This plant can be put in the yard of the house so that it grows bigger',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 4,
                'care_title' => 'Temperature',
                'description' => 'The most optimal temperature is around 32 °C.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 4,
                'care_title' => 'Water and fertilization',
                'description' => 'This plant only needs to add fertilizer once a week and water it 1 day 2 times, namely in the morning and evening',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 4,
                'care_title' => 'Colors and shapes',
                'description' => 'caring for the color and shape of the ornamental fruit plant is not difficult.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 5,
                'care_title' => 'location',
                'description' => 'This plant can be placed inside or outside the house',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 5,
                'care_title' => 'Temperature',
                'description' => 'The most optimal temperature is around 28°.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 5,
                'care_title' => 'Water and fertilization',
                'description' => 'for water and plant fertilization of decorative leave only needs to be watered 2 times 1 day',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 5,
                'care_title' => 'Colors and shapes',
                'description' => 'caring for the color and shape of the decorative leave plant is not difficult',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 7,
                'care_title' => 'Temperature',
                'description' => 'It is recommended to give the Sansevieria a temperature between 15 and 28 degrees Celsius during the day and between 12 and 20 degrees Celsius at night.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 7,
                'care_title' => 'Watering',
                'description' => 'It is very important to know that you can only give the plant the wrong water if you give too much water. So when in doubt, never water the plant. The soil should be well dried when the plant is watered again. If this does not happen, there is a chance that root rot will occur and the plant may die.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 7,
                'care_title' => 'Pruning',
                'description' => 'The Sansevieria cannot be pruned. This will stop the growth. Fortunately, it is not really necessary as the plant will not grow taller than 1.5 meters.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 7,
                'care_title' => 'Repotting',
                'description' => 'The Sansevieria really only needs to be repotted when the roots are pushing against the pot. This will only be the case after 3 years. Always use a new pot that is at least 20% larger than the previous pot. ',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 8,
                'care_title' => 'Temperature',
                'description' => 'It is recommended to give the Sansevieria a temperature between 15 and 28 degrees Celsius during the day and between 12 and 20 degrees Celsius at night.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 8,
                'care_title' => 'Watering',
                'description' => 'It is very important to know that you can only give the plant the wrong water if you give too much water. So when in doubt, never water the plant. The soil should be well dried when the plant is watered again. If this does not happen, there is a chance that root rot will occur and the plant may die.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 8,
                'care_title' => 'Pruning',
                'description' => 'The Sansevieria cannot be pruned. This will stop the growth. Fortunately, it is not really necessary as the plant will not grow taller than 1.5 meters.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_id' => 8,
                'care_title' => 'Repotting',
                'description' => 'The Sansevieria really only needs to be repotted when the roots are pushing against the pot. This will only be the case after 3 years. Always use a new pot that is at least 20% larger than the previous pot. ',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
