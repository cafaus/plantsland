<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plants')->insert([
            [
                'plant_category_id' => 1,
                'plant_origin_id' => 1,
                'name' => 'Cactus Echinocactus Grusoni',
                'image' => 'images/plants/cactus-echinocactus-grusoni.jpg',
                'price' => 650000,
                'height' => 50,
                'pot_size' => 24,
                'stock' => 50,
                'description' => "cactus should not be missing in your home. Cactus give your interior character. They are decorative and easy to maintain. In addition, cactus are very cool and at its best in a whole collection.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_category_id' => 1,
                'plant_origin_id' => 2,
                'name' => 'Cactus Echinofossulocactus multicostatus',
                'image' => 'images/plants/Echinofossulocactus_multicostatus_5396_l.jpg',
                'price' => 700000,
                'height' => 50,
                'pot_size' => 24,
                'stock' => 60,
                'description' => "cactus should not be missing in your home. Cactus give your interior character. They are decorative and easy to maintain. In addition, cactus are very cool and at its best in a whole collection.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_category_id' => 2,
                'plant_origin_id' => 3,
                'name' => 'Jasminum elongatum',
                'image' => 'images/plants/klimplanten-by-type.jpg',
                'price' => 1000000,
                'height' => 50,
                'pot_size' => 25,
                'stock' => 50,
                'description' => "elongatum should not be missing in your home. elongatum give your interior character. They are decorative and easy to maintain. In addition, elongatum are very cool and at its best in a whole collection.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_category_id' => 2,
                'plant_origin_id' => 4,
                'name' => 'Jasminum sambac',
                'image' => 'images/plants/Plumeria_Alba_1024x.jpg',
                'price' => 800000,
                'height' => 50,
                'pot_size' => 25,
                'stock' => 70,
                'description' => "sambac should not be missing in your home. sambac give your interior character. They are decorative and easy to maintain. In addition, sambac are very cool and at its best in a whole collection.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_category_id' => 3,
                'plant_origin_id' => 5,
                'name' => 'Plumeria obtusa',
                'image' => 'images/plants/jasmine-sambac.jpg',
                'price' => 600000,
                'height' => 45,
                'pot_size' => 26,
                'stock' => 60,
                'description' => "obtusa should not be missing in your home. obtusa give your interior character. They are decorative and easy to maintain. In addition, obtusa are very cool and at its best in a whole collection.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_category_id' => 3,
                'plant_origin_id' => 6,
                'name' => 'Bonsai',
                'image' => 'images/plants/bonsai-tree.jpg',
                'price' => 650000,
                'height' => 45,
                'pot_size' => 26,
                'stock' => 40,
                'description' => "Bonsai is a Japanese art form which utilizes cultivation techniques to produce, in containers, small trees that mimic the shape and scale of full size trees.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_category_id' => 4,
                'plant_origin_id' => 7,
                'name' => 'Sansevieria Cylindrica Spaghetti L',
                'image' => 'images/plants/lidahmertua(2).png',
                'price' => 500000,
                'height' => 60,
                'pot_size' => 28,
                'stock' => 45,
                'description' => "A very decorative hand-shaped Sansevieria cylindrica is a very robust and strong plant. In addition, it is very decorative and fits in almost any interior, classic or modern!",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_category_id' => 5,
                'plant_origin_id' => 8,
                'name' => 'Sansevieria laurentii',
                'image' => 'images/plants/lidahmertua(1).png',
                'price' => 500000,
                'height' => 50,
                'pot_size' => 28,
                'stock' => 55,
                'description' => "The Sansevieria laurentii is almost indestructible. The Sanseveria is also an air-purifying plant and improves the humidity and creates a healthy atmosphere for body and soul.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_category_id' => 5,
                'plant_origin_id' => 9,
                'name' => 'Lavandula stoechas',
                'image' => 'images/plants/lavandula-stoechas.jpg',
                'price' => 900000,
                'height' => 35,
                'pot_size' => 25,
                'stock' => 40,
                'description' => "Lavandula should not be missing in your home. Lavandula give your interior character. They are decorative and easy to maintain. In addition, Lavandula are very cool and at its best in a whole collection.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_category_id' => 5,
                'plant_origin_id' => 10,
                'name' => 'Schlumbergera truncata',
                'image' => 'images/plants/Schlumbergera-truncata.jpg',
                'price' => 1000000,
                'height' => 40,
                'pot_size' => 25,
                'stock' => 50,
                'description' => "Schlumbergera should not be missing in your home. Schlumbergera give your interior character. They are decorative and easy to maintain. In addition, Schlumbergera are very cool and at its best in a whole collection.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
