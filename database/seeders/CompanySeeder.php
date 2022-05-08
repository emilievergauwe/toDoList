<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for($i = 0; $i < 5; $i++) {
            $count = 'task' . strval($i);
            Company::create([
                'name' => $faker->company(),
            ] );
        }
    }
}
