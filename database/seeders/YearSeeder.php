<?php

namespace Database\Seeders;

use App\Models\Year;
use Illuminate\Database\Seeder;

class YearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for($i=1950;$i<2300;$i++){
            $year = Year::where('year',$i)->first();
            if($year == null){
                $new_year = new Year();
                $new_year->year = $i;
                $new_year->save();
            }
       }
    }
}
