<?php

use Illuminate\Database\Seeder;

use App\Models\Content\Content;

use App\Models\Content\Section;

use App\Models\Config\Animation;



class ContentSeeder extends Seeder
{
    public function run()
    {
        $this->animation();

        $this->content();


    }

    public function content()
    {

        $data=[

            ['title'=>'Inicio','subtitle'=>'Subtitulo de prueba','slug'=>'inicio','user_id'=>1],

            ['title'=>'Quienes Somos','subtitle'=>'Subtitulo de prueba','slug'=>'quienes-somos','user_id'=>1],

            ['title'=>'Servicios','subtitle'=>'Subtitulo de prueba','slug'=>'servicios','user_id'=>1],

            ['title'=>'Contacto','subtitle'=>'Subtitulo de prueba','slug'=>'contacto','user_id'=>1],

            ['title'=>'Adiestramiento','subtitle'=>'Subtitulo de prueba','slug'=>'adiestramiento','user_id'=>1],

            ['title'=>'Hospedaje','subtitle'=>'Subtitulo de prueba','slug'=>'hospedaje','user_id'=>1],

            ['title'=>'Grooming','subtitle'=>'Subtitulo de prueba','slug'=>'grooming','user_id'=>1]


        ];

        foreach ($data as $key) {

            Content::create($key);

        }

        $data=[

            ['title'=>'Titulo Inicio Seccion 1','subtitle'=>'Subtitulo Seccion 1','color'=>'#e3c1c1','text_align'=>'Centro','content_id'=>1,'animation_delay'=>100,'animation_id'=>1],

            ['title'=>'Titulo Inicio Seccion 2','subtitle'=>'Subtitulo Seccion 2','color'=>'#c9c7c7','text_align'=>'Izquierdo','content_id'=>1,'animation_delay'=>200,'animation_id'=>2],

            ['title'=>'Titulo Inicio Seccion 3','subtitle'=>'Subtitulo Seccion 3','color'=>'#c4d3ea','text_align'=>'Derecho','content_id'=>1,'animation_delay'=>300,'animation_id'=>3],

            ['title'=>'Titulo Quienes Somos Seccion 1','subtitle'=>'Subtitulo Seccion 1','color'=>'#e3c1c1','text_align'=>'Centro','content_id'=>2,'animation_delay'=>100,'animation_id'=>13],

            ['title'=>'Titulo Quienes Somos Seccion 2','subtitle'=>'Subtitulo Seccion 2','color'=>'#c9c7c7','text_align'=>'Izquierdo','content_id'=>2,'animation_delay'=>200,'animation_id'=>5]

        ];

        foreach ($data as $key) {

            Section::create($key);

        }

    }

    public function animation()
    {
        $data= [
            ['name'=> 'bounce'],
            ['name'=> 'flash'],
            ['name'=> 'pulse'],
            ['name'=> 'rubberBand'],
            ['name'=> 'shake'],
            ['name'=> 'headShake'],
            ['name'=> 'swing'],
            ['name'=> 'tada'],
            ['name'=> 'wobble'],
            ['name'=> 'jello'],
            ['name'=> 'bounceIn'],
            ['name'=> 'bounceInDown'],
            ['name'=> 'bounceInLeft'],
            ['name'=> 'bounceInRight'],
            ['name'=> 'bounceInUp'],
            ['name'=> 'bounceOut'],
            ['name'=> 'bounceOutDown'],
            ['name'=> 'bounceOutLeft'],
            ['name'=> 'bounceOutRight'],
            ['name'=> 'bounceOutUp'],
            ['name'=> 'fadeIn'],
            ['name'=> 'fadeInDown'],
            ['name'=> 'fadeInDownBig'],
            ['name'=> 'fadeInLeft'],
            ['name'=> 'fadeInLeftBig'],
            ['name'=> 'fadeInRight'],
            ['name'=> 'fadeInRightBig'],
            ['name'=> 'fadeInUp'],
            ['name'=> 'fadeInUpBig'],
            ['name'=> 'fadeOut'],
            ['name'=> 'fadeOutDown'],
            ['name'=> 'fadeOutDownBig'],
            ['name'=> 'fadeOutLeft'],
            ['name'=> 'fadeOutLeftBig'],
            ['name'=> 'fadeOutRight'],
            ['name'=> 'fadeOutRightBig'],
            ['name'=> 'fadeOutUp'],
            ['name'=> 'fadeOutUpBig'],
            ['name'=> 'flipInX'],
            ['name'=> 'flipInY'],
            ['name'=> 'flipOutX'],
            ['name'=> 'flipOutY'],
            ['name'=> 'lightSpeedIn'],
            ['name'=> 'lightSpeedOut'],
            ['name'=> 'rotateIn'],
            ['name'=> 'rotateInDownLeft'],
            ['name'=> 'rotateInDownRight'],
            ['name'=> 'rotateInUpLeft'],
            ['name'=> 'rotateInUpRight'],
            ['name'=> 'rotateOut'],
            ['name'=> 'rotateOutDownLeft'],
            ['name'=> 'rotateOutDownRight'],
            ['name'=> 'rotateOutUpLeft'],
            ['name'=> 'rotateOutUpRight'],
            ['name'=> 'hinge'],
            ['name'=> 'rollIn'],
            ['name'=> 'rollOut'],
            ['name'=> 'zoomIn'],
            ['name'=> 'zoomInDown'],
            ['name'=> 'zoomInLeft'],
            ['name'=> 'zoomInRight'],
            ['name'=> 'zoomInUp'],
            ['name'=> 'zoomOut'],
            ['name'=> 'zoomOutDown'],
            ['name'=> 'zoomOutLeft'],
            ['name'=> 'zoomOutRight'],
            ['name'=> 'zoomOutUp'],
            ['name'=> 'slideInDown'],
            ['name'=> 'slideInLeft'],
            ['name'=> 'slideInRight'],
            ['name'=> 'slideInUp'],
            ['name'=> 'slideOutDown'],
            ['name'=> 'slideOutLeft'],
            ['name'=> 'slideOutRight'],
            ['name'=> 'slideOutUp']
        ];

        foreach ($data as $key) {
            
            Animation::create($key);

        }

    }
    
}
