<?php

namespace Database\Seeders;

use App\Models\Designation;
use Illuminate\Database\Seeder;

class DesignationSeeder extends Seeder
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
                        'name'=> "Assistant Professor & Chairperson"
                    ],[
                        'name'=> "Assistant Professor"
                    ],[
                        'name'=> "Professor"
                    ],

            ];

            foreach($data as $designation){
                $designation_check = Designation::where('name',$designation['name'])->first();
                if($designation_check == null){
                    $designation_add = new Designation();
                    $designation_add->name = $designation['name'];
                    $designation_add->save();
                }
            }
    }
}
