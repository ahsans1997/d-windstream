<?php

namespace Database\Seeders;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $enquiry = [
            'enquiryphone' => '+880 2 5500 0000',
            'enquiryemail' => 'test@test.com',
            'enquiryaddress' => 'Dhaka, Bangladesh',
        ];
        $enquiries = json_encode($enquiry);

        $accommodation = [
            'boys' =>[
                'accommodationboysphone' => '+880 2 5500 0000',
                'accommodationboysemail' => 'test@test.com',
            ],
            'female' =>[
                'accommodationfemalephone' => '+880 2 5500 0000',
                'accommodationfemaleemail' => 'test@test.com',
            ],
        ];
        $accommodations = json_encode($accommodation);

        $emergency = [
            'medical' =>[
                'emergencymedicalphone' => '+880 2 5500 0000',
                'emergencymedicalemail' => 'test@test.com',
            ],
            'proctorial' =>[
                'emergencyproctorialphone' => '+880 2 5500 0000',
                'emergencyproctorialemail' => 'test@test.com',
            ],
        ];
        $emergencies = json_encode($emergency);

        $exam = [
            'examphone' => '+880 2 5500 0000',
            'examemail' => 'test@test.com',
        ];
        $exams = json_encode($exam);

        $library = [
            'libraryphone' => '+880 2 5500 0000',
            'libraryemail' => 'test@test.com',
            'libraryonlinesupport' => 'test',
        ];
        $libraries = json_encode($library);

        $accounts = [
            'accountsphone' => '+880 2 5500 0000',
            'accountsemail' => 'test@test.com',
            'accountsbank' => 'test bank',
        ];
        $accountss = json_encode($accounts);

        $it = [
            'itphone' => '+880 2 5500 0000',
            'itemail' => 'test@test.com',
        ];
        $its = json_encode($it);

        $crir = [
            'crirphone' => '+880 2 5500 0000',
            'criremail' => 'test@test.com',
        ];
        $crirs = json_encode($crir);

        $location = [
            'locationaddress' => 'Dhaka, Bangladesh',
            'locationmap' => 'https://goo.gl/maps/V9phPWEVeNvLUKWH7',
        ];
        $locations = json_encode($location);

        Contact::insert([
            'enquiries' => $enquiries,
            'accommodation' => $accommodations,
            'emergency' => $emergencies,
            'exam' => $exams,
            'library' => $libraries,
            'accounts' => $accountss,
            'it' => $its,
            'crir' => $crirs,
            'location' => $locations,
            'created_at' => Carbon::now(),
        ]);
    }
}
