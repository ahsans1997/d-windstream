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
        $home_section_1_data = [
            'home_section_1_title' => 'Accelerating climate solutions',
            'home_section_1_description' => 'The new Stanford Doerr School of Sustainability is designed to tackle urgent global challenges',
            'home_section_1_part_1' => [
                'home_section_1_part_1_title' => 'Generating knowledge',
                'home_section_1_part_1_description' => 'Experts across seven departments will expand understanding of the natural world and its intersections with human society',
                'home_section_1_part_1_link' => 'department',
            ],
            'home_section_1_part_2' => [
                'home_section_1_part_2_title' => 'Generating knowledge',
                'home_section_1_part_2_description' => 'Experts across seven departments will expand understanding of the natural world and its intersections with human society',
                'home_section_1_part_2_link' => 'department',
            ],
            'home_section_1_part_3' => [
                'home_section_1_part_3_title' => 'Generating knowledge',
                'home_section_1_part_3_description' => 'Experts across seven departments will expand understanding of the natural world and its intersections with human society',
                'home_section_1_part_3_link' => 'department',
            ],
         ];

        $home_section_1 = json_encode($home_section_1_data);

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

        $setting = [
            'organization_name' => 'Company Name',
            'web_logo'=> 'logo.png',
            'mobile_logo'=> 'mobilelogo.png',
            'homebanner' => 'homebanner.jpg',
            'homefooterbanner' => 'homefooterbanner.jpg',
            'header_color' => '#8FFFB8',
            'footer_color' => '#8FFFB8',
            'meta_description' => 'website',
            'meta_keyword' => 'website',
            'google_analytics' => 'googleanalytics',

            'home_section_1' => $home_section_1,
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
