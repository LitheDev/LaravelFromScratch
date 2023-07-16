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

        $user = User::factory()->create([
            'name'=>'John Doe'
        ]);

        // Create 10 users from the UserFactory.php template
        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

    }
}
