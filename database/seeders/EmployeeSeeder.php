<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for($i = 0; $i < 10; $i++) {
            $count = 'task' . strval($i);
            Employee::create([
                'name' => $faker->firstName(),
                'email' => $faker->email(),
                'company' => 'Lynch and Sons',
                'administrator' =>'no'
            ] );
        }

        for($i = 0; $i < 2; $i++) {
            $count = 'task' . strval($i);
            Employee::create([
                'name' => $faker->firstName(),
                'email' => $faker->email(),
                'company' => 'Lynch and Sons',
                'administrator' =>'yes'
            ] );
        }

        
        for($i = 0; $i < 10; $i++) {
            $count = 'task' . strval($i);
            Employee::create([
                'name' => $faker->firstName(),
                'email' => $faker->email(),
                'company' => 'Willms-Moen',
                'administrator' =>'no'
            ] );
        }

        for($i = 0; $i < 2; $i++) {
            $count = 'task' . strval($i);
            Employee::create([
                'name' => $faker->firstName(),
                'email' => $faker->email(),
                'company' => 'Willms-Moen',
                'administrator' =>'yes'
            ] );
        }

        
        for($i = 0; $i < 10; $i++) {
            $count = 'task' . strval($i);
            Employee::create([
                'name' => $faker->firstName(),
                'email' => $faker->email(),
                'company' => 'Bailey LLC',
                'administrator' =>'no'
            ] );
        }

        for($i = 0; $i < 2; $i++) {
            $count = 'task' . strval($i);
            Employee::create([
                'name' => $faker->firstName(),
                'email' => $faker->email(),
                'company' => 'Bailey LLC',
                'administrator' =>'yes'
            ] );
        }
    }
}
