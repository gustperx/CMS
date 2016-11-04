<?php

use Illuminate\Database\Seeder;

use App\Models\Config\Config;

use App\Models\Config\Social;

use App\Models\Config\SocialLinks;

use App\Models\Menu\Menu;

use App\Models\Menu\MenuLvl1;

use App\Models\Menu\MenuLvl2;

use App\Models\Menu\MenuLvl3;

use App\Models\Config\State;

use App\Models\Config\City;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->config();

        $this->social(); 

        $this->sociaLinks();

        $this->menu();

        $this->menuLvl1();

        $this->menuLvl2();

        $this->menuLvl3();

        $this->state();

        $this->city();

    }

    public function config()
    {

        Config::create([

            'logo'      => 'assets/img/upload/adocanino.png',

            'favicon'   => 'assets/img/upload/favicon.ico',

            'title'     => 'Sistema Adocanino'

        ]);	

    }

    public function social()
    {

        $data=[

            ['name'=>'Facebook','color'=>'#3B5998','icon'=>'fa fa-facebook'],

            ['name'=>'Twitter','color'=>'#5DA9DD','icon'=>'fa fa-twitter'],

            ['name'=>'Instagram','color'=>'#C30093','icon'=>'fa fa-instagram'],

            ['name'=>'Google+','color'=>'#C40807','icon'=>'fa fa-google'],

            ['name'=>'LinkedIn','color'=>'#007BB6','icon'=>'fa fa-linkedin']

        ];

        foreach ($data as $key) {

            Social::create($key);

        }

    }

    public function sociaLinks()
    {

        $data=[

            ['social_id'=>1,'url'=>'https://www.facebook.com/laruecagiftcorner/'],

            ['social_id'=>3,'url'=>'https://www.instagram.com/publired24/'],

            ['social_id'=>2,'url'=>'https://twitter.com/publired24']

        ];

        foreach ($data as $key) {
        
            SocialLinks::create($key);

        }

    }

    public function menu()
    {

        $data=[

            ['role_id'=>1,'title'=>'Menu Super Admin','description'=>'Este es el menu para usuarios con roles de super administrador'],

        ];

        foreach ($data as $key) {
            
            Menu::create($key);

        }
    }

    public function menuLvl1()
    {

        $data=[

            ['menu_id'=>1,'title'=>'Configuraciónes','route'=>'','icon'=>'fa fa-cog'],

            ['menu_id'=>1,'title'=>'Clubes','route'=>'','icon'=>'fa fa-users'],

        ];

        foreach ($data as $key) {
            
            MenuLvl1::create($key);

        }
    }

    public function menuLvl2()
    {

        $data=[

            ['menu_lvl1_id'=>1,'title'=>'Sistema','route'=>'index_config','icon'=>'fa fa-cog'],

            ['menu_lvl1_id'=>1,'title'=>'Redes Sociales','route'=>'','icon'=>'fa fa-comments'],

            ['menu_lvl1_id'=>2,'title'=>'Lista de Clubes','route'=>'index_club','icon'=>'fa fa-comments'],

            ['menu_lvl1_id'=>2,'title'=>'Crear Club','route'=>'create_club','icon'=>'fa fa-plus'],

        ];

        foreach ($data as $key) {
            
            MenuLvl2::create($key);

        }
    }

    public function menuLvl3()
    {

        $data=[

            ['menu_lvl2_id'=>2,'title'=>'Agregar','route'=>'create_social','icon'=>'fa fa-plus'],

            ['menu_lvl2_id'=>2,'title'=>'Ver Redes','route'=>'index_social','icon'=>'fa fa-search'],

        ];

        foreach ($data as $key) {
            
            MenuLvl3::create($key);

        }
    }

    public function state()
    {

        $data=[

            ['state'=>'Amazonas'],
            ['state'=>'Anzoátegui'],
            ['state'=>'Apure'],
            ['state'=>'Aragua'],
            ['state'=>'Barinas'],
            ['state'=>'Bolívar'],
            ['state'=>'Carabobo'],
            ['state'=>'Cojedes'],
            ['state'=>'Delta Amacuro'],
            ['state'=>'Falcón'],
            ['state'=>'Guárico'],
            ['state'=>'Lara'],
            ['state'=>'Mérida'],
            ['state'=>'Miranda'],
            ['state'=>'Monagas'],
            ['state'=>'Nueva Esparta'],
            ['state'=>'Portuguesa'],
            ['state'=>'Sucre'],
            ['state'=>'Táchira'],
            ['state'=>'Trujillo'],
            ['state'=>'Vargas'],
            ['state'=>'Yaracuy'],
            ['state'=>'Zulia'],
            ['state'=>'Distrito Capital'],
            ['state'=>'Dependencias Federales']

        ];

        foreach ($data as $key) {
            
            State::create($key);

        }
    }

    public function city()
    {

        $data=[

            ['state_id'=>1,'city'=> 'Maroa'],
            ['state_id'=>1,'city'=> 'Puerto Ayacucho'],
            ['state_id'=>1,'city'=> 'San Fernando de Atabapo'],
            ['state_id'=>2,'city'=> 'Anaco'],
            ['state_id'=>2,'city'=> 'Aragua de Barcelona'],
            ['state_id'=>2,'city'=> 'Barcelona'],
            ['state_id'=>2,'city'=> 'Boca de Uchire'],
            ['state_id'=>2,'city'=> 'Cantaura'],
            ['state_id'=>2,'city'=> 'Clarines'],
            ['state_id'=>2,'city'=> 'El Chaparro'],
            ['state_id'=>2,'city'=> 'El Pao Anzoátegui'],
            ['state_id'=>2,'city'=> 'El Tigre'],
            ['state_id'=>2,'city'=> 'El Tigrito'],
            ['state_id'=>2,'city'=> 'Guanape'],
            ['state_id'=>2,'city'=> 'Guanta'],
            ['state_id'=>2,'city'=> 'Lechería'],
            ['state_id'=>2,'city'=> 'Onoto'],
            ['state_id'=>2,'city'=> 'Pariaguán'],
            ['state_id'=>2,'city'=> 'Píritu'],
            ['state_id'=>2,'city'=> 'Puerto La Cruz'],
            ['state_id'=>2,'city'=> 'Puerto Píritu'],
            ['state_id'=>2,'city'=> 'Sabana de Uchire'],
            ['state_id'=>2,'city'=> 'San Mateo Anzoátegui'],
            ['state_id'=>2,'city'=> 'San Pablo Anzoátegui'],
            ['state_id'=>2,'city'=> 'San Tomé'],
            ['state_id'=>2,'city'=> 'Santa Ana de Anzoátegui'],
            ['state_id'=>2,'city'=> 'Santa Fe Anzoátegui'],
            ['state_id'=>2,'city'=> 'Santa Rosa'],
            ['state_id'=>2,'city'=> 'Soledad'],
            ['state_id'=>2,'city'=> 'Urica'],
            ['state_id'=>2,'city'=> 'Valle de Guanape'],
            ['state_id'=>3,'city'=> 'Achaguas'],
            ['state_id'=>3,'city'=> 'Biruaca'],
            ['state_id'=>3,'city'=> 'Bruzual'],
            ['state_id'=>3,'city'=> 'El Amparo'],
            ['state_id'=>3,'city'=> 'El Nula'],
            ['state_id'=>3,'city'=> 'Elorza'],
            ['state_id'=>3,'city'=> 'Guasdualito'],
            ['state_id'=>3,'city'=> 'Mantecal'],
            ['state_id'=>3,'city'=> 'Puerto Páez'],
            ['state_id'=>3,'city'=> 'San Fernando de Apure'],
            ['state_id'=>3,'city'=> 'San Juan de Payara'],
            ['state_id'=>4,'city'=> 'Barbacoas'],
            ['state_id'=>4,'city'=> 'Cagua'],
            ['state_id'=>4,'city'=> 'Camatagua'],
            ['state_id'=>4,'city'=> 'Choroní'],
            ['state_id'=>4,'city'=> 'Colonia Tovar'],
            ['state_id'=>4,'city'=> 'El Consejo'],
            ['state_id'=>4,'city'=> 'La Victoria'],
            ['state_id'=>4,'city'=> 'Las Tejerías'],
            ['state_id'=>4,'city'=> 'Magdaleno'],
            ['state_id'=>4,'city'=> 'Maracay'],
            ['state_id'=>4,'city'=> 'Ocumare de La Costa'],
            ['state_id'=>4,'city'=> 'Palo Negro'],
            ['state_id'=>4,'city'=> 'San Casimiro'],
            ['state_id'=>4,'city'=> 'San Mateo'],
            ['state_id'=>4,'city'=> 'San Sebastián'],
            ['state_id'=>4,'city'=> 'Santa Cruz de Aragua'],
            ['state_id'=>4,'city'=> 'Tocorón'],
            ['state_id'=>4,'city'=> 'Turmero'],
            ['state_id'=>4,'city'=> 'Villa de Cura'],
            ['state_id'=>4,'city'=> 'Zuata'],
            ['state_id'=>5,'city'=> 'Barinas'],
            ['state_id'=>5,'city'=> 'Barinitas'],
            ['state_id'=>5,'city'=> 'Barrancas'],
            ['state_id'=>5,'city'=> 'Calderas'],
            ['state_id'=>5,'city'=> 'Capitanejo'],
            ['state_id'=>5,'city'=> 'Ciudad Bolivia'],
            ['state_id'=>5,'city'=> 'El Cantón'],
            ['state_id'=>5,'city'=> 'Las Veguitas'],
            ['state_id'=>5,'city'=> 'Libertad de Barinas'],
            ['state_id'=>5,'city'=> 'Sabaneta'],
            ['state_id'=>5,'city'=> 'Santa Bárbara de Barinas'],
            ['state_id'=>5,'city'=> 'Socopó'],
            ['state_id'=>6,'city'=> 'Caicara del Orinoco'],
            ['state_id'=>6,'city'=> 'Canaima'],
            ['state_id'=>6,'city'=> 'Ciudad Bolívar'],
            ['state_id'=>6,'city'=> 'Ciudad Piar'],
            ['state_id'=>6,'city'=> 'El Callao'],
            ['state_id'=>6,'city'=> 'El Dorado'],
            ['state_id'=>6,'city'=> 'El Manteco'],
            ['state_id'=>6,'city'=> 'El Palmar'],
            ['state_id'=>6,'city'=> 'El Pao'],
            ['state_id'=>6,'city'=> 'Guasipati'],
            ['state_id'=>6,'city'=> 'Guri'],
            ['state_id'=>6,'city'=> 'La Paragua'],
            ['state_id'=>6,'city'=> 'Matanzas'],
            ['state_id'=>6,'city'=> 'Puerto Ordaz'],
            ['state_id'=>6,'city'=> 'San Félix'],
            ['state_id'=>6,'city'=> 'Santa Elena de Uairén'],
            ['state_id'=>6,'city'=> 'Tumeremo'],
            ['state_id'=>6,'city'=> 'Unare'],
            ['state_id'=>6,'city'=> 'Upata'],
            ['state_id'=>7,'city'=> 'Bejuma'],
            ['state_id'=>7,'city'=> 'Belén'],
            ['state_id'=>7,'city'=> 'Campo de Carabobo'],
            ['state_id'=>7,'city'=> 'Canoabo'],
            ['state_id'=>7,'city'=> 'Central Tacarigua'],
            ['state_id'=>7,'city'=> 'Chirgua'],
            ['state_id'=>7,'city'=> 'Ciudad Alianza'],
            ['state_id'=>7,'city'=> 'El Palito'],
            ['state_id'=>7,'city'=> 'Guacara'],
            ['state_id'=>7,'city'=> 'Guigue'],
            ['state_id'=>7,'city'=> 'Las Trincheras'],
            ['state_id'=>7,'city'=> 'Los Guayos'],
            ['state_id'=>7,'city'=> 'Mariara'],
            ['state_id'=>7,'city'=> 'Miranda'],
            ['state_id'=>7,'city'=> 'Montalbán'],
            ['state_id'=>7,'city'=> 'Morón'],
            ['state_id'=>7,'city'=> 'Naguanagua'],
            ['state_id'=>7,'city'=> 'Puerto Cabello'],
            ['state_id'=>7,'city'=> 'San Joaquín'],
            ['state_id'=>7,'city'=> 'Tocuyito'],
            ['state_id'=>7,'city'=> 'Urama'],
            ['state_id'=>7,'city'=> 'Valencia'],
            ['state_id'=>7,'city'=> 'Vigirimita'],
            ['state_id'=>8,'city'=> 'Aguirre'],
            ['state_id'=>8,'city'=> 'Apartaderos Cojedes'],
            ['state_id'=>8,'city'=> 'Arismendi'],
            ['state_id'=>8,'city'=> 'Camuriquito'],
            ['state_id'=>8,'city'=> 'El Baúl'],
            ['state_id'=>8,'city'=> 'El Limón'],
            ['state_id'=>8,'city'=> 'El Pao Cojedes'],
            ['state_id'=>8,'city'=> 'El Socorro'],
            ['state_id'=>8,'city'=> 'La Aguadita'],
            ['state_id'=>8,'city'=> 'Las Vegas'],
            ['state_id'=>8,'city'=> 'Libertad de Cojedes'],
            ['state_id'=>8,'city'=> 'Mapuey'],
            ['state_id'=>8,'city'=> 'Piñedo'],
            ['state_id'=>8,'city'=> 'Samancito'],
            ['state_id'=>8,'city'=> 'San Carlos'],
            ['state_id'=>8,'city'=> 'Sucre'],
            ['state_id'=>8,'city'=> 'Tinaco'],
            ['state_id'=>8,'city'=> 'Tinaquillo'],
            ['state_id'=>8,'city'=> 'Vallecito'],
            ['state_id'=>9,'city'=> 'Tucupita'],
            ['state_id'=>24,'city'=>    'Caracas'],
            ['state_id'=>24,'city'=>    'El Junquito'],
            ['state_id'=>10,'city'=>    'Adícora'],
            ['state_id'=>10,'city'=>    'Boca de Aroa'],
            ['state_id'=>10,'city'=>    'Cabure'],
            ['state_id'=>10,'city'=>    'Capadare'],
            ['state_id'=>10,'city'=>    'Capatárida'],
            ['state_id'=>10,'city'=>    'Chichiriviche'],
            ['state_id'=>10,'city'=>    'Churuguara'],
            ['state_id'=>10,'city'=>    'Coro'],
            ['state_id'=>10,'city'=>    'Cumarebo'],
            ['state_id'=>10,'city'=>    'Dabajuro'],
            ['state_id'=>10,'city'=>    'Judibana'],
            ['state_id'=>10,'city'=>    'La Cruz de Taratara'],
            ['state_id'=>10,'city'=>    'La Vela de Coro'],
            ['state_id'=>10,'city'=>    'Los Taques'],
            ['state_id'=>10,'city'=>    'Maparari'],
            ['state_id'=>10,'city'=>    'Mene de Mauroa'],
            ['state_id'=>10,'city'=>    'Mirimire'],
            ['state_id'=>10,'city'=>    'Pedregal'],
            ['state_id'=>10,'city'=>    'Píritu Falcón'],
            ['state_id'=>10,'city'=>    'Pueblo Nuevo Falcón'],
            ['state_id'=>10,'city'=>    'Puerto Cumarebo'],
            ['state_id'=>10,'city'=>    'Punta Cardón'],
            ['state_id'=>10,'city'=>    'Punto Fijo'],
            ['state_id'=>10,'city'=>    'San Juan de Los Cayos'],
            ['state_id'=>10,'city'=>    'San Luis'],
            ['state_id'=>10,'city'=>    'Santa Ana Falcón'],
            ['state_id'=>10,'city'=>    'Santa Cruz De Bucaral'],
            ['state_id'=>10,'city'=>    'Tocopero'],
            ['state_id'=>10,'city'=>    'Tocuyo de La Costa'],
            ['state_id'=>10,'city'=>    'Tucacas'],
            ['state_id'=>10,'city'=>    'Yaracal'],
            ['state_id'=>11,'city'=>    'Altagracia de Orituco'],
            ['state_id'=>11,'city'=>    'Cabruta'],
            ['state_id'=>11,'city'=>    'Calabozo'],
            ['state_id'=>11,'city'=>    'Camaguán'],
            ['state_id'=>11,'city'=>    'Chaguaramas Guárico'],
            ['state_id'=>11,'city'=>    'El Socorro'],
            ['state_id'=>11,'city'=>    'El Sombrero'],
            ['state_id'=>11,'city'=>    'Las Mercedes de Los Llanos'],
            ['state_id'=>11,'city'=>    'Lezama'],
            ['state_id'=>11,'city'=>    'Onoto'],
            ['state_id'=>11,'city'=>    'Ortíz'],
            ['state_id'=>11,'city'=>    'San José de Guaribe'],
            ['state_id'=>11,'city'=>    'San Juan de Los Morros'],
            ['state_id'=>11,'city'=>    'San Rafael de Laya'],
            ['state_id'=>11,'city'=>    'Santa María de Ipire'],
            ['state_id'=>11,'city'=>    'Tucupido'],
            ['state_id'=>11,'city'=>    'Valle de La Pascua'],
            ['state_id'=>11,'city'=>    'Zaraza'],
            ['state_id'=>12,'city'=>    'Aguada Grande'],
            ['state_id'=>12,'city'=>    'Atarigua'],
            ['state_id'=>12,'city'=>    'Barquisimeto'],
            ['state_id'=>12,'city'=>    'Bobare'],
            ['state_id'=>12,'city'=>    'Cabudare'],
            ['state_id'=>12,'city'=>    'Carora'],
            ['state_id'=>12,'city'=>    'Cubiro'],
            ['state_id'=>12,'city'=>    'Cují'],
            ['state_id'=>12,'city'=>    'Duaca'],
            ['state_id'=>12,'city'=>    'El Manzano'],
            ['state_id'=>12,'city'=>    'El Tocuyo'],
            ['state_id'=>12,'city'=>    'Guaríco'],
            ['state_id'=>12,'city'=>    'Humocaro Alto'],
            ['state_id'=>12,'city'=>    'Humocaro Bajo'],
            ['state_id'=>12,'city'=>    'La Miel'],
            ['state_id'=>12,'city'=>    'Moroturo'],
            ['state_id'=>12,'city'=>    'Quíbor'],
            ['state_id'=>12,'city'=>    'Río Claro'],
            ['state_id'=>12,'city'=>    'Sanare'],
            ['state_id'=>12,'city'=>    'Santa Inés'],
            ['state_id'=>12,'city'=>    'Sarare'],
            ['state_id'=>12,'city'=>    'Siquisique'],
            ['state_id'=>12,'city'=>    'Tintorero'],
            ['state_id'=>13,'city'=>    'Apartaderos Mérida'],
            ['state_id'=>13,'city'=>    'Arapuey'],
            ['state_id'=>13,'city'=>    'Bailadores'],
            ['state_id'=>13,'city'=>    'Caja Seca'],
            ['state_id'=>13,'city'=>    'Canaguá'],
            ['state_id'=>13,'city'=>    'Chachopo'],
            ['state_id'=>13,'city'=>    'Chiguara'],
            ['state_id'=>13,'city'=>    'Ejido'],
            ['state_id'=>13,'city'=>    'El Vigía'],
            ['state_id'=>13,'city'=>    'La Azulita'],
            ['state_id'=>13,'city'=>    'La Playa'],
            ['state_id'=>13,'city'=>    'Lagunillas Mérida'],
            ['state_id'=>13,'city'=>    'Mérida'],
            ['state_id'=>13,'city'=>    'Mesa de Bolívar'],
            ['state_id'=>13,'city'=>    'Mucuchíes'],
            ['state_id'=>13,'city'=>    'Mucujepe'],
            ['state_id'=>13,'city'=>    'Mucuruba'],
            ['state_id'=>13,'city'=>    'Nueva Bolivia'],
            ['state_id'=>13,'city'=>    'Palmarito'],
            ['state_id'=>13,'city'=>    'Pueblo Llano'],
            ['state_id'=>13,'city'=>    'Santa Cruz de Mora'],
            ['state_id'=>13,'city'=>    'Santa Elena de Arenales'],
            ['state_id'=>13,'city'=>    'Santo Domingo'],
            ['state_id'=>13,'city'=>    'Tabáy'],
            ['state_id'=>13,'city'=>    'Timotes'],
            ['state_id'=>13,'city'=>    'Torondoy'],
            ['state_id'=>13,'city'=>    'Tovar'],
            ['state_id'=>13,'city'=>    'Tucani'],
            ['state_id'=>13,'city'=>    'Zea'],
            ['state_id'=>14,'city'=>    'Araguita'],
            ['state_id'=>14,'city'=>    'Carrizal'],
            ['state_id'=>14,'city'=>    'Caucagua'],
            ['state_id'=>14,'city'=>    'Chaguaramas Miranda'],
            ['state_id'=>14,'city'=>    'Charallave'],
            ['state_id'=>14,'city'=>    'Chirimena'],
            ['state_id'=>14,'city'=>    'Chuspa'],
            ['state_id'=>14,'city'=>    'Cúa'],
            ['state_id'=>14,'city'=>    'Cupira'],
            ['state_id'=>14,'city'=>    'Curiepe'],
            ['state_id'=>14,'city'=>    'El Guapo'],
            ['state_id'=>14,'city'=>    'El Jarillo'],
            ['state_id'=>14,'city'=>    'Filas de Mariche'],
            ['state_id'=>14,'city'=>    'Guarenas'],
            ['state_id'=>14,'city'=>    'Guatire'],
            ['state_id'=>14,'city'=>    'Higuerote'],
            ['state_id'=>14,'city'=>    'Los Anaucos'],
            ['state_id'=>14,'city'=>    'Los Teques'],
            ['state_id'=>14,'city'=>    'Ocumare del Tuy'],
            ['state_id'=>14,'city'=>    'Panaquire'],
            ['state_id'=>14,'city'=>    'Paracotos'],
            ['state_id'=>14,'city'=>    'Río Chico'],
            ['state_id'=>14,'city'=>    'San Antonio de Los Altos'],
            ['state_id'=>14,'city'=>    'San Diego de Los Altos'],
            ['state_id'=>14,'city'=>    'San Fernando del Guapo'],
            ['state_id'=>14,'city'=>    'San Francisco de Yare'],
            ['state_id'=>14,'city'=>    'San José de Los Altos'],
            ['state_id'=>14,'city'=>    'San José de Río Chico'],
            ['state_id'=>14,'city'=>    'San Pedro de Los Altos'],
            ['state_id'=>14,'city'=>    'Santa Lucía'],
            ['state_id'=>14,'city'=>    'Santa Teresa'],
            ['state_id'=>14,'city'=>    'Tacarigua de La Laguna'],
            ['state_id'=>14,'city'=>    'Tacarigua de Mamporal'],
            ['state_id'=>14,'city'=>    'Tácata'],
            ['state_id'=>14,'city'=>    'Turumo'],
            ['state_id'=>15,'city'=>    'Aguasay'],
            ['state_id'=>15,'city'=>    'Aragua de Maturín'],
            ['state_id'=>15,'city'=>    'Barrancas del Orinoco'],
            ['state_id'=>15,'city'=>    'Caicara de Maturín'],
            ['state_id'=>15,'city'=>    'Caripe'],
            ['state_id'=>15,'city'=>    'Caripito'],
            ['state_id'=>15,'city'=>    'Chaguaramal'],
            ['state_id'=>15,'city'=>    'Chaguaramas Monagas'],
            ['state_id'=>15,'city'=>    'El Furrial'],
            ['state_id'=>15,'city'=>    'El Tejero'],
            ['state_id'=>15,'city'=>    'Jusepín'],
            ['state_id'=>15,'city'=>    'La Toscana'],
            ['state_id'=>15,'city'=>    'Maturín'],
            ['state_id'=>15,'city'=>    'Miraflores'],
            ['state_id'=>15,'city'=>    'Punta de Mata'],
            ['state_id'=>15,'city'=>    'Quiriquire'],
            ['state_id'=>15,'city'=>    'San Antonio de Maturín'],
            ['state_id'=>15,'city'=>    'San Vicente Monagas'],
            ['state_id'=>15,'city'=>    'Santa Bárbara'],
            ['state_id'=>15,'city'=>    'Temblador'],
            ['state_id'=>15,'city'=>    'Teresen'],
            ['state_id'=>15,'city'=>    'Uracoa'],
            ['state_id'=>16,'city'=>    'Altagracia'],
            ['state_id'=>16,'city'=>    'Boca de Pozo'],
            ['state_id'=>16,'city'=>    'Boca de Río'],
            ['state_id'=>16,'city'=>    'El Espinal'],
            ['state_id'=>16,'city'=>    'El Valle del Espíritu Santo'],
            ['state_id'=>16,'city'=>    'El Yaque'],
            ['state_id'=>16,'city'=>    'Juangriego'],
            ['state_id'=>16,'city'=>    'La Asunción'],
            ['state_id'=>16,'city'=>    'La Guardia'],
            ['state_id'=>16,'city'=>    'Pampatar'],
            ['state_id'=>16,'city'=>    'Porlamar'],
            ['state_id'=>16,'city'=>    'Puerto Fermín'],
            ['state_id'=>16,'city'=>    'Punta de Piedras'],
            ['state_id'=>16,'city'=>    'San Francisco de Macanao'],
            ['state_id'=>16,'city'=>    'San Juan Bautista'],
            ['state_id'=>16,'city'=>    'San Pedro de Coche'],
            ['state_id'=>16,'city'=>    'Santa Ana de Nueva Esparta'],
            ['state_id'=>16,'city'=>    'Villa Rosa'],
            ['state_id'=>17,'city'=>    'Acarigua'],
            ['state_id'=>17,'city'=>    'Agua Blanca'],
            ['state_id'=>17,'city'=>    'Araure'],
            ['state_id'=>17,'city'=>    'Biscucuy'],
            ['state_id'=>17,'city'=>    'Boconoito'],
            ['state_id'=>17,'city'=>    'Campo Elías'],
            ['state_id'=>17,'city'=>    'Chabasquén'],
            ['state_id'=>17,'city'=>    'Guanare'],
            ['state_id'=>17,'city'=>    'Guanarito'],
            ['state_id'=>17,'city'=>    'La Aparición'],
            ['state_id'=>17,'city'=>    'La Misión'],
            ['state_id'=>17,'city'=>    'Mesa de Cavacas'],
            ['state_id'=>17,'city'=>    'Ospino'],
            ['state_id'=>17,'city'=>    'Papelón'],
            ['state_id'=>17,'city'=>    'Payara'],
            ['state_id'=>17,'city'=>    'Pimpinela'],
            ['state_id'=>17,'city'=>    'Píritu de Portuguesa'],
            ['state_id'=>17,'city'=>    'San Rafael de Onoto'],
            ['state_id'=>17,'city'=>    'Santa Rosalía'],
            ['state_id'=>17,'city'=>    'Turén'],
            ['state_id'=>18,'city'=>    'Altos de Sucre'],
            ['state_id'=>18,'city'=>    'Araya'],
            ['state_id'=>18,'city'=>    'Cariaco'],
            ['state_id'=>18,'city'=>    'Carúpano'],
            ['state_id'=>18,'city'=>    'Casanay'],
            ['state_id'=>18,'city'=>    'Cumaná'],
            ['state_id'=>18,'city'=>    'Cumanacoa'],
            ['state_id'=>18,'city'=>    'El Morro Puerto Santo'],
            ['state_id'=>18,'city'=>    'El Pilar'],
            ['state_id'=>18,'city'=>    'El Poblado'],
            ['state_id'=>18,'city'=>    'Guaca'],
            ['state_id'=>18,'city'=>    'Guiria'],
            ['state_id'=>18,'city'=>    'Irapa'],
            ['state_id'=>18,'city'=>    'Manicuare'],
            ['state_id'=>18,'city'=>    'Mariguitar'],
            ['state_id'=>18,'city'=>    'Río Caribe'],
            ['state_id'=>18,'city'=>    'San Antonio del Golfo'],
            ['state_id'=>18,'city'=>    'San José de Aerocuar'],
            ['state_id'=>18,'city'=>    'San Vicente de Sucre'],
            ['state_id'=>18,'city'=>    'Santa Fe de Sucre'],
            ['state_id'=>18,'city'=>    'Tunapuy'],
            ['state_id'=>18,'city'=>    'Yaguaraparo'],
            ['state_id'=>18,'city'=>    'Yoco'],
            ['state_id'=>19,'city'=>    'Abejales'],
            ['state_id'=>19,'city'=>    'Borota'],
            ['state_id'=>19,'city'=>    'Bramon'],
            ['state_id'=>19,'city'=>    'Capacho'],
            ['state_id'=>19,'city'=>    'Colón'],
            ['state_id'=>19,'city'=>    'Coloncito'],
            ['state_id'=>19,'city'=>    'Cordero'],
            ['state_id'=>19,'city'=>    'El Cobre'],
            ['state_id'=>19,'city'=>    'El Pinal'],
            ['state_id'=>19,'city'=>    'Independencia'],
            ['state_id'=>19,'city'=>    'La Fría'],
            ['state_id'=>19,'city'=>    'La Grita'],
            ['state_id'=>19,'city'=>    'La Pedrera'],
            ['state_id'=>19,'city'=>    'La Tendida'],
            ['state_id'=>19,'city'=>    'Las Delicias'],
            ['state_id'=>19,'city'=>    'Las Hernández'],
            ['state_id'=>19,'city'=>    'Lobatera'],
            ['state_id'=>19,'city'=>    'Michelena'],
            ['state_id'=>19,'city'=>    'Palmira'],
            ['state_id'=>19,'city'=>    'Pregonero'],
            ['state_id'=>19,'city'=>    'Queniquea'],
            ['state_id'=>19,'city'=>    'Rubio'],
            ['state_id'=>19,'city'=>    'San Antonio del Tachira'],
            ['state_id'=>19,'city'=>    'San Cristobal'],
            ['state_id'=>19,'city'=>    'San José de Bolívar'],
            ['state_id'=>19,'city'=>    'San Josecito'],
            ['state_id'=>19,'city'=>    'San Pedro del Río'],
            ['state_id'=>19,'city'=>    'Santa Ana Táchira'],
            ['state_id'=>19,'city'=>    'Seboruco'],
            ['state_id'=>19,'city'=>    'Táriba'],
            ['state_id'=>19,'city'=>    'Umuquena'],
            ['state_id'=>19,'city'=>    'Ureña'],
            ['state_id'=>20,'city'=>    'Batatal'],
            ['state_id'=>20,'city'=>    'Betijoque'],
            ['state_id'=>20,'city'=>    'Boconó'],
            ['state_id'=>20,'city'=>    'Carache'],
            ['state_id'=>20,'city'=>    'Chejende'],
            ['state_id'=>20,'city'=>    'Cuicas'],
            ['state_id'=>20,'city'=>    'El Dividive'],
            ['state_id'=>20,'city'=>    'El Jaguito'],
            ['state_id'=>20,'city'=>    'Escuque'],
            ['state_id'=>20,'city'=>    'Isnotú'],
            ['state_id'=>20,'city'=>    'Jajó'],
            ['state_id'=>20,'city'=>    'La Ceiba'],
            ['state_id'=>20,'city'=>    'La Concepción de Trujllo'],
            ['state_id'=>20,'city'=>    'La Mesa de Esnujaque'],
            ['state_id'=>20,'city'=>    'La Puerta'],
            ['state_id'=>20,'city'=>    'La Quebrada'],
            ['state_id'=>20,'city'=>    'Mendoza Fría'],
            ['state_id'=>20,'city'=>    'Meseta de Chimpire'],
            ['state_id'=>20,'city'=>    'Monay'],
            ['state_id'=>20,'city'=>    'Motatán'],
            ['state_id'=>20,'city'=>    'Pampán'],
            ['state_id'=>20,'city'=>    'Pampanito'],
            ['state_id'=>20,'city'=>    'Sabana de Mendoza'],
            ['state_id'=>20,'city'=>    'San Lázaro'],
            ['state_id'=>20,'city'=>    'Santa Ana de Trujillo'],
            ['state_id'=>20,'city'=>    'Tostós'],
            ['state_id'=>20,'city'=>    'Trujillo'],
            ['state_id'=>20,'city'=>    'Valera'],
            ['state_id'=>21,'city'=>    'Carayaca'],
            ['state_id'=>21,'city'=>    'Litoral'],
            ['state_id'=>25,'city'=>    'Archipiélago Los Roques'],
            ['state_id'=>22,'city'=>    'Aroa'],
            ['state_id'=>22,'city'=>    'Boraure'],
            ['state_id'=>22,'city'=>    'Campo Elías de Yaracuy'],
            ['state_id'=>22,'city'=>    'Chivacoa'],
            ['state_id'=>22,'city'=>    'Cocorote'],
            ['state_id'=>22,'city'=>    'Farriar'],
            ['state_id'=>22,'city'=>    'Guama'],
            ['state_id'=>22,'city'=>    'Marín'],
            ['state_id'=>22,'city'=>    'Nirgua'],
            ['state_id'=>22,'city'=>    'Sabana de Parra'],
            ['state_id'=>22,'city'=>    'Salom'],
            ['state_id'=>22,'city'=>    'San Felipe'],
            ['state_id'=>22,'city'=>    'San Pablo de Yaracuy'],
            ['state_id'=>22,'city'=>    'Urachiche'],
            ['state_id'=>22,'city'=>    'Yaritagua'],
            ['state_id'=>22,'city'=>    'Yumare'],
            ['state_id'=>23,'city'=>    'Bachaquero'],
            ['state_id'=>23,'city'=>    'Bobures'],
            ['state_id'=>23,'city'=>    'Cabimas'],
            ['state_id'=>23,'city'=>    'Campo Concepción'],
            ['state_id'=>23,'city'=>    'Campo Mara'],
            ['state_id'=>23,'city'=>    'Campo Rojo'],
            ['state_id'=>23,'city'=>    'Carrasquero'],
            ['state_id'=>23,'city'=>    'Casigua'],
            ['state_id'=>23,'city'=>    'Chiquinquirá'],
            ['state_id'=>23,'city'=>    'Ciudad Ojeda'],
            ['state_id'=>23,'city'=>    'El Batey'],
            ['state_id'=>23,'city'=>    'El Carmelo'],
            ['state_id'=>23,'city'=>    'El Chivo'],
            ['state_id'=>23,'city'=>    'El Guayabo'],
            ['state_id'=>23,'city'=>    'El Mene'],
            ['state_id'=>23,'city'=>    'El Venado'],
            ['state_id'=>23,'city'=>    'Encontrados'],
            ['state_id'=>23,'city'=>    'Gibraltar'],
            ['state_id'=>23,'city'=>    'Isla de Toas'],
            ['state_id'=>23,'city'=>    'La Concepción del Zulia'],
            ['state_id'=>23,'city'=>    'La Paz'],
            ['state_id'=>23,'city'=>    'La Sierrita'],
            ['state_id'=>23,'city'=>    'Lagunillas del Zulia'],
            ['state_id'=>23,'city'=>    'Las Piedras de Perijá'],
            ['state_id'=>23,'city'=>    'Los Cortijos'],
            ['state_id'=>23,'city'=>    'Machiques'],
            ['state_id'=>23,'city'=>    'Maracaibo'],
            ['state_id'=>23,'city'=>    'Mene Grande'],
            ['state_id'=>23,'city'=>    'Palmarejo'],
            ['state_id'=>23,'city'=>    'Paraguaipoa'],
            ['state_id'=>23,'city'=>    'Potrerito'],
            ['state_id'=>23,'city'=>    'Pueblo Nuevo del Zulia'],
            ['state_id'=>23,'city'=>    'Puertos de Altagracia'],
            ['state_id'=>23,'city'=>    'Punta Gorda'],
            ['state_id'=>23,'city'=>    'Sabaneta de Palma'],
            ['state_id'=>23,'city'=>    'San Francisco'],
            ['state_id'=>23,'city'=>    'San José de Perijá'],
            ['state_id'=>23,'city'=>    'San Rafael del Moján'],
            ['state_id'=>23,'city'=>    'San Timoteo'],
            ['state_id'=>23,'city'=>    'Santa Bárbara Del Zulia'],
            ['state_id'=>23,'city'=>    'Santa Cruz de Mara'],
            ['state_id'=>23,'city'=>    'Santa Cruz del Zulia'],
            ['state_id'=>23,'city'=>    'Santa Rita'],
            ['state_id'=>23,'city'=>    'Sinamaica'],
            ['state_id'=>23,'city'=>    'Tamare'],
            ['state_id'=>23,'city'=>    'Tía Juana'],
            ['state_id'=>23,'city'=>    'Villa del Rosario'],
            ['state_id'=>21,'city'=>    'La Guaira'],
            ['state_id'=>21,'city'=>    'Catia La Mar'],
            ['state_id'=>21,'city'=>    'Macuto'],
            ['state_id'=>21,'city'=>    'Naiguatá'],
            ['state_id'=>25,'city'=>    'Archipiélago Los Monjes'],
            ['state_id'=>25,'city'=>    'Isla La Tortuga y Cayos adyacentes'],
            ['state_id'=>25,'city'=>    'Isla La Sola'],
            ['state_id'=>25,'city'=>    'Islas Los Testigos'],
            ['state_id'=>25,'city'=>    'Islas Los Frailes'],
            ['state_id'=>25,'city'=>    'Isla La Orchila'],
            ['state_id'=>25,'city'=>    'Archipiélago Las Aves'],
            ['state_id'=>25,'city'=>    'Isla de Aves'],
            ['state_id'=>25,'city'=>    'Isla La Blanquilla'],
            ['state_id'=>25,'city'=>    'Isla de Patos'],
            ['state_id'=>25,'city'=>    'Islas Los Hermanos']

        ];

        foreach ($data as $key) {
            
            City::create($key);

        }
    }



}

