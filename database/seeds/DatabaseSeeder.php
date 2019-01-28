<?php

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
        $this->call(CommunesRegionsSeeder::class);
        $this->call(CategoryClinicsUserTableSeeder::class);
        $this->call(DisordersDiseasesTableSeeder::class);
        $this->call(InstitutionsSeeder::class);
        $this->call(UsersSeeder::class);
        
        $this->call(TerapyLevelsCategoryEx::class);
        $this->call(PermissionsTableSeeder::class);
        
    }
}
