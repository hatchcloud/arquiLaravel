<?php

namespace Database\Seeders;

use App\Models\business_hour;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Business_hourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $oHour = new business_hour();
        $oHour->busines_hour = '10:30';
        $oHour->save();

        $oHour2 = new business_hour();
        $oHour2->busines_hour = '11:30';
        $oHour2->save();

        $oHour3 = new business_hour();
        $oHour3->busines_hour = '14:30';
        $oHour3->save();

        $oHour4 = new business_hour();
        $oHour4->busines_hour = '15:30';
        $oHour4->save();
    }
}
