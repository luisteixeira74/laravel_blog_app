<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => 'Versioning Scheme',
            'description' => 'Laravel and its other first-party packages follow Semantic Versioning.',
            'status' => true,
            'user_id' => 1
        ]);

        DB::table('posts')->insert([
            'title' => 'roll Back and Migrate Using a Single Command.',
            'description' => 'You may roll back and re-migrate a limited number of migrations by providing the step option to the refresh command.',
            'status' => true,
            'user_id' => 1
        ]);

        DB::table('posts')->insert([
            'title' => 'Database: Seeding',
            'description' => 'Laravel includes the ability to seed your database with data using seed classes. All seed classes are stored in the database/seeders directory.',
            'status' => true,
            'user_id' => 1
        ]);

        DB::table('posts')->insert([
            'title' => 'Creating Tables',
            'description' => 'To create a new database table, use the create method on the Schema facade. ',
            'status' => true,
            'user_id' => 1
        ]);
    }
}
