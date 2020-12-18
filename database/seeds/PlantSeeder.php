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
                'image' => 'images/plants/cactus-echinofossulocactus-multicostatus.jpg',
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
                'image' => 'images/plants/jasminum-elongatum.jpg',
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
                'image' => 'images/plants/jasminum-sambac.jpg',
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
                'image' => 'images/plants/plumeria-obtusa.jpg',
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
                'name' => 'Plumeria alba',
                'image' => 'images/plants/plumeria-alba.jpg',
                'price' => 650000,
                'height' => 45,
                'pot_size' => 26,
                'stock' => 40,
                'description' => "alba should not be missing in your home. alba give your interior character. They are decorative and easy to maintain. In addition, alba are very cool and at its best in a whole collection.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_category_id' => 4,
                'plant_origin_id' => 7,
                'name' => 'Manilkara zapota sapodilla',
                'image' => 'images/plants/manilkara-zapota-sapodilla.jpg',
                'price' => 500000,
                'height' => 60,
                'pot_size' => 28,
                'stock' => 45,
                'description' => "sapodilla should not be missing in your home. sapodilla give your interior character. They are decorative and easy to maintain. In addition, sapodilla are very cool and at its best in a whole collection.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'plant_category_id' => 4,
                'plant_origin_id' => 8,
                'name' => 'Triphasia trifolia',
                'image' => 'images/plants/triphasia-trifolia.jpg',
                'price' => 500000,
                'height' => 50,
                'pot_size' => 28,
                'stock' => 55,
                'description' => "Triphasia should not be missing in your home. Triphasia give your interior character. They are decorative and easy to maintain. In addition, Triphasia are very cool and at its best in a whole collection.",
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
                'image' => 'images/plants/schlumbergera-truncata.jpg',
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
