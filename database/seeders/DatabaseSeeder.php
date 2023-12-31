<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Http\Models\User;
use App\Http\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    
        
         \App\Models\User::factory(5)->create();
         \App\Models\Post::factory(3)->create();
         

        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }

    /*public function user(): \App\Models\User
    {
        return $this->belongsTo(User::class);
    }*/

}
