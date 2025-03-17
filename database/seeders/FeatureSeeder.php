<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    public function run()
    {
        DB::table('laravel_features')->truncate(); 

        DB::table('laravel_features')->insert([
            ['name' => 'Model', 'description' => 'Represents database tables as PHP classes in Laravel'],
            ['name' => 'View', 'description' => 'Displays the user interface using Blade templates'],
            ['name' => 'Controller', 'description' => 'Acts as the controller or middleman of Model and View'],
            ['name' => 'Routes', 'description' => 'Defines URLs and their corresponding controllers'],
            ['name' => 'Middleware', 'description' => 'Filters HTTP requests before they reach controllers'],
            ['name' => 'Blade Templates', 'description' => 'A powerful templating engine for views.'],
            ['name' => 'Migrations', 'description' => 'Manage database schema changes through version control'],
            ['name' => 'Seeders', 'description' => 'Populate the database with test or sample data'],
            ['name' => 'Database', 'description' => 'Handles database connections'],
            ['name' => 'Eloquent ORM', 'description' => 'Provides an elegant Active Record implementation'],
        ]);
    }
}
