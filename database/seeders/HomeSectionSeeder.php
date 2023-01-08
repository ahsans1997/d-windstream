<?php

namespace Database\Seeders;

use App\Models\HomeSection;
use Illuminate\Database\Seeder;

class HomeSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $part1 = [
            'part1_title' => 'Generating knowledge',
            'part1_description' => 'Experts across seven departments will expand understanding of the natural world and its intersections with human society',
            'part1_link_name' => 'department',
            'part1_link' => 'department'
        ];
        $part1 = json_encode($part1);
        $part2 = [
            'part2_title' => 'Generating knowledge',
            'part2_description' => 'Experts across seven departments will expand understanding of the natural world and its intersections with human society',
            'part2_link_name' => 'department',
            'part2_link' => 'department'
        ];
        $part2 = json_encode($part2);
        $part3 = [
            'part3_title' => 'Generating knowledge',
            'part3_description' => 'Experts across seven departments will expand understanding of the natural world and its intersections with human society',
            'part3_link_name' => 'department',
            'part3_link' => 'department'
        ];
        $part3 = json_encode($part3);
        $data=[
            'section_1_title' =>'Accelerating climate solutions',
            'section_1_description' => 'The new Stanford Doerr School of Sustainability is designed to tackle urgent global challenges',
            'part1' => $part1,
            'part2' => $part2,
            'part3' => $part3,
        ];





        HomeSection::insert($data);
    }
}
