<?php

namespace Database\Seeders;

use App\Models\Meta;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Meta::factory(100)->create();
        $homeData = array (
            [
                'name'=> 'intro_header',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
        );
        $data = array_merge($homeData);

        DB::table('metas')->insert($data);
    }
}
