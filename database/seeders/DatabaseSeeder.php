<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersTableSeeder::class);
        $this->call(BlogCategoriesTableSeeder::class);
        \App\Models\BlogPost::factory(100)->create();


        //User::factory()->create([
            //'name' => 'Test User',
            //'email' => 'test@example.com',
        //]);
    }
}
