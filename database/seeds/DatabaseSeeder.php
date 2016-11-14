<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserSeeder::class);
        
        $this->call(ContentSeeder::class);

        $this->call(ConfigSeeder::class);
        
        $this->call(ModuleSeeder::class);

        $this->call(ClubSeeder::class);


        Model::reguard();
    }
}
