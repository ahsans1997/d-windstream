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
                'title' => 'Approved Noc',
                'slug' => 'approved-noc',
            ],
            [
                'title' => 'NITER Form',
                'slug' => 'niter-form',
            ],
            [
                'title' => 'Alumni',
                'slug' => 'alumni',
            ],
            [
                'title' => 'SEIP',
                'slug' => 'seip',
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
