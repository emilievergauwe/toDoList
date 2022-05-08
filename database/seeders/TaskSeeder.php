<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for($i = 1; $i < 10; $i++) {
            $count = 'task' . strval($i);
            Task::create([
                'info' => $count,
                'status' => 'open',
                'company' => 'Bailey LLC',
                'achiever' =>'none'
            ] );
        }
        
        for($i = 1; $i < 10; $i++) {
            $count = 'task' . strval($i);
            Task::create([
                'info' => $count,
                'status' => 'open',
                'company' => 'Willms-Moen',
                'achiever' =>'none'
            ] );
        }  

        for($i = 1; $i < 10; $i++) {
            $count = 'task' . strval($i);
            Task::create([
                'info' => $count,
                'status' => 'open',
                'company' => 'Lynch and Sons',
                'achiever' =>'none'
            ] );
        }  
    }
}
