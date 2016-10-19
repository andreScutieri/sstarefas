<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

        	['id' => 1,
        	'name' => 'andre',
        	'email' => 'andre@test.com.br',
        	'password' => bcrypt('andre')],

        	['id' => 2,
        	'name' => 'denize',
        	'email' => 'denize@test.com.br',
        	'password' => bcrypt('denize')],

        	['id' => 3,
        	'name' => 'rose',
        	'email' => 'rose@test.com.br',
        	'password' => bcrypt('rose')]

        ]);

        DB::table('projects')->insert([

        	['id' => 1,
        	'title' => 'All Projects',
        	'slug' => 'all'],

        	['id' => 2,
        	'title' => 'SPED',
        	'slug' => 'sped'],

        	['id' => 3,
        	'title' => 'SuperSoft',
        	'slug' => 'ssoft']

        ]);

        DB::table('tasks')->insert([

        	['title' => 'Task 1',
        	'text' => 'This is the first task of Project 1',
        	'description' => '<p>This is the very first task of the system.</p><p>We should keep it the way it is.</p><p><strong>This</strong> is the very first task!</p>',
        	'creator_id' => 1, // This task was created by user Andre
        	'project_id' => 1, // This task is part of Project All.
        	'completed' => false, 
        	'needs_file' => false,
        	'completed_at' => null,
        	'deadline_at' => Carbon::now()
        	],

        	['title' => 'Task 2',
        	'text' => 'This is the second task of Project 1',
        	'description' => null,
        	'creator_id' => 2, // This task was created by user Denize
        	'project_id' => 1, // This task is part of Project All.
        	'completed' => false, 
        	'needs_file' => true,
        	'completed_at' => null,
        	'deadline_at' => Carbon::now()
        	],

        	['title' => 'Task 3',
        	'text' => 'Hope to see you soon!',
        	'description' => '<p>A very cute task!</p>',
        	'creator_id' => 3, // This task was created by user Rose
        	'project_id' => 2, // This task is part of Project SPED.
        	'completed' => true, 
        	'needs_file' => false,
        	'completed_at' => Carbon::now(),
        	'deadline_at' => Carbon::now()
        	],

        ]);

    }
}
