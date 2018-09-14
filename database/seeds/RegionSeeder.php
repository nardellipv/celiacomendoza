<?php

use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->delete();

        $regions = [
            ['id' => 1, 'name' => 'Capital', 'slug' => 'capital'],
            ['id' => 2, 'name' => 'General Alvear', 'slug' => 'general-alvear'],
            ['id' => 3, 'name' => 'Godoy Cruz', 'slug' => 'godoy-cruz'],
            ['id' => 4, 'name' => 'Guaymallén', 'slug' => 'guaymallen'],
            ['id' => 5, 'name' => 'Junín', 'slug' => 'junin'],
            ['id' => 6, 'name' => 'La Paz', 'slug' => 'la-paz'],
            ['id' => 7, 'name' => 'Las Heras', 'slug' => 'las-heras'],
            ['id' => 8, 'name' => 'Lavalle', 'slug' => 'lavalle'],
            ['id' => 9, 'name' => 'Luján de Cuyo', 'slug' => 'lujan-de-cuyo'],
            ['id' => 10, 'name' => 'Maipú', 'slug' => 'maipu'],
            ['id' => 11, 'name' => 'Malargüe', 'slug' => 'malargue'],
            ['id' => 12, 'name' => 'Rivadavia', 'slug' => 'rivadavia'],
            ['id' => 13, 'name' => 'San Carlos', 'slug' => 'san-carlos'],
            ['id' => 14, 'name' => 'San Martín', 'slug' => 'san-martin'],
            ['id' => 15, 'name' => 'San Rafael', 'slug' => 'san-rafael'],
            ['id' => 16, 'name' => 'Santa Rosa', 'slug' => 'santa-rosa'],
            ['id' => 17, 'name' => 'Tunuyán', 'slug' => 'tunuyan'],
            ['id' => 18, 'name' => 'Tupungato', 'slug' => 'tupungato']
        ];

        foreach ($regions as $region) {
            celiacomendoza\Region::create($region);
        }
    }
}
