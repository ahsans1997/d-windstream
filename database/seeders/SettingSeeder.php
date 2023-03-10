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
            'about_title' => 'About NITER',
            'about_description' => 'A place for learning, discovery, innovation, expression and discourse',
            'about_section_1' => [
                'about_section_1_title' => 'Opening In',
                'about_section_1_count' => '1991',
            ],
            'about_section_2' => [
                'about_section_2_title' => 'Students',
                'about_section_2_count' => '1775',
            ],
            'about_section_3' => [
                'about_section_3_title' => 'department',
                'about_section_3_count' => '5',
            ],
            'about_section_4' => [
                'about_section_4_title' => 'alumni',
                'about_section_4_count' => '16',
            ],
        ];


        $about = json_encode($about_data);

        $portal_data = [
            'facebook' => 'https://facebook.com',
            'linkedin' => 'https://linkedin.com',
            'youtube' => 'https://youtube.com',
        ];
        $portal = json_encode($portal_data);

        $setting = [
            'organization_name' => 'Company Name',
            'header_color' => '#8FFFB8',
            'footer_color' => '#8FFFB8',
            'meta_description' => 'website',
            'meta_keyword' => 'website',
            'google_analytics' => 'googleanalytics',


            'home_research' => $research,
            'home_about' => $about,
            'portal' => $portal,

        ];
        Setting::insert($setting);
    }
}
