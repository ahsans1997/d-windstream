<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Privacy Policy',
                'slug' => 'privacy-policy',
            ],
            [
                'title' => 'Terms of Use',
                'slug' => 'terms-of-use',
            ],
            [
                'title' => 'Accessibiligy',
                'slug' => 'accessibility',
            ],
            [
                'title' => 'About',
                'slug' => 'about',
            ],
            [
                'title' => 'Contact',
                'slug' => 'contact',
            ],
            [
                'title' => 'faq',
                'slug' => 'faq',
            ],
            [
                'title' => 'Student Portal',
                'slug' => 'student-portal',
            ],
            [
                'title' => 'Staff Portal',
                'slug' => 'staff-portal',
            ], [
                'title' => 'Webmail Login',
                'slug' => 'webmail-login',
            ],
            [
                'title' => 'Clubs and societies',
                'slug' => 'clubs-and-societies',
            ],
            [
                'title' => 'Approved Noc',
                'slug' => 'approved-noc',
            ],
            [
                'title' => 'NITER Form',
                'slug' => 'niter-form',
            ],
            [
                'title' => 'Historical Overview',
                'slug' => 'historical-overview',
            ],
            [
                'title' => 'Vision and Mission',
                'slug' => 'vision-mission',
            ],
            [
                'title' => 'Undergraduate Admission',
                'slug' => 'undergraduate-admission',
            ],
            [
                'title' => 'Graduate Admission',
                'slug' => 'graduate-admission',
            ],
            [
                'title' => 'Alumni',
                'slug' => 'alumni',
            ]
        ];


        // check and insert
        foreach ($data as $key => $value) {
            $check = Page::where('slug', $value['slug'])->first();
            if (!$check) {
                Page::insert($value);
            }
        }


    }
}
