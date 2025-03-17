<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder {
    public function run(): void {
        DB::table('tbl_features')->insert([
            ['name' => 'Model', 'description' => 'Represents database tables as PHP classes in Laravel.'],
            ['name' => 'View', 'description' => ''],
            ['name' => 'Controller', 'description' => 'Acts as the controller or middleman of Model and View'],
            ['name' => 'Routes', 'description' => 'Defines URLs and their corresponding controllers.'],
            ['name' => 'Middleware', 'description' => ''],
            ['name' => 'Blade Templates', 'description' => 'A powerful templating engine for views.'],
            ['name' => 'Migrations', 'description' => ''],
            ['name' => 'Seeders', 'description' => ''],
            ['name' => 'Database', 'description' => 'Handles database connections'],
            ['name' => 'Eloquent ORM', 'description' => ''],
        ]);
    }
}
