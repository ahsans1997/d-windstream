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
            'phone' => '+880 2 5500 0000',
            'email' => 'test@test.com',
            'address' => 'Dhaka, Bangladesh',
        ];
        $enquiries = json_encode($enquiry);

        $accommodation = [
            'boys' =>[
                'phone' => '+880 2 5500 0000',
                'email' => 'test@t,com',
            ],
            'female' =>[
                'phone' => '+880 2 5500 0000',
                'email' => 'test@t,com',
            ],
        ];
        $accommodations = json_encode($accommodation);

        $emergency = [
            'medical' =>[
                'phone' => '+880 2 5500 0000',
                'email' => 'test@t,com',
            ],
            'proctorial' =>[
                'phone' => '+880 2 5500 0000',
                'email' => 'test@t,com',
            ],
        ];
        $emergencies = json_encode($emergency);

        $exam = [
            'phone' => '+880 2 5500 0000',
            'email' => 'test@test.com',
        ];
        $exams = json_encode($exam);

        $library = [
            'phone' => '+880 2 5500 0000',
            'email' => 'test@test.com',
        ];
        $libraries = json_encode($library);

        $accounts = [
            'phone' => '+880 2 5500 0000',
            'email' => 'test@test.com',
        ];
        $accountss = json_encode($accounts);

        $it = [
            'phone' => '+880 2 5500 0000',
            'email' => 'test@test.com',
        ];
        $its = json_encode($it);

        $crir = [
            'phone' => '+880 2 5500 0000',
            'email' => 'test@test.com',
        ];
        $crirs = json_encode($crir);

        $location = [
            'address' => 'Dhaka, Bangladesh',
            'map' => 'test map',
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
