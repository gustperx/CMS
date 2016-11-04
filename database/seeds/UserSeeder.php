<?php

use Illuminate\Database\Seeder;

use App\Models\User\User;
use App\Models\User\Profile;
use App\Models\User\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
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

            ['role' => 'Usuario']

        ];

        foreach ($data as $key) 
        {

            Role::create($key);

        }

    }

    public function profile()
    {
        Profile::create([

            'name'      =>'Melquíades',

            'lastname'  =>'Peña',

            'dni'       =>'16340512',

            'address'   =>'Urb. Canaima casa 43-20',

            'phone_1'   =>'04143673872'

        ]);
    }

    public function user()
    {

        User::create([

            'profile_id' => 1,

            'role_id'    => 1,

            'email'      => 'admin1@admin.com',

            'password'   => bcrypt('123456')

        ]);

    }

}
