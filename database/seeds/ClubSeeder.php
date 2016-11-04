<?php

use Illuminate\Database\Seeder;

use App\Models\Club\Position;

use App\Models\Club\Club;

class ClubSeeder extends Seeder
{

    public function run()
    {

        $this->position();
        $this->club();

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

            ['name'=>'Pastor','state_id'=>1,'logo'=>'logo-pastor','about'=>'Nosotros somos un club de pastor','members'=>'55'],

            ['name'=>'Golden','state_id'=>23,'logo'=>'logo-golden','about'=>'Nosotros somos un club de golden','members'=>'102'],

        ];

        foreach ($data as $key) {

            Club::create($key);
        } 

    }
}
