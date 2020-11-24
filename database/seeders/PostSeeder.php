<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class PostSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $users = User::all();

        foreach($users as $user) {
            Post::factory()->times(rand(0, 10))->create(['user_id' => $user->id]);
        }
    }
}
