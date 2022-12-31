<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        $this->call(DepartmentsSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(ResearchSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(YearSeeder::class);
        $this->call(DesignationSeeder::class);
    }
}
