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
            [
                'name'=> 'intro_image',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'image',
                'page' => 'image'
            ],
            [
                'name'=> 'about_us_header',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name'=> 'about_us_content',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name'=> 'about_us_image',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'name'=> 'our_mission_content',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name'=> 'our_vision_content',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name'=> 'our_mission_image',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'name'=> 'our_products_header',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name'=> 'our_partners_header',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name'=> 'our_partners_image',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'name'=> 'partner_title_1',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name'=> 'partner_title_2',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name'=> 'partner_title_3',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name'=> 'partner_image_1',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'name'=> 'partner_image_2',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'name'=> 'partner_image_3',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'name'=> 'contact_us_header',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name'=> 'contact_us_phone',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name'=> 'contact_us_email',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'name'=> 'contact_us_address',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
        );
        $adboutData = array (
            [
                'name'=> 'about_us_header',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'name'=> 'about_1_title_1',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'name'=> 'about_1_title_2',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'name'=> 'about_1_content',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'name'=> 'about_2_image',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'image',
                'page' => 'about'
            ],
            [
                'name'=> 'about_2_title',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'name'=> 'about_2_content',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'name'=> 'about_3_image',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'image',
                'page' => 'about'
            ],
            [
                'name'=> 'about_3_title',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'name'=> 'about_3_content',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'name'=> 'our_mission_image',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'image',
                'page' => 'about'
            ],
            [
                'name'=> 'our_mission_content',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'name'=> 'our_vision_content',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'name'=> 'our_certificates_image_1',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'image',
                'page' => 'about'
            ],
            [
                'name'=> 'our_certificates_image_2',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'image',
                'page' => 'about'
            ],
            [
                'name'=> 'our_certificates_title',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'name'=> 'our_statistics_title',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'name'=> 'our_statistics_1',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'name'=> 'our_statistics_title_1',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'name'=> 'our_statistics_2',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'name'=> 'our_statistics_title_2',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'name'=> 'our_statistics_3',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'name'=> 'our_statistics_title_3',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'name'=> 'our_statistics_4',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'name'=> 'our_statistics_title_4',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
        );
        $contactData = array (
            [
                'name'=> 'contact_header',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'contact'
            ],
            [
                'name'=> 'contact_us_phone',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'contact'
            ],
            [
                'name'=> 'contact_us_email',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'contact'
            ],
            [
                'name'=> 'contact_us_address',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'contact'
            ],
        );
        $footerData = array (
            [
                'name'=> 'footer_content',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'footer'
            ],
            [
                'name'=> 'facebook',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'footer'
            ],
            [
                'name'=> 'twitter',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'footer'
            ],
            [
                'name'=> 'instagram',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'footer'
            ],
            [
                'name'=> 'linkedin',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'footer'
            ],

        );
        $data = array_merge($homeData, $adboutData, $contactData, $footerData);

        DB::table('metas')->insert($data);
    }
}
