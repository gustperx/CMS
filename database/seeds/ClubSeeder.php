<?php

use Illuminate\Database\Seeder;

use App\Models\Club\Position;

use App\Models\Club\Club;

class ClubSeeder extends Seeder
{

    public function run()
    {

        $this->position();
       // $this->club();

    }

    public function position()
    {

        $data=[

            ['name'=>'Fundador'],

            ['name'=>'Colaborador']


        ];

        foreach ($data as $key) {

            Position::create($key);

        }

    }
    public function club()
    {
        $data=[

            ['name'=>'Pastor','user_id'=>2,'state_id'=>23,'city_id'=>437,'logo'=>'logo-pastor','about'=>'Nosotros somos un club de pastor','members'=>'55'],


        ];

        foreach ($data as $key) {

            Club::create($key);
        } 

    }
}
