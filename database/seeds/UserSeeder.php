<?php

use Illuminate\Database\Seeder;

use App\Models\User\User;

use App\Models\User\Profile;

use App\Models\User\Role;

class UserSeeder extends Seeder
{

    public function run()
    {
        $this->profile();   

        $this->role();             
        
        $this->user();
    }

    public function role()
    {

        $data = [

            ['role' => 'Super Administrador'],

            ['role' => 'Administrador'],

            ['role' => 'Usuario'],

            ['role' => 'Club']


        ];

        foreach ($data as $key) 
        {

            Role::create($key);

        }

    }

    public function profile()
    {
        $data = [

            ['name' => 'Melquíades','lastname'=>'Peña','dni'=>'16340512','address'=>'Urb. Canaima casa 43-20','phone_1'=>'04143673872'],

            ['name' => 'Klarissa','lastname'=>'Ferrer','dni'=>'351114','address'=>'Urb. El pilar','phone_1'=>'04146547821'],

            ['name' => 'Leonardo','lastname'=>'Jimenez','dni'=>'15447889','address'=>'Urb. Maranorte','phone_1'=>'04146547821'],

        ];

        foreach ($data as $key) 
        {

            Profile::create($key);

        }

    }

    public function user()
    {

        $data = [

            ['profile_id' => 1,'role_id'=>1,'email'=>'admin1@admin.com','password'=>bcrypt('123456')],

            ['profile_id' => 2,'role_id'=>4,'email'=>'club1@club.com','password'=>bcrypt('123456')],

            ['profile_id' => 3,'role_id'=>4,'email'=>'club2@club.com','password'=>bcrypt('123456')],

        ];

        foreach ($data as $key) 
        {

            User::create($key);

        }

    }

}
