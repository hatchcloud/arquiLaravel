<?php

namespace Database\Seeders;

use App\Models\appointment;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    public function run(): void
    {
        appointment::factory(50)->create();
    }
}
