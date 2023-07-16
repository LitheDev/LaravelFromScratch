<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    // When this database seeder is run, it will do the following to prepare the production environment for testing
    public function run()
    {
        // Replace existing data with new data
        User::truncate();
        Category::truncate();

        // Create 10 users from the UserFactory.php template
        \App\Models\User::factory(10)->create();

        // Create a Category called Personal
        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        // Create a Category called Family
        Category::create([
            'name'=>'Family',
            'slug'=>'family'
        ]);

        // Create a Category called Work
        Category::create([
            'name'=>'Work',
            'slug'=>'work'
        ]);



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
