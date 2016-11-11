<?php

use Illuminate\Database\Seeder;

use App\Models\Content\Content;

use App\Models\Content\Section;

class ContentSeeder extends Seeder
{
    public function run()
    {
        $this->content();

    }

    public function content()
    {

        $data=[

            ['title'=>'Inicio','slug'=>'inicio','user_id'=>1],

            ['title'=>'Quienes Somos','slug'=>'quienes-somos','user_id'=>1],

            ['title'=>'Servicios','slug'=>'servicios','user_id'=>1]

        ];

        foreach ($data as $key) {

            Content::create($key);

        }

        $data=[

            ['title'=>'Titulo Seccion 1','subtitle'=>'Subtitulo Seccion 1','color'=>'#e3c1c1','text_align'=>'Centro','content_id'=>1],

            ['title'=>'Titulo Seccion 2','subtitle'=>'Subtitulo Seccion 2','color'=>'#c9c7c7','text_align'=>'Izquierdo','content_id'=>1],

            ['title'=>'Titulo Seccion 3','subtitle'=>'Subtitulo Seccion 3','color'=>'#c4d3ea','text_align'=>'Derecho','content_id'=>1],

        ];

        foreach ($data as $key) {

            Section::create($key);

        }



    }
}
