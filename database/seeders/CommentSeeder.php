<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
            'comment' => 'Major framework releases are released every year (~Q1), while minor and patch releases may be released as often as every week. Minor and patch releases should never contain breaking changes.',
            'post_id' => 1,
            'is_published' => true
        ]);

        DB::table('comments')->insert([
            'comment' => 'The charset and collation properties may be used to specify the character set and collation for the created table when using MariaDB or MySQL.',
            'post_id' => 1,
            'is_published' => true
        ]);

        DB::table('comments')->insert([
            'comment' => 'By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.',
            'post_id' => 2,
            'is_published' => true
        ]);

        DB::table('comments')->insert([
            'comment' => 'In addition, a few other properties and methods may be used to define other aspects of the tables creation.',
            'post_id' => 2,
            'is_published' => true
        ]);
    }
}
