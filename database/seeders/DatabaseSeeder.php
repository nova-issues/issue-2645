<?php

namespace Database\Seeders;

use Database\Factories\CategoryFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);

        CategoryFactory::new()->times(3)->create();
        CategoryFactory::new()->create([
            'parent_id' => 1
        ]);
        CategoryFactory::new()->create([
            'parent_id' => 2
        ]);
        CategoryFactory::new()->create([
            'parent_id' => 3
        ]);

    }
}
