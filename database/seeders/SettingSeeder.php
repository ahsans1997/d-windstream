<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $research_data=[
            'title' => 'Research & Scholarship',
            'research_description' => 'Driving discoveries vital to our world, our health, and our intellectual life',
            'section_1' => [
                'section_1_count' => '99',
                'section_1_title' => 'Institutes',
                'section_1_description' => 'cross disciplinary boundaries',
            ],
            'section_2' => [
                'section_2_count' => '20',
                'section_2_title' => 'Libraries',
                'section_2_description' => 'hold over 9.5 million volumes',
            ],
            'section_3' => [
                'section_3_count' => '1.69',
                'section_3_title' => 'Billion',
                'section_3_description' => 'sponsored research budget',
            ],
        ];

        $research = json_encode($research_data);

        $about_data =[
            'title' => 'About NITER',
            'about_description' => 'A place for learning, discovery, innovation, expression and discourse',
            'section_1' => [
                'section_1_title' => 'Opening In',
                'section_1_count' => '1991',
            ],
            'section_2' => [
                'section_2_title' => 'Students',
                'section_2_count' => '1775',
            ],
            'section_3' => [
                'section_3_title' => 'department',
                'section_3_count' => '5',
            ],
            'section_4' => [
                'section_4_title' => 'alumni',
                'section_4_count' => '16',
            ],
        ];

        $about = json_encode($about_data);

        $setting = [
            'web_logo'=> 'logo.png',
            'mobile_logo'=> 'mobilelogo.png',
            'homebanner' => 'homebanner.jpg',
            'homefooterbanner' => 'homefooterbanner.jpg',
            'header_color' => '#8FFFB8',
            'footer_color' => '#8FFFB8',
            'meta_description' => 'website',
            'meta_keyword' => 'website',
            'google_analytics' => 'googleanalytics',

            'home_research' => $research,
            'home_about' => $about,

            'programbanner' => 'programbanner.jpg',
            'newsbanner' => 'newsbanner.jpg',
            'eventbanner' => 'eventbanner.jpg',
            'departmentbanner' => 'departmentbanner.jpg',
            'researchbanner' => 'researchbanner.jpg',
            'aboutbanner' => 'aboutbanner.jpg',
            'contactbanner' => 'contactbanner.jpg',
            'facultymemberbanner' => 'facultymemberbanner.jpg',
            'noticebanner' => 'noticebanner.jpg',
            'defaultbanner' => 'defaultbanner.jpg',

        ];
        Setting::insert($setting);
    }
}
